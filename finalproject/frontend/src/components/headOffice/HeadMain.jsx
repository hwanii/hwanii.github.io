import {useState, useRef, useContext} from 'react';
import { useNavigate } from 'react-router-dom';
import headStyles from "./Head_jin.module.css";
import Notice from "../notice/Notice.jsx";
import NoticeDetail from "./NoticeDetail.jsx";
import HeadPopup from "./HeadPopup.jsx";
import HeadGraph from "./HeadGraph.jsx";
import { AuthContext } from '../../context/AuthContext.jsx';

function HeadMain () {
  const navigate = useNavigate();
  const [selectedNotice, setSelectedNotice] = useState(null);
  const [showDetail, setShowDetail] = useState(false);
  const noticeRef = useRef(null);
  const { token } = useContext(AuthContext);

  const handleNoticeClick = (notice) => {
    setSelectedNotice(notice);
    setShowDetail(true);
  };

  const handleMoreClick = () => {
    navigate('/head/NoticeRegister');
  };

  const handleCloseDetail = () => {
    // 팝업 닫기 전에 공지사항 목록 새로고침
    if (noticeRef.current) {
      noticeRef.current.refresh();
    }
    setShowDetail(false);
    setSelectedNotice(null);
  };


  return (
    <div className={headStyles.content}>

      <div className={headStyles.main_inner_grid}>

        <section className={headStyles.main_sec1}>
          <h1 className={`${headStyles.title} ${headStyles.main_title1}`}>주문/출고 요약</h1>
          <HeadGraph />
        </section>

        <section className={headStyles.main_sec2}>
          <div className={headStyles.notice_header}>
            <h1 className={`${headStyles.title} ${headStyles.main_title2}`}>공지사항</h1>
            <button className={headStyles.more_btn} onClick={handleMoreClick}>더보기</button>
          </div>

          {token ? (
            // 각 메인페이지 role 변경 시 해당 공지사항 출력: 'head_office' | 'logistic' | 'agency'
            <Notice
              ref={noticeRef}
              role="head_office"
              limit={5}  // 본사만 5개 고정, 물류, 대리점은 모두 출력
              onNoticeClick={handleNoticeClick}
            />
          ) : (
            <div>현재 공지사항이 없습니다.</div>
          )}
        </section>

      </div>

      {showDetail && selectedNotice && (
        <HeadPopup isOpen={showDetail} onClose={handleCloseDetail}>
          <NoticeDetail
            noticeDetail={selectedNotice}
            readOnly={true}
            onClose={handleCloseDetail}
          />
        </HeadPopup>
      )}
    </div>
  )
}

export default HeadMain