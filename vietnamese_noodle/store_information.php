<!DOCTYPE html>
<html lang="ko">
<?php include 'connect.php'; ?>
<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <title>쌀국수공방</title>
    <meta name="description" content="홈페이지 설명">
    <meta property="og:type" content="website" />
    <meta property="og:image" content="img/opengraph-img.jpg" />
    <meta property="og:title" content="쌀국수공방" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="홈페이지 URL 입력" />
    <meta name="robots" content="index,follow" />
    <!-- Mobile Stuff -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-tap-highlight" content="no">

    <!-- Chrome on Android -->

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="">
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+KR:wght@400;500;700&display=swap" rel="stylesheet">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="rgba(0,0,0,0)">
    <meta name="naver-site-verification" content="01f26d1bf9dfb238fe359fb66ee4c816281dd2fe" />
    <link rel="canonical" href="홈페이지 URL 입력">
    <link rel="stylesheet" href="font/font.css">
    <link rel="stylesheet" href="css/store.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
</head>

<body class="wrap" oncontextmenu='return false' onselectstart='return false' ondragstart='return false'>
    <header>
        <!-- <img src="img/ham.png" alt="" class="ham_btn"> -->
        <a href="index.php"><img src="img/b-left-arrow.png" alt=""></a>
        <img src="img/logo.png" alt="쌀국수공방" class="logo">
        <!-- <ul class="gnb">
            <li class="active"><a href="#main" class="page_scroll">브랜드</a></li>
            <li><a href="#competition" class="page_scroll">성공전략</a></li>
            <li><a href="#menu" class="page_scroll">메뉴</a></li>
            <li><a href="#foundation" class="page_scroll">창업</a></li>
            <li><a href="#store" class="page_scroll">가맹점 소개</a></li>
        </ul> -->
        <div class="inquiry">
            <p>가맹문의</p>
            <a href="tel:1666-6853">1666-6853</a>
        </div>
    </header>
    <aside>
        <div class="aside_top">
            <img src="img/logo.png" alt="">
            <div class="close">
                <span></span>
                <span></span>
            </div>
        </div>
        <ul class="gnb">
            <li><a href="#main" class="page_scroll">브랜드</a></li>
            <li><a href="#competition" class="page_scroll">성공전략</a></li>
            <li><a href="#menu" class="page_scroll">메뉴</a></li>
            <li><a href="#foundation" class="page_scroll">창업</a></li>
            <li><a href="#store" class="page_scroll">가맹점 소개</a></li>
        </ul>
    </aside>
    <div class="back_bg"></div>
    <section id="store">
        <div class="inner">
            <?php
            $sql="SELECT * FROM franchise WHERE stat='운영 중'";
            $res=mysqli_query($conn, $sql);
            $open=mysqli_num_rows($res);
            
            $sql="SELECT * FROM franchise WHERE stat='오픈 확정'";
            $res=mysqli_query($conn, $sql);
            $expected=mysqli_num_rows($res);
            
            $sql="SELECT * FROM franchise WHERE stat='상담 진행 중'";
            $res=mysqli_query($conn, $sql);
            $progress=mysqli_num_rows($res);
            ?>
            <h2>가맹점 소개</h2>
            <ul class="store_cate">
                <li class="on">운영 중 매장&#40;<?php echo $open?>&#41;</li>
                <li>오픈 확정&#40;<?php echo $expected?>&#41;</li>
                <li>상담 진행 중&#40;<?php echo $progress?>&#41;</li>
            </ul>
            <div class="search">
                <select class="first">
                    <option value="전체" selected>지역선택</option>
                    <option value="서울">서울</option>
                    <option value="인천">인천</option>
                    <option value="경기">경기</option>
                    <option value="강원">강원</option>
                    <option value="대전">대전</option>
                    <option value="충북">충북</option>
                    <option value="충남">충남</option>
                    <option value="대구">대구</option>
                    <option value="울산">울산</option>
                    <option value="부산">부산</option>
                    <option value="경북">경북</option>
                    <option value="경남">경남</option>
                    <option value="전북">전북</option>
                    <option value="전남">전남</option>
                    <option value="제주">제주</option>
                </select>
                <div class="input_box">
                    <input type="text" name="search" placeholder="주소 또는 가맹점 이름 입력" required>
                    <button>검색</button>
                </div>
            </div>
            <div class="store_contents" data-aos="fade-up">
                <div class="contents active">
                    <div class="sec_de">
                        <div class="map_contents active">
                            <div class="map_img">
                                <img class="map_on" src="img/전국.png" alt="">
                                <img src="img/서울.png" alt="">
                                <img src="img/인천.png" alt="">
                                <img src="img/경기.png" alt="">
                                <img src="img/강원도.png" alt="">
                                <img src="img/대전.png" alt="">
                                <img src="img/충청북도.png" alt="">
                                <img src="img/충청남도.png" alt="">
                                <img src="img/대구.png" alt="">
                                <img src="img/울산.png" alt="">
                                <img src="img/부산.png" alt="">
                                <img src="img/경상북도.png" alt="">
                                <img src="img/경상남도.png" alt="">
                                <img src="img/전라북도.png" alt="">
                                <img src="img/전라남도.png" alt="">
                                <img src="img/제주.png" alt="">
                            </div>
                            <div class="map_txt">
                                <p onclick="page('운영 중', '서울')">서울</p>
                                <p onclick="page('운영 중', '인천')">인천</p>
                                <p onclick="page('운영 중', '경기도')">경기도</p>
                                <p onclick="page('운영 중', '강원도')">강원도</p>
                                <p onclick="page('운영 중', '대전')">대전</p>
                                <p onclick="page('운영 중', '충청북도')">충청북도</p>
                                <p onclick="page('운영 중', '충청남도')">충청남도</p>
                                <p onclick="page('운영 중', '대구')">대구</p>
                                <p onclick="page('운영 중', '울산')">울산</p>
                                <p onclick="page('운영 중', '부산')">부산</p>
                                <p onclick="page('운영 중', '경상북도')">경상북도</p>
                                <p onclick="page('운영 중', '경상남도')">경상남도</p>
                                <p onclick="page('운영 중', '전라북도')">전라북도</p>
                                <p onclick="page('운영 중', '전라남도')">전라남도</p>
                                <p onclick="page('운영 중', '제주')">제주</p>
                            </div>
                        </div>
                        <div class="contents_inner post_on">
                            <?php
                            $sql="SELECT * FROM franchise WHERE stat='운영 중' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='서울' AND stat='운영 중' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='인천' AND stat='운영 중' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='경기' AND stat='운영 중' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='강원' AND stat='운영 중' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='대전' AND stat='운영 중' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='충북' AND stat='운영 중' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='충남' AND stat='운영 중' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='대구' AND stat='운영 중' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='울산' AND stat='운영 중' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='부산' AND stat='운영 중' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='경북' AND stat='운영 중' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='경남' AND stat='운영 중' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='전북' AND stat='운영 중' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='전남' AND stat='운영 중' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='제주' AND stat='운영 중' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="contents">
                    <div class="sec_de">
                        <div class="map_contents">
                            <div class="map_img">
                                <img src="img/전국.png" alt="">
                                <img src="img/서울.png" alt="">
                                <img src="img/인천.png" alt="">
                                <img src="img/경기.png" alt="">
                                <img src="img/강원도.png" alt="">
                                <img src="img/대전.png" alt="">
                                <img src="img/충청북도.png" alt="">
                                <img src="img/충청남도.png" alt="">
                                <img src="img/대구.png" alt="">
                                <img src="img/울산.png" alt="">
                                <img src="img/부산.png" alt="">
                                <img src="img/경상북도.png" alt="">
                                <img src="img/경상남도.png" alt="">
                                <img src="img/전라북도.png" alt="">
                                <img src="img/전라남도.png" alt="">
                                <img src="img/제주.png" alt="">
                            </div>
                            <div class="map_txt">
                                <p onclick="page('오픈 확정', '서울')">서울</p>
                                <p onclick="page('오픈 확정', '인천')">인천</p>
                                <p onclick="page('오픈 확정', '경기도')">경기도</p>
                                <p onclick="page('오픈 확정', '강원도')">강원도</p>
                                <p onclick="page('오픈 확정', '대전')">대전</p>
                                <p onclick="page('오픈 확정', '충청북도')">충청북도</p>
                                <p onclick="page('오픈 확정', '충청남도')">충청남도</p>
                                <p onclick="page('오픈 확정', '대구')">대구</p>
                                <p onclick="page('오픈 확정', '울산')">울산</p>
                                <p onclick="page('오픈 확정', '부산')">부산</p>
                                <p onclick="page('오픈 확정', '경상북도')">경상북도</p>
                                <p onclick="page('오픈 확정', '경상남도')">경상남도</p>
                                <p onclick="page('오픈 확정', '전라북도')">전라북도</p>
                                <p onclick="page('오픈 확정', '전라남도')">전라남도</p>
                                <p onclick="page('오픈 확정', '제주')">제주</p>
                            </div>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE stat='오픈 확정' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='서울' AND stat='오픈 확정' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='인천' AND stat='오픈 확정' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='경기' AND stat='오픈 확정' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='강원' AND stat='오픈 확정' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='대전' AND stat='오픈 확정' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='충북' AND stat='오픈 확정' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='충남' AND stat='오픈 확정' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='대구' AND stat='오픈 확정' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='울산' AND stat='오픈 확정' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='부산' AND stat='오픈 확정' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='경북' AND stat='오픈 확정' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='경남' AND stat='오픈 확정' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='전북' AND stat='오픈 확정' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='전남' AND stat='오픈 확정' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='제주' AND stat='오픈 확정' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="contents">
                    <div class="sec_de">
                        <div class="map_contents">
                            <div class="map_img">
                                <img src="img/전국.png" alt="">
                                <img src="img/서울.png" alt="">
                                <img src="img/인천.png" alt="">
                                <img src="img/경기.png" alt="">
                                <img src="img/강원도.png" alt="">
                                <img src="img/대전.png" alt="">
                                <img src="img/충청북도.png" alt="">
                                <img src="img/충청남도.png" alt="">
                                <img src="img/대구.png" alt="">
                                <img src="img/울산.png" alt="">
                                <img src="img/부산.png" alt="">
                                <img src="img/경상북도.png" alt="">
                                <img src="img/경상남도.png" alt="">
                                <img src="img/전라북도.png" alt="">
                                <img src="img/전라남도.png" alt="">
                                <img src="img/제주.png" alt="">
                            </div>
                            <div class="map_txt">
                                <p onclick="page('상담 진행 중', '서울')">서울</p>
                                <p onclick="page('상담 진행 중', '인천')">인천</p>
                                <p onclick="page('상담 진행 중', '경기도')">경기도</p>
                                <p onclick="page('상담 진행 중', '강원도')">강원도</p>
                                <p onclick="page('상담 진행 중', '대전')">대전</p>
                                <p onclick="page('상담 진행 중', '충청북도')">충청북도</p>
                                <p onclick="page('상담 진행 중', '충청남도')">충청남도</p>
                                <p onclick="page('상담 진행 중', '대구')">대구</p>
                                <p onclick="page('상담 진행 중', '울산')">울산</p>
                                <p onclick="page('상담 진행 중', '부산')">부산</p>
                                <p onclick="page('상담 진행 중', '경상북도')">경상북도</p>
                                <p onclick="page('상담 진행 중', '경상남도')">경상남도</p>
                                <p onclick="page('상담 진행 중', '전라북도')">전라북도</p>
                                <p onclick="page('상담 진행 중', '전라남도')">전라남도</p>
                                <p onclick="page('상담 진행 중', '제주')">제주</p>
                            </div>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE stat='상담 진행 중' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='서울' AND stat='상담 진행 중' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='인천' AND stat='상담 진행 중' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='경기' AND stat='상담 진행 중' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='강원' AND stat='상담 진행 중' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='대전' AND stat='상담 진행 중' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='충북' AND stat='상담 진행 중' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='충남' AND stat='상담 진행 중' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='대구' AND stat='상담 진행 중' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='울산' AND stat='상담 진행 중' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='부산' AND stat='상담 진행 중' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='경북' AND stat='상담 진행 중' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='경남' AND stat='상담 진행 중' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='전북' AND stat='상담 진행 중' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='전남' AND stat='상담 진행 중' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contents_inner">
                            <?php
                            $sql="SELECT * FROM franchise WHERE area='제주' AND stat='상담 진행 중' ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="txt_box">
                                    <h2>쌀국수공방 <?php echo $row['title']?></h2>
                                    <p><?php echo $row['addr']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="bottom_fix">
        <div class="bg_left">
            <div class="left">
                <a href="tel:1666-6853" class="left_con">
                    <h2>클릭하고 전화걸기</h2>
                    <div class="contents">
                        <img src="img/call.png" alt="">
                        <div>
                            <h3>1666-6853</h3>
                            <p>전화 상담시 특별한 혜택!</p>
                        </div>
                    </div>
                </a>
                <div class="right_con">
                    <h2 class="time-title">오늘 혜택 남은시간</h2>
                    <div class="time font40">
                        <span class="hours">00</span>:
                        <span class="minutes">00</span>:
                        <span class="seconds">00</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg_right">
            <h2>온라인 상담 예약</h2>
            <form method="POST" action="counsel.php" target="ifrm">
            <input type="reset" class="reset" style="display:none">
            <div class="right">
                <div class="input_box">
                    <input type="text" name="name" placeholder="이름" required>
                    <input type="text" name="tel" placeholder="연락처" numberOnly required>
                    <select name="area" required>
                        <option value="">지역</option>
                        <option value="서울">서울</option>
                        <option value="인천">인천</option>
                        <option value="경기">경기</option>
                        <option value="강원">강원</option>
                        <option value="대전">대전</option>
                        <option value="충북">충북</option>
                        <option value="충남">충남</option>
                        <option value="대구">대구</option>
                        <option value="울산">울산</option>
                        <option value="부산">부산</option>
                        <option value="경북">경북</option>
                        <option value="경남">경남</option>
                        <option value="전북">전북</option>
                        <option value="전남">전남</option>
                        <option value="제주">제주</option>
                    </select>
                </div>
                <div class="chk1">
                    <input type="checkbox" id="chk1" required>
                    <label for="chk1">개인정보수집 동의</label>
                </div>
                <button>가맹문의</button>
            </div>
            </form>
        </div>
    </div>
    <div class="bottom_fix_mob">
        <div class="top">
            <div class="left">
                <a href="tel:1666-6853" class="left_con">
                    <h2>클릭하고 전화걸기</h2>
                    <div class="contents">
                        <img src="img/call.png" alt="">
                        <div>
                            <h3>1666-6853</h3>
                            <p>전화 상담시 특별한 혜택!</p>
                        </div>
                    </div>
                </a>
                <div class="right_con">
                    <h2 class="time-title">오늘 혜택 남은시간</h2>
                    <div class="time font40">
                        <span class="hours">00</span>:
                        <span class="minutes">00</span>:
                        <span class="seconds">00</span>
                    </div>
                </div>
            </div>
            <div class="right">
                <p>온라인 상담 예약</p>
                <img src="img/f-down.png" alt="">
            </div>
        </div>
        <div class="bottom">
            <form method="POST" action="counsel.php" target="ifrm">
            <input type="reset" class="reset" style="display:none">
            <div class="input_box">
                <input type="text" name="name" placeholder="이름" require>
                <input type="text" name="tel" placeholder="연락처" numberOnly require>
                <select name="area" require>
                    <option value="">지역</option>
                    <option value="서울">서울</option>
                    <option value="인천">인천</option>
                    <option value="경기">경기</option>
                    <option value="강원">강원</option>
                    <option value="대전">대전</option>
                    <option value="충북">충북</option>
                    <option value="충남">충남</option>
                    <option value="대구">대구</option>
                    <option value="울산">울산</option>
                    <option value="부산">부산</option>
                    <option value="경북">경북</option>
                    <option value="경남">경남</option>
                    <option value="전북">전북</option>
                    <option value="전남">전남</option>
                    <option value="제주">제주</option>
                </select>
            </div>
            <div>
                <div class="chk2">
                    <input type="checkbox" id="chk2" required>
                    <label for="chk2">개인정보수집 동의</label>
                </div>
                <button>가맹문의</button>
            </div>
            </form>
        </div>
        <iframe name="ifrm" frameborder="0" style="display:none"></iframe>
    </div>
    <footer>
        <div class="inner">
            <div>
                <a href="javascript:void(0)">개인정보처리방침</a>
                <a href="javascript:void(0)">이메일무단수집거부</a>
            </div>
            <div>
                <p>상호명 : 인싸푸드</p>
                <p>대표 : 이상효</p>
                <p>주소 : 인천광역시 부평구 수변로 333, 209동 202호(삼산동,삼산타운)</p>
            </div>
            <div>
                <p>대표전화 : 1666-6853</p>
                <p>사업자등록번호 : 329 - 07 - 01802</p>
                <p>E-mail : inssafood@naver.com</p>
            </div>
        </div>
    </footer>
    <div class="info_wrap01">
        <div class="content">
            <div class="news-view">
                <div class="title" style="width: 90%">개인정보취급방침</div>
                <div class="info_close_btn"><img src="img/close-btn.png" alt="" style="width:100%"></div>
            </div>
            <div class="view-detail" style="box-sizing:border-box;overflow-y: auto;max-height:500px">
                <p style="line-height: 25px;font-size:13px">
                    인싸푸드(이하 ‘회사’라 한다)이 취급하는 모든 개인정보는 관련법령에 근거하거나 정보주체의 동의에 의하여 수집, 보유 및 처리되고 있습니다.
                    회사는 개인정보취급방침을 개정하는 경우 웹사이트 공지사항을 통하여 공지할 것입니다.<br><br>
                    본 방침은 2023년 01월 01일부터 시행됩니다.<br><br>
                    1. 개인정보의 처리 목적<br>
                    회사는 다음의 목적을 위하여 개인정보를 처리합니다. 처리하고 있는 개인정보는 다음의 목적 이외의 용도로는 이용되지 않으며, 이용목적이 변경되는 경우에는 별도의 동의를 받는 등 필요한 조치를 이행할 것입니다.<br>
                    ① 고객문의, 본인확인<br>
                    ② 민원사항 확인, 사실확인을 위한 연락, 처리결과 통보<br><br>
                    2. 개인정보의 처리 및 보유기간<br>
                    회사는 법령에 따른 개인정보 보유, 이용기간 또는 정보주체로부터 개인정보 수집 시에 동의 받은 개인정보 보유, 이용기간 내에서 개인정보를 처리 및 보유합니다.<br>
                    ① 민원처리 : 민원처리가 종료된 시점<br>
                    ② 상담을 위한 경우 : 상담이 종료된 시점<br>
                    ③ 관계법령 위반에 따른 수사·조사 등이 진행중인 경우에는 해당 수사·조사 종료시까지<br><br>
                    3. 개인정보의 제3자 제공<br>
                    회사가 수집·보유하고 있는 개인정보는 이용자의 동의 없이는 제3자에게 제공하지 않으며, 다음의 경우에는 개인정보를 제3자에게 제공할 수 있습니다.<br>
                    ① 정보주체로부터 별도의 동의를 받은 경우<br>
                    ② 법령의 법령의 규정에 의거하거나 수사 목적으로 법령에 정해진 절차와 방법에 따라 수사기관의 요구가 있는 경우<br><br>
                    4. 수집한 개인정보의 위탁<br>
                    회사는 고객의 동의 없이 개인정보를 외부업체에 위탁하지 않습니다. 향후 원활한 개인정보 업무처리를 위하여 개인정보를 위탁하는 경우, 위탁 대상자와 위탁 업무 내용에 대해 고객에게 통지하고 필요한 경우 사전 동의를 받도록 하겠습니다.<br><br>
                    5. 정보주체의 권리·의무 및 행사방법<br>
                    ① 정보주체(해당 주체의 법정대리인 포함, 이하 동일)는 회사에 대해 언제든지 개인정보 열람요구, 정정·삭제 및 처리정지를 요구할 수 있습니다.<br>
                    ② 제 ①항에 따른 권리행사는 회사에 대해 서면, 전화, FAX 등을 통하여 요구할 수 있으며, 회사는 이에 대해 지체없이 조치하겠습니다.<br>
                    ③ 고객이 개인정보의 오류 등에 대한 정정·삭제를 요구한 경우에는 회사는 정정·삭제를 완료할 때까지 당해 개인정보를 이용하거나 제공하지 않습니다.<br>
                    ④ 제 ①항에 따른 권리행사는 고객의 법정대리인이나 위임을 받은 자 등 대리인을 통하여 하실 수 있습니다. 이 경우 개인정보보호법 시행규칙 별지 11호 서식에 따른 위임장을 제출해야 합니다.<br><br>
                    6. 처리하는 개인정보 항목<br>
                    ① 수집항목 : 이름, 연락처, 이메일주소<br>
                    ② 수집방법 : 홈페이지(윤리강령, 온라인문의)<br><br>
                    7. 개인정보의 파기<br>
                    ① 회사는 개인정보 보유기간의 경과, 처리목적의 달성 등 개인정보가 불필요하게 되었을 경우 지체없이 해당 개인정보를 파기합니다.<br>
                    ② 고객으로부터 동의 받은 개인정보 보유기간이 경과하거나 처리목적이 달성되었음에도 불구하고 다른 법령에 따라 개인정보를 계속 보존하여야 하는 경우에는, 해당 개인정보를 별도의 데이터베이스(DBMS)로 옮기거나 보관장소를 달리하여 보관합니다.<br>
                    ③ 회사는 전자적 파일형태로 기록·저장된 개인정보는 기록을 재생할 수 없도록 디가우징(Degaussing) 등의 방법을 이용하여 파기하며, 종이문서에 기록·저장된 개인정보는 분쇄기로 분쇄하거나 소각하여 파기합니다.<br><br>
                    8. 개인정보의 안전성 확보 조치<br>
                    회사는 개인정보의 안전성 확보를 위해 내부관리계획 수립·시행, 정기적 직원 교육, 개인정보처리시스템의 접근권한 관리, 전산실·자료보관실의 접근통제 등과 같은 조치를 취하고 있습니다.<br><br>
                    9. 개인정보보호 관리책임자<br>
                    ① 회사는 개인정보 처리에 관한 업무를 총괄해서 책임지고, 개인정보 처리와 관련한 고객의 불만처리 및 피해구제 등을 위하여 아래와 같이 개인정보 관리책임자를 지정하고 있습니다.<br><br>
                    개인정보보호 관리책임자<br>
                    성명 : <br>
                    전화 : <br>
                    메일 : <br><br>
                    개인정보보호 담당자<br>
                    성명 : <br>
                    전화 : <br>
                    메일 : <br><br>
                    ② 고객께서는 회사의 서비스(또는 사업)를 이용하시면서 발생한 모든 개인정보보호 관련 문의, 불만처리, 피해구제 등에 관한 사항을 개인정보 관리책임자 및 담당부서로 문의하실 수 있으며, 회사는 고객의 문의에 대해 지체없이 답변 및 처리해드리겠습니다.<br><br>
                    10. 권익침해 구제방법<br>
                    정보주체는 개인정보 침해로 인한 구제를 받기 위하여 개인정보분쟁조정위원회, 한국인터넷진흥원 개인정보침해신고센터 등에 분쟁해결이나 상담 등을 신청할 수 있습니다. 이 밖에 기타 개인정보침해의 신고 및 상담에 대하여는 아래의 기관에 문의할 수 있습니다.<br>
                    ① 개인정보분쟁조정위원회(www.kopico.go.kr) : 02-2100-2499<br>
                    ② 대검찰청 (www.spo.go.kr) : (국번없이) 1301<br>
                    ③ 경찰청 사이버안전국(http://cyberbureau.police.go.kr/) : (국번없이) 182<br><br>
                    11. 개인정보취급방침의 변경<br>
                    본 개인정보취급방침은 2023년 01월 01일부터 적용됩니다.<br>
                    이전의 개인정보취급방침은 아래에서 확인할 수 있습니다.<br><br>
                </p>
            </div>
        </div>
    </div>
    <div class="info_wrap02">
        <div class="content">
            <div class="news-view">
                <div class="title" style="width: 90%">이메일무단수집거부</div>
                <div class="info_close_btn"><img src="img/close-btn.png" alt=""
                        style="width:100%"></div>
            </div>
            <div class="view-detail" style="box-sizing:border-box;overflow-y: auto;max-height:500px">
                <p style="line-height: 25px;font-size:13px">

                    본 웹사이트에 게시된 이메일 주소가 전자우편 수집 프로그램이나 그 밖의 기술적 장치를 이용하여 무단으로 수집되는 것을 거부하며, 이를 위반시 정보통신망법에
                    의해 형사처벌됨을 유념하시기 바랍니다.<br>
                    정보통신망이용촉진 및 정보보호등에 관한 법률 [일부개정 2002년 12월 18일 법률제06797호]제50조의2 (전자우편주소의 무단 수집행위 등 금지)<br>
                    <br>
                    1누구든지 전자우편주소의 수집을 거부하는 의사가 명시된 인터넷 홈페이지에서 자동으로 전자우편주소를 수집하는 프로그램 그 밖의 기술적 장치를 이용하여
                    전자우편주소를 수집하여서는 아니된다.<br>
                    2누구든지 제1항의 규정을 위반하여 수집된 전자우편주소를 판매·유통하여서는 아니된다.<br>
                    3누구든지 제1항 및 제2항의 규정에 의하여 수집·판매 및 유통이 금지된 전자우편주소임을 알고 이를 정보전송에 이용하여서는 아니된다.<br>
                    <br>
                    제65조의2 (벌칙) 다음 각호의 1에 해당하는 자는 1천만원 이하의 벌금에 처한다.<br>
                    <br>
                    1제50조제4항의 규정을 위반하여 기술적 조치를 한 자<br>
                    2제50조제6항의 규정을 위반하여 영리목적의 광고성 정보를 전송한 자<br>
                    3제50조의2의 규정을 위반하여 전자우편주소를 수집ㆍ판매ㆍ유통 또는 정보전송에 이용한 자<br>
                    <br>
                    본 웹사이트에 게시된 이메일 주소가 전자우편 수집 프로그램이나 그 밖의 기술적 장치를 이용하여 무단으로 수집되는 것을 거부하며, 이를 위반시 정보통신망법에
                    의해 형사처벌됨을 유념하시기 바랍니다.<br>
                    정보통신망이용촉진 및 정보보호등에 관한 법률 [일부개정 2002년 12월 18일 법률제06797호]<br>
                    제50조의2 (전자우편주소의 무단 수집행위 등 금지)<br>
                    <br>
                    1누구든지 전자우편주소의 수집을 거부하는 의사가 명시된 인터넷 홈페이지에서 자동으로 전자우편주소를 수집하는 프로그램 그 밖의 기술적 장치를 이용하여
                    전자우편주소를 수집하여서는 아니된다.<br>
                    2누구든지 제1항의 규정을 위반하여 수집된 전자우편주소를 판매·유통하여서는 아니된다.<br>
                    3누구든지 제1항 및 제2항의 규정에 의하여 수집·판매 및 유통이 금지된 전자우편주소임을 알고 이를 정보전송에 이용하여서는 아니된다.<br>
                    <br>
                    제65조의2 (벌칙) 다음 각호의 1에 해당하는 자는 1천만원 이하의 벌금에 처한다.<br>
                    <br>
                    1제50조제4항의 규정을 위반하여 기술적 조치를 한 자<br>
                    2제50조제6항의 규정을 위반하여 영리목적의 광고성 정보를 전송한 자<br>
                    3제50조의2의 규정을 위반하여 전자우편주소를 수집ㆍ판매ㆍ유통 또는 정보전송에 이용한 자<br>

                </p>
            </div>
        </div>
    </div>
    <div class="info_wrap03">
        <div class="content">
            <div class="news-view">
                <div class="title" style="width: 90%">개인정보수집동의</div>
                <div class="info_close_btn"><img src="img/close-btn.png" alt="" style="width:100%"></div>
            </div>
            <div class="view-detail" style="box-sizing:border-box;overflow-y: auto;max-height:500px">
                <p style="line-height: 25px;font-size:13px">
                    인싸푸드(이하 ‘회사’라 한다)이 취급하는 모든 개인정보는 관련법령에 근거하거나 정보주체의 동의에 의하여 수집, 보유 및 처리되고 있습니다.
                    회사는 개인정보취급방침을 개정하는 경우 웹사이트 공지사항을 통하여 공지할 것입니다.<br><br>
                    본 방침은 2023년 01월 01일부터 시행됩니다.<br><br>
                    1. 개인정보의 처리 목적<br>
                    회사는 다음의 목적을 위하여 개인정보를 처리합니다. 처리하고 있는 개인정보는 다음의 목적 이외의 용도로는 이용되지 않으며, 이용목적이 변경되는 경우에는 별도의 동의를 받는 등 필요한 조치를 이행할 것입니다.<br>
                    ① 고객문의, 본인확인<br>
                    ② 민원사항 확인, 사실확인을 위한 연락, 처리결과 통보<br><br>
                    2. 개인정보의 처리 및 보유기간<br>
                    회사는 법령에 따른 개인정보 보유, 이용기간 또는 정보주체로부터 개인정보 수집 시에 동의 받은 개인정보 보유, 이용기간 내에서 개인정보를 처리 및 보유합니다.<br>
                    ① 민원처리 : 민원처리가 종료된 시점<br>
                    ② 상담을 위한 경우 : 상담이 종료된 시점<br>
                    ③ 관계법령 위반에 따른 수사·조사 등이 진행중인 경우에는 해당 수사·조사 종료시까지<br><br>
                    3. 개인정보의 제3자 제공<br>
                    회사가 수집·보유하고 있는 개인정보는 이용자의 동의 없이는 제3자에게 제공하지 않으며, 다음의 경우에는 개인정보를 제3자에게 제공할 수 있습니다.<br>
                    ① 정보주체로부터 별도의 동의를 받은 경우<br>
                    ② 법령의 법령의 규정에 의거하거나 수사 목적으로 법령에 정해진 절차와 방법에 따라 수사기관의 요구가 있는 경우<br><br>
                    4. 수집한 개인정보의 위탁<br>
                    회사는 고객의 동의 없이 개인정보를 외부업체에 위탁하지 않습니다. 향후 원활한 개인정보 업무처리를 위하여 개인정보를 위탁하는 경우, 위탁 대상자와 위탁 업무 내용에 대해 고객에게 통지하고 필요한 경우 사전 동의를 받도록 하겠습니다.<br><br>
                    5. 정보주체의 권리·의무 및 행사방법<br>
                    ① 정보주체(해당 주체의 법정대리인 포함, 이하 동일)는 회사에 대해 언제든지 개인정보 열람요구, 정정·삭제 및 처리정지를 요구할 수 있습니다.<br>
                    ② 제 ①항에 따른 권리행사는 회사에 대해 서면, 전화, FAX 등을 통하여 요구할 수 있으며, 회사는 이에 대해 지체없이 조치하겠습니다.<br>
                    ③ 고객이 개인정보의 오류 등에 대한 정정·삭제를 요구한 경우에는 회사는 정정·삭제를 완료할 때까지 당해 개인정보를 이용하거나 제공하지 않습니다.<br>
                    ④ 제 ①항에 따른 권리행사는 고객의 법정대리인이나 위임을 받은 자 등 대리인을 통하여 하실 수 있습니다. 이 경우 개인정보보호법 시행규칙 별지 11호 서식에 따른 위임장을 제출해야 합니다.<br><br>
                    6. 처리하는 개인정보 항목<br>
                    ① 수집항목 : 이름, 연락처, 이메일주소<br>
                    ② 수집방법 : 홈페이지(윤리강령, 온라인문의)<br><br>
                    7. 개인정보의 파기<br>
                    ① 회사는 개인정보 보유기간의 경과, 처리목적의 달성 등 개인정보가 불필요하게 되었을 경우 지체없이 해당 개인정보를 파기합니다.<br>
                    ② 고객으로부터 동의 받은 개인정보 보유기간이 경과하거나 처리목적이 달성되었음에도 불구하고 다른 법령에 따라 개인정보를 계속 보존하여야 하는 경우에는, 해당 개인정보를 별도의 데이터베이스(DBMS)로 옮기거나 보관장소를 달리하여 보관합니다.<br>
                    ③ 회사는 전자적 파일형태로 기록·저장된 개인정보는 기록을 재생할 수 없도록 디가우징(Degaussing) 등의 방법을 이용하여 파기하며, 종이문서에 기록·저장된 개인정보는 분쇄기로 분쇄하거나 소각하여 파기합니다.<br><br>
                    8. 개인정보의 안전성 확보 조치<br>
                    회사는 개인정보의 안전성 확보를 위해 내부관리계획 수립·시행, 정기적 직원 교육, 개인정보처리시스템의 접근권한 관리, 전산실·자료보관실의 접근통제 등과 같은 조치를 취하고 있습니다.<br><br>
                    9. 개인정보보호 관리책임자<br>
                    ① 회사는 개인정보 처리에 관한 업무를 총괄해서 책임지고, 개인정보 처리와 관련한 고객의 불만처리 및 피해구제 등을 위하여 아래와 같이 개인정보 관리책임자를 지정하고 있습니다.<br><br>
                    개인정보보호 관리책임자<br>
                    성명 : <br>
                    전화 : <br>
                    메일 : <br><br>
                    개인정보보호 담당자<br>
                    성명 : <br>
                    전화 : <br>
                    메일 : <br><br>
                    ② 고객께서는 회사의 서비스(또는 사업)를 이용하시면서 발생한 모든 개인정보보호 관련 문의, 불만처리, 피해구제 등에 관한 사항을 개인정보 관리책임자 및 담당부서로 문의하실 수 있으며, 회사는 고객의 문의에 대해 지체없이 답변 및 처리해드리겠습니다.<br><br>
                    10. 권익침해 구제방법<br>
                    정보주체는 개인정보 침해로 인한 구제를 받기 위하여 개인정보분쟁조정위원회, 한국인터넷진흥원 개인정보침해신고센터 등에 분쟁해결이나 상담 등을 신청할 수 있습니다. 이 밖에 기타 개인정보침해의 신고 및 상담에 대하여는 아래의 기관에 문의할 수 있습니다.<br>
                    ① 개인정보분쟁조정위원회(www.kopico.go.kr) : 02-2100-2499<br>
                    ② 대검찰청 (www.spo.go.kr) : (국번없이) 1301<br>
                    ③ 경찰청 사이버안전국(http://cyberbureau.police.go.kr/) : (국번없이) 182<br><br>
                    11. 개인정보취급방침의 변경<br>
                    본 개인정보취급방침은 2023년 01월 01일부터 적용됩니다.<br>
                    이전의 개인정보취급방침은 아래에서 확인할 수 있습니다.<br><br>
                </p>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/aos.js"></script>
<script type="text/javascript" src="js/swiper-bundle.min.js"></script>
<script>
    $(document).ready(function () {
        function remaindTime() {
        var now = new Date();
        var end = new Date(now.getFullYear(),now.getMonth(),now.getDate(),18,00,00);

        var nt = now.getTime();
        var et = end.getTime();

        if (nt > et){
            $("h2.time-title").html("오늘 혜택 마감");
            // $(".time").fadeOut();
        } else {
            $(".time").fadeIn();
            $("h2.time-title").html("오늘 혜택 남은시간");
            sec = parseInt(et - nt) / 1000;
            day = parseInt(sec/60/60/24);
            sec = (sec - (day * 60 * 60 * 24));
            hour = parseInt(sec/60/60);
            sec = (sec - (hour*60*60));
            min = parseInt(sec/60);
            sec = parseInt(sec-(min*60));
            if(hour<10){hour="0"+hour;}
            if(min<10){min="0"+min;}
            if(sec<10){sec="0"+sec;}
            $(".hours").html(hour);
            $(".minutes").html(min);
            $(".seconds").html(sec);
        }
    }
    setInterval(remaindTime,1000);
    })
</script>
<script>
    $(window).resize(function(){ 
        if (window.innerWidth > 1024) {
            $(window).scroll(function(){
            var reviewHeight = $(".review").height();
            
            if (reviewHeight > 500) {
                function numberCounter(target_frame, target_number) {
                    this.count = 0; this.diff = 0;
                    this.target_count = parseInt(target_number);
                    this.target_frame = document.getElementById(target_frame);
                    this.timer = null;
                    this.counter();
                };

                numberCounter.prototype.counter = function() {
                    var self = this;
                    this.diff = this.target_count - this.count;
                
                    if(this.diff > 0) {
                        self.count += Math.ceil(this.diff / 7);
                    }
                
                    this.target_frame.innerHTML = this.count.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
                
                    if(this.count < this.target_count) {
                        this.timer = setTimeout(function() { self.counter(); }, 30);
                    } else {
                        clearTimeout(this.timer);
                    }
                };
                
                new numberCounter("counter1", 56854);
                new numberCounter("counter2", 573);
            };
        });
        }
    }).resize();
    
</script>
<script>
    function page(stat, area){
        console.log(stat+area);
        $.ajax({
            url:"page_list.php",
            type:"POST",
            data:{
                stat:stat,
                area:area,
            },
            dataType:"JSON",
            success:function(data){
                console.log(data);
            }
        })
    }

    function view_detail(type, file){
        $("#menu_img").attr({src:"img/menu/"+type+"/"+file});
    }

    $("input:text[numberOnly]").on("keyup", function() {
        $(this).val($(this).val().replace(/[^0-9\-]/g,""));
    });
</script>
<?php
date_default_timezone_set('Asia/Seoul');
$currdt = date("Y-m-d"); // 오늘 날짜
$time = date(" H:i:s");
$yester = date("Y-m-d", strtotime($currdt."-1 day"));// 어제 날짜
$userip = $_SERVER['REMOTE_ADDR'];

if(isset($_SERVER['HTTP_REFERER'])) 
    $referer = $_SERVER['HTTP_REFERER'];  
else 
    $referer = ""; 
if($conn){
    $sql="SELECT * FROM tb_stat_visit WHERE regip='$userip' AND regdate='$currdt'";
    $res=mysqli_query($conn, $sql);
    $rows=mysqli_num_rows($res);
    // 처음 방문했는지 검사
    if($rows==0) { 
        $query = "insert into tb_stat_visit (regdate, regtime, regip, referer) values('$currdt', '$time', '$userip','$referer')";
        $result = mysqli_query($conn, $query);
    }
}
?>
</html>
