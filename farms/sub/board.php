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
    $bSql="SELECT * FROM banner WHERE `type`='community'";
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
                    <p>COMMUNITY</p>
                    <img src="../img/down-arrow.png" alt="">
                </div>
                <div class="title">
                    <ul>
                        <li><a href="../sub/notice.php">공지사항</a></li>
                        <li class="on"><a href="../sub/board.php">게시판</a></li>
                    </ul>
                </div>
            </div>
            <div class="right">HOME&nbsp;&nbsp;>&nbsp;&nbsp;COMMUNITY&nbsp;&nbsp;>&nbsp;&nbsp;게시판</div>
        </div>
    </div>

    <div class="notice">
        <div class="inner">
            <div class="title">
                <h2>게시판</h2>
                <p>BOARD</p>
            </div>
            <?php
            $page=($_GET['page']) ? $_GET['page'] : 1; // 페이지 번호
            $list = 10; // 페이지 당 목록 개수
            $b_pageNum_list = 5; // 페이지 당 블록 갯수
            $block = ceil($page/$b_pageNum_list); // 현재 리스트의 블럭
            
            $b_start_page = (($block - 1) * $b_pageNum_list) + 1; // 현재 블럭에서 시작 페이지 번호
            $b_end_page = $b_start_page + $b_pageNum_list -1; // 현재 블럭에서 마지막 페이지 번호
            
            $pSql="SELECT COUNT(*) AS cnt FROM bo_board";
            $pRes=mysqli_query($conn, $pSql);
            $pRow=mysqli_fetch_array($pRes);
            $total_count=$pRow['cnt'];
            
            $total_page = ceil($total_count / $list); // 총 페이지 수 
            if($b_end_page > $total_page) $b_end_page = $total_page;
            
            $limit=($page - 1) * $list; // 출력 시작 번호

            $no=$total_count-$limit;

            $sql="SELECT * FROM bo_board ORDER BY num DESC LIMIT $limit, $list";
            $res=mysqli_query($conn, $sql);
            while($row=mysqli_fetch_array($res)){
                $title=$row['title'];
                $name=$row['write_name'];
                $hit=$row['hit'];
                $file=$row['file_1'];
                $pass=$row['file_2'];
                $num=$row['num'];

                if($file){
                    $d="";
                } else {
                    $d="style='visibility:hidden'";
                }
                $c="";
                $h="";
                $o="";
                if($pass){
                    $c="modi";
                    $h="javascript:void(0)";
                    $o="onclick='$(\"#num\").val(\"{$num}\")'";
                } else {
                    $h="board_detail.php?num=$num";
                }
            ?>
            <a href="<?php echo $h?>" <?php echo $o?> class="board-con <?php echo $c?>">
                <p class="number"><?php echo $no--;?></p>
                <p class="title"><?php echo $title?></p>
                <img src="../img/document.png" <?php echo $d?> alt="">
                <p class="name"><?php echo $name?></p>
                <p class="view"><?php echo number_format($hit)?></p>
            </a>
            <?php } ?>
            <div class="list-page">
                <?php if($block <=1){ ?>
                <div class="prev">
                    <a href="javascript:void(0)">
                        <span></span>
                        <span></span>
                    </a>
                </div>
                <?php } else { ?>
                <div class="prev">
                    <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $b_start_page - 1 ?>">
                        <span></span>
                        <span></span>
                    </a>
                </div>
                <?php
                }
                ?>
                <div class="num">
                    <?php
                    for($i=$b_start_page;$i<=$b_end_page;$i++){
                        if($page == $i){ // page 와 i 가 같으면 현재 페이지
                        ?>
                        <div class="on"><a href="javascript:void(0)"><?php echo $i?></a></div>
                        <?php
                        } else {
                        ?>
                        <div><a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $i?>"><?php echo $i?></a></div>
                        <?php
                        }
                    }
                    ?>
                </div>
                <?php
                $total_block = ceil($total_page/$b_pageNum_list);
                if($block >= $total_block){ ?>
                <div class="next">
                    <a href="javascript:void(0)">
                        <span></span>
                        <span></span>
                    </a>
                </div>
                <?php } else { ?>
                <div class="next">
                    <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $b_end_page + 1 ?>">
                        <span></span>
                        <span></span>
                    </a>
                </div>
                <?php } ?>
            </div>
            
            <div class="write">
                <a href="board_write.php">글쓰기</a>
            </div>
        </div>
    </div>
    <iframe name="ifrm" frameborder="0" style="display:none"></iframe>
    <section class="con-det">
        <div class="inner">
            <div class="modi-pop">
                <form method="POST" action="chk_board.php" target="ifrm" autocomplete="off">
                    <input type="hidden" id="num" name="num" value="">
                    <input type="submit" id="sub" style="display:none">
                <img src="../img/r_cancel.png" alt="닫기">
                <div>
                    <p>성함</p>
                    <input type="text" name="name" placeholder="성함을 입력해주세요" required>
                </div>
                <div>
                    <p>비밀번호</p>
                    <input type="password" name="pass" placeholder="비밀번호를 입력해주세요" required>
                </div>
                <a href="javascript:void(0)" onclick="document.querySelector('#sub').click();">확인</a>
                </form>
            </div>
        </div>
    </section>
    <?php include '../footer.php'; ?>
</body>

<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>
