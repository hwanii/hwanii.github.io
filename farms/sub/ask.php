<!DOCTYPE html>
<html lang="ko">

<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>팜스 바이오텍</title>
    <meta name="description" content="생명과학 기술을 기반으로 산업의 전반적인 분야에서 다양하게 활용할 수 있는 기능성 제품을 연구개발하는 기업">
    <meta property="og:type" content="website" />
    <meta property="og:image" content="/img/opengraph-img.jpg" />
    <meta property="og:title" content="팜스 바이오텍" />
    <meta property="og:description" content="생명과학 기술을 기반으로 산업의 전반적인 분야에서 다양하게 활용할 수 있는 기능성 제품을 연구개발하는 기업" />
    <meta property="og:url" content="http://farmsbiotech.co.kr" />
    <meta name="robots" content="index,follow" />
    <!-- Mobile Stuff -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-tap-highlight" content="no">

    <!-- Chrome on Android -->

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="">
    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon//favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon//favicon-16x16.png">
    <link rel="manifest" href="/favicon/manifest.json">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="rgba(0,0,0,0)">
    <meta name="naver-site-verification" content="01f26d1bf9dfb238fe359fb66ee4c816281dd2fe" />
    <link rel="canonical" href="홈페이지 URL 입력">
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php'; ?>
    <?php
    $bSql="SELECT * FROM banner WHERE `type`='contact'";
    $bRes=mysqli_query($conn, $bSql);
    $bRow=mysqli_fetch_array($bRes);
    $back=$bRow['img'];
    ?>
    <div class="sub-banner03" style="background:url('../img/file/banner/<?php echo $back?>')">
        <div class="bg"></div>
        <div class="txt">
            <h2>BIO TECH, THIINK FUTURE</h2>
            <p>
                생명과학 기술을 기반으로 산업의 전반적인 분야에서<br>
                다양하게 활용할 수 있는 기능성 제품을 연구개발하는 기업  
            </p>
        </div>
    </div>

    <div class="flow">
        <div class="inner">
            <div class="left">
                <div class="head">
                    <p>CONTACT</p>
                    <img src="../img/down-arrow.png" alt="">
                </div>
                <div class="title">
                    <ul>
                        <li class="on"><a href="../sub/ask.php">문의하기</a></li>
                    </ul>
                </div>
            </div>
            <div class="right">HOME&nbsp;&nbsp;>&nbsp;&nbsp;CONTACT&nbsp;&nbsp;>&nbsp;&nbsp;문의하기</div>
        </div>
    </div>

    <section class="ask">
        <div class="title">
            <h2>문의하기</h2>
            <p>ASK</p>
        </div>
        <form method="POST" action="../counsel.php" target="ifrm">
        <input type="hidden" name="page" value="ask.php">
        <div class="form">
            <div class="subject">
                <input type="text" name="type" placeholder="문의유형 선택해주세요." required>
            </div>
            <div class="name">
                <input type="text" name="name" placeholder="이름(필수입력)" required>
            </div>
            <div class="tel">
                <input type="tel" name="fTel" placeholder="전화번호(필수입력)" numberOnly required>
                -<input type="tel" name="mTel" numberOnly>
                -<input type="tel" name="lTel" numberOnly>
            </div>
            <div class="email">
                <input type="text" name="email" placeholder="이메일(필수입력)" required>
                @<input type="text" name="addr">
            </div>
            <div class="title">
                <input type="text" name="title" placeholder="제목(필수입력)" required>
            </div>
            <textarea name="contents" placeholder="내용을 입력하세요."></textarea>
            <div class="inquire">
                <div>
                    <input type="checkbox" required>
                    <a href="javascript:void(0)">홈페이지의 개인정보처리방침에 동의합니다. &#91;보기&#93;</a>
                </div>
                <button>문의하기</button>
            </div>
        </div>
        </form>
    </section>

    <div class="info_wrap02">
                    <div class="content">
                        <div class="news-view">
                            <div class="title" style="width: 90%">개인정보처리방침</div>
                            <div class="info_close_btn"><img src="<?php echo $root?>img/close-btn.png" alt=""
                                    style="width:100%"></div>
                        </div>
                        <div class="view-detail" style="box-sizing:border-box;overflow-y: auto;max-height:500px">
                            <p style="line-height: 25px;font-size:13px">

                                팜스 바이오텍(이하 ‘회사’라 한다)이 취급하는 모든 개인정보는 관련법령에 근거하거나 정보주체의 동의에 의하여 수집, 보유 및 처리되고 있습니다.<br>
                                회사는 개인정보취급방침을 개정하는 경우 웹사이트 공지사항을 통하여 공지할 것입니다.<br>
                                본 방침은 2021년 01월 01일부터 시행됩니다.<br>
                                1. 개인정보의 처리 목적<br>
                                회사는 다음의 목적을 위하여 개인정보를 처리합니다. 처리하고 있는 개인정보는 다음의 목적 이외의 용도로는 이용되지 않으며, 이용목적이 변경되는 경우에는 별도의
                                동의를 받는 등 필요한 조치를 이행할 것입니다.<br>
                                ① 고객문의, 본인확인<br>
                                ② 민원사항 확인, 사실확인을 위한 연락, 처리결과 통보 <br>
                                2. 개인정보의 처리 및 보유기간<br>
                                회사는 법령에 따른 개인정보 보유, 이용기간 또는 정보주체로부터 개인정보 수집 시에 동의 받은 개인정보 보유, 이용기간 내에서 개인정보를 처리 및
                                보유합니다.<br>
                                ① 민원처리 : 민원처리가 종료된 시점<br>
                                ② 상담을 위한 경우 : 상담이 종료된 시점<br>
                                ③ 관계법령 위반에 따른 수사·조사 등이 진행중인 경우에는 해당 수사·조사 종료시까지 <br>
                                3. 개인정보의 제3자 제공<br>
                                회사가 수집·보유하고 있는 개인정보는 이용자의 동의 없이는 제3자에게 제공하지 않으며, 다음의 경우에는 개인정보를 제3자에게 제공할 수 있습니다.<br>
                                ① 정보주체로부터 별도의 동의를 받은 경우<br>
                                ② 법령의 법령의 규정에 의거하거나 수사 목적으로 법령에 정해진 절차와 방법에 따라 수사기관의 요구가 있는 경우 <br>
                                4. 수집한 개인정보의 위탁<br>
                                회사는 고객의 동의 없이 개인정보를 외부업체에 위탁하지 않습니다. 향후 원활한 개인정보 업무처리를 위하여 개인정보를 위탁하는 경우, 위탁 대상자와 위탁 업무
                                내용에 대해 고객에게 통지하고 필요한 경우 사전 동의를 받도록 하겠습니다. <br>
                                5. 정보주체의 권리·의무 및 행사방법<br>
                                ① 정보주체(해당 주체의 법정대리인 포함, 이하 동일)는 회사에 대해 언제든지 개인정보 열람요구, 정정·삭제 및 처리정지를 요구할 수 있습니다.<br>
                                ② 제 ①항에 따른 권리행사는 회사에 대해 서면, 전화, FAX 등을 통하여 요구할 수 있으며, 회사는 이에 대해 지체없이 조치하겠습니다.<br>
                                ③ 고객이 개인정보의 오류 등에 대한 정정·삭제를 요구한 경우에는 회사는 정정·삭제를 완료할 때까지 당해 개인정보를 이용하거나 제공하지 않습니다.<br>
                                ④ 제 ①항에 따른 권리행사는 고객의 법정대리인이나 위임을 받은 자 등 대리인을 통하여 하실 수 있습니다. 이 경우 개인정보보호법 시행규칙 별지 11호 서식에
                                따른 위임장을 제출해야 합니다. <br>
                                6. 처리하는 개인정보 항목<br>
                                ① 수집항목 : 이름, 연락처, 이메일주소<br>
                                ② 수집방법 : 홈페이지(윤리강령, 온라인문의) <br>
                                7. 개인정보의 파기<br>
                                ① 회사는 개인정보 보유기간의 경과, 처리목적의 달성 등 개인정보가 불필요하게 되었을 경우 지체없이 해당 개인정보를 파기합니다.<br>
                                ② 고객으로부터 동의 받은 개인정보 보유기간이 경과하거나 처리목적이 달성되었음에도 불구하고 다른 법령에 따라 개인정보를 계속 보존하여야 하는 경우에는, 해당
                                개인정보를 별도의 데이터베이스(DBMS)로 옮기거나 보관장소를 달리하여 보관합니다.<br>
                                ③ 회사는 전자적 파일형태로 기록·저장된 개인정보는 기록을 재생할 수 없도록 디가우징(Degaussing) 등의 방법을 이용하여 파기하며, 종이문서에
                                기록·저장된 개인정보는 분쇄기로 분쇄하거나 소각하여 파기합니다. <br>
                                8. 개인정보의 안전성 확보 조치<br>
                                회사는 개인정보의 안전성 확보를 위해 내부관리계획 수립·시행, 정기적 직원 교육, 개인정보처리시스템의 접근권한 관리, 전산실·자료보관실의 접근통제 등과 같은
                                조치를 취하고 있습니다. <br>
                                9. 개인정보보호 관리책임자<br>
                                ① 회사는 개인정보 처리에 관한 업무를 총괄해서 책임지고, 개인정보 처리와 관련한 고객의 불만처리 및 피해구제 등을 위하여 아래와 같이 개인정보 관리책임자를
                                지정하고 있습니다.<br>
                                개인정보보호 관리책임자<br>
                                성명 : 이재훈<br>
                                전화 : 070-8845-3542<br>
                                메일 : farmsbiotech@naver.com<br>
                                개인정보보호 담당자<br>
                                성명 : 이재훈<br>
                                전화 : 070-8845-3542<br>
                                메일 : farmsbiotech@naver.com<br>
                                ② 고객께서는 회사의 서비스(또는 사업)를 이용하시면서 발생한 모든 개인정보보호 관련 문의, 불만처리, 피해구제 등에 관한 사항을 개인정보 관리책임자 및
                                담당부서로 문의하실 수 있으며, 회사는 고객의 문의에 대해 지체없이 답변 및 처리해드리겠습니다. <br>
                                10. 권익침해 구제방법<br>
                                정보주체는 개인정보 침해로 인한 구제를 받기 위하여 개인정보분쟁조정위원회, 한국인터넷진흥원 개인정보침해신고센터 등에 분쟁해결이나 상담 등을 신청할 수
                                있습니다. 이 밖에 기타 개인정보침해의 신고 및 상담에 대하여는 아래의 기관에 문의할 수 있습니다.<br>
                                ① 개인정보분쟁조정위원회(www.kopico.go.kr) : 02-2100-2499<br>
                                ② 대검찰청 (www.spo.go.kr) : (국번없이) 1301<br>
                                ③ 경찰청 사이버안전국(http://cyberbureau.police.go.kr/) : (국번없이) 182 <br>
                                11. 개인정보취급방침의 변경<br>
                                본 개인정보취급방침은 2022년 01월 01일부터 적용됩니다.<br>
                                이전의 개인정보취급방침은 아래에서 확인할 수 있습니다.<br>
                            </p>
                        </div>
                    </div>
                </div>

    <iframe name="ifrm" width="0" height="0" frameborder="0" style="display:none"></iframe>
    <?php include '../footer.php'; ?>
</body>

<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>
<script>
    $("input:text[numberOnly]").on("keyup", function() {
        $(this).val($(this).val().replace(/[^0-9]/g,""));
    });
</script>
</html>
