import axios from "axios";
import {useContext, useEffect, useMemo, useRef, useState} from "react";
import style from "./Logistic_Notice.module.css";
import Notice from "../notice/Notice.jsx";
import {AuthContext} from "../../context/AuthContext.jsx";
import HeadPopup from "../headOffice/HeadPopup.jsx";
import NoticeDetail from "../headOffice/NoticeDetail.jsx";

/* =============== 일정 헬퍼 =============== */
// 오늘부터 월~토만 집계해서 N칸 반환(일요일 제외)
function getNextBizDays(count = 12) {
  const days = [];
  const start = new Date();
  const d = new Date(start);
  while (days.length < count) {
    if (d.getDay() !== 0) days.push(new Date(d)); // 0=일요일 제외
    d.setDate(d.getDate() + 1);
  }
  return days;
}
const fmtDate = (d) => {
  const y = d.getFullYear();
  const m = String(d.getMonth() + 1).padStart(2, "0");
  const day = String(d.getDate()).padStart(2, "0");
  return `${y}.${m}.${day}`;
};
const toIsoDate = (d) => d.toISOString().slice(0, 10);
const KOR_DOW = ["일", "월", "화", "수", "목", "금", "토"];



function Logistic_Notice() {

  const [selectedNotice, setSelectedNotice] = useState(null);
  const [showDetail, setShowDetail] = useState(false);
  const noticeRef = useRef(null);


  const { token } = useContext(AuthContext);
  console.log("HeadMain 렌더링");
  console.log("HeadMain token:", token);

  const handleNoticeClick = (notice) => {

    console.log("공지 클릭됨:", notice); // 정환 추가

    setSelectedNotice(notice);
    setShowDetail(true);
  };

  const handleCloseDetail = () => {
    // 팝업 닫기 전에 공지사항 목록 새로고침
    if (noticeRef.current) {
      noticeRef.current.refresh();
    }
    setShowDetail(false);
    setSelectedNotice(null);
  };


  // 일정표: 날짜키 → 항목배열
  const [notices, setNotices] = useState([]);
  const [schedulesByDate, setSchedulesByDate] = useState({});
  const days = useMemo(() => getNextBizDays(5), []);

  useEffect(() => {
    axios.get('api/notices', {params: {codes: [0, 2]}})
      .then(res => {
        const rows = res.data?.data ?? res.data ?? [];
        setNotices(rows.map(n => ({
          ntKey: n.ntKey,
          ntCode: n.ntCode,
          ntCategory: n.ntCategory,
          ntContent: n.ntContent,
          startDate: n.startDate,
        })));
      })
      .catch(err => console.error("notice error:", err));
  },[]);


  useEffect(() => {
    const from = days[0];
    const to = days[days.length - 1];

    axios.get(`/api/agencyorder/schedule`, {
      params: { from: toIsoDate(from), to: toIsoDate(to) },
    })
      .then(res => {
        const rows = (res.data?.data ?? res.data ?? []);
        console.log('[schedule rows]', rows); // ← 실제 응답 확인용

        const byDate = {};
        rows.forEach(r => {
          // 날짜 필드: orReserve 또는 or_reserve → 'YYYY-MM-DD' 10자리만 사용
          const iso = String(r.orReserve ?? r.or_reserve ?? '').slice(0, 10);
          if (!iso) return;

          const key = iso.replace(/-/g, '.'); // 'YYYY.MM.DD' 로 카드 key 생성
          if (!byDate[key]) byDate[key] = [];

          byDate[key].push({
            // 카드 표시용 텍스트 (필드명 양쪽 케이스 모두 대응)
            title: String(r.agName ?? r.ag_Name ?? "")
          });
        });

        setSchedulesByDate(byDate);
      })
      .catch(err => {
        console.error('schedule error:', err);
      });
  }, [days]);
  return (
    <>
      {/* ===== 도착 일정표 섹션 ===== */}
      <section className={style.schedule}>
        <h2 className={style.scheduleTitle}>도착 예정일</h2>
        <div className={style.scheduleGrid}>
          {days.map((d) => {
            const key = fmtDate(d);
            const items = schedulesByDate[key] || [];
            const dow = KOR_DOW[d.getDay()];
            return (
              <article key={key} className={style.scheduleCard}>
                <div className={style.scheduleDate}>
                  {key} <span className={style.scheduleDow}>({dow})</span>
                </div>
                <ul className={style.scheduleList}>
                  {items.length === 0 ? (
                    <li className={style.empty}>일정이 없습니다.</li>
                  ) : (
                    items.map((it, i) => (
                      <li key={i}>
                        <span className={style.scheduleText}>{it.title}</span>
                      </li>
                    ))
                  )}
                </ul>
              </article>
            );
          })}
        </div>
      </section>


      {/* ===== 공지사항 섹션 ===== */}
      <section className={style.notice_lg}>
        <div className={style.noticeheader}>
          <h1 className={style.noticetitle}>공지사항</h1>
        </div>

        {token ? (
          <Notice
            ref={noticeRef}
            role="logistic"
            onNoticeClick={handleNoticeClick}
          />
        ) : (
          <div>현재 공지사항이 없습니다.</div> // 진경 수정
        )}

        {showDetail && selectedNotice && (
          <HeadPopup isOpen={showDetail} onClose={handleCloseDetail}>
            <NoticeDetail
              noticeDetail={selectedNotice}
              readOnly={true}
              onClose={handleCloseDetail}
            />
          </HeadPopup>
        )}
      </section>
    </>
  );
}

export default Logistic_Notice;
