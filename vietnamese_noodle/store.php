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
    <meta property="og:image" content="./img/opengraph-img.jpg" />
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
    <link rel="stylesheet" href="./font/font.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/aos.css">
    <link rel="stylesheet" href="./css/swiper-bundle.min.css">
</head>

<body class="wrap" oncontextmenu='return false' onselectstart='return false' ondragstart='return false'>

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
                                <img class="map_on" src="./img/전국.png" alt="">
                                <img src="./img/서울.png" alt="">
                                <img src="./img/인천.png" alt="">
                                <img src="./img/경기.png" alt="">
                                <img src="./img/강원도.png" alt="">
                                <img src="./img/대전.png" alt="">
                                <img src="./img/충청북도.png" alt="">
                                <img src="./img/충청남도.png" alt="">
                                <img src="./img/대구.png" alt="">
                                <img src="./img/울산.png" alt="">
                                <img src="./img/부산.png" alt="">
                                <img src="./img/경상북도.png" alt="">
                                <img src="./img/경상남도.png" alt="">
                                <img src="./img/전라북도.png" alt="">
                                <img src="./img/전라남도.png" alt="">
                                <img src="./img/제주.png" alt="">
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
                            $sql="SELECT * FROM franchise WHERE stat='운영 중' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='서울' AND stat='운영 중' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='인천' AND stat='운영 중' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='경기' AND stat='운영 중' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='강원' AND stat='운영 중' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='대전' AND stat='운영 중' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='충북' AND stat='운영 중' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='충남' AND stat='운영 중' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='대구' AND stat='운영 중' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='울산' AND stat='운영 중' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='부산' AND stat='운영 중' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='경북' AND stat='운영 중' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='경남' AND stat='운영 중' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='전북' AND stat='운영 중' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='전남' AND stat='운영 중' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='제주' AND stat='운영 중' ORDER BY num ASC LIMIT 10";
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
                    <div class="list-page">
                        <div class="prev">
                            <a href="#">
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                        <div class="num">
                            <div class="on"><a href="#">1</a></div>
                            <div><a href="#">2</a></div>
                            <div><a href="#">3</a></div>
                            <div><a href="#">4</a></div>
                            <div><a href="#">5</a></div>
                        </div>
                        <div class="next">
                            <a href="#">
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="contents">
                    <div class="sec_de">
                        <div class="map_contents">
                            <div class="map_img">
                                <img src="./img/전국.png" alt="">
                                <img src="./img/서울.png" alt="">
                                <img src="./img/인천.png" alt="">
                                <img src="./img/경기.png" alt="">
                                <img src="./img/강원도.png" alt="">
                                <img src="./img/대전.png" alt="">
                                <img src="./img/충청북도.png" alt="">
                                <img src="./img/충청남도.png" alt="">
                                <img src="./img/대구.png" alt="">
                                <img src="./img/울산.png" alt="">
                                <img src="./img/부산.png" alt="">
                                <img src="./img/경상북도.png" alt="">
                                <img src="./img/경상남도.png" alt="">
                                <img src="./img/전라북도.png" alt="">
                                <img src="./img/전라남도.png" alt="">
                                <img src="./img/제주.png" alt="">
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
                            $sql="SELECT * FROM franchise WHERE stat='오픈 확정' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='서울' AND stat='오픈 확정' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='인천' AND stat='오픈 확정' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='경기' AND stat='오픈 확정' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='강원' AND stat='오픈 확정' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='대전' AND stat='오픈 확정' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='충북' AND stat='오픈 확정' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='충남' AND stat='오픈 확정' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='대구' AND stat='오픈 확정' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='울산' AND stat='오픈 확정' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='부산' AND stat='오픈 확정' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='경북' AND stat='오픈 확정' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='경남' AND stat='오픈 확정' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='전북' AND stat='오픈 확정' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='전남' AND stat='오픈 확정' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='제주' AND stat='오픈 확정' ORDER BY num ASC LIMIT 10";
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
                    <div class="list-page">
                        <div class="prev">
                            <a href="#">
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                        <div class="num">
                            <div class="on"><a href="#">1</a></div>
                            <div><a href="#">2</a></div>
                            <div><a href="#">3</a></div>
                            <div><a href="#">4</a></div>
                            <div><a href="#">5</a></div>
                        </div>
                        <div class="next">
                            <a href="#">
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="contents">
                    <div class="sec_de">
                        <div class="map_contents">
                            <div class="map_img">
                                <img src="./img/전국.png" alt="">
                                <img src="./img/서울.png" alt="">
                                <img src="./img/인천.png" alt="">
                                <img src="./img/경기.png" alt="">
                                <img src="./img/강원도.png" alt="">
                                <img src="./img/대전.png" alt="">
                                <img src="./img/충청북도.png" alt="">
                                <img src="./img/충청남도.png" alt="">
                                <img src="./img/대구.png" alt="">
                                <img src="./img/울산.png" alt="">
                                <img src="./img/부산.png" alt="">
                                <img src="./img/경상북도.png" alt="">
                                <img src="./img/경상남도.png" alt="">
                                <img src="./img/전라북도.png" alt="">
                                <img src="./img/전라남도.png" alt="">
                                <img src="./img/제주.png" alt="">
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
                            $sql="SELECT * FROM franchise WHERE stat='상담 진행 중' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='서울' AND stat='상담 진행 중' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='인천' AND stat='상담 진행 중' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='경기' AND stat='상담 진행 중' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='강원' AND stat='상담 진행 중' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='대전' AND stat='상담 진행 중' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='충북' AND stat='상담 진행 중' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='충남' AND stat='상담 진행 중' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='대구' AND stat='상담 진행 중' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='울산' AND stat='상담 진행 중' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='부산' AND stat='상담 진행 중' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='경북' AND stat='상담 진행 중' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='경남' AND stat='상담 진행 중' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='전북' AND stat='상담 진행 중' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='전남' AND stat='상담 진행 중' ORDER BY num ASC LIMIT 10";
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
                            $sql="SELECT * FROM franchise WHERE area='제주' AND stat='상담 진행 중' ORDER BY num ASC LIMIT 10";
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
                    <div class="list-page">
                        <div class="prev">
                            <a href="#">
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                        <div class="num">
                            <div class="on"><a href="#">1</a></div>
                            <div><a href="#">2</a></div>
                            <div><a href="#">3</a></div>
                            <div><a href="#">4</a></div>
                            <div><a href="#">5</a></div>
                        </div>
                        <div class="next">
                            <a href="#">
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>