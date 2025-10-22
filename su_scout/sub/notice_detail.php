<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>
<body>
    <?php include '../header.php'; ?>
    <section class="sub-banner sub05">
        <h2>NOTICE</h2>
    </section>
    <div class="menu-flow">
        <div class="inner">
            <a href="../index.php"><img src="../img/icon-home.png" alt=""></a>
            <div class="select">
                <dl>
                    <dt><a href="../sub/notice.php" class="">NOTICE</a></dt>
                    <dd>
                        <ul>
                            <li><a href="../sub/client.php" class="">FOR CLIENTS</a></li>
                            <li><a href="../sub/candidate_information.php" class="">FOR CANDIDATES</a></li>
                            <li><a href="../sub/consultant.php" class="">CONSULTANTS</a></li>
                            <li><a href="../sub/company.php" class="">COMPANY</a></li>
                            <li><a href="../sub/notice.php" class="">NOTICE</a></li>
                        </ul>
                    </dd>
                </dl>
            </div>
            <div class="select">
                <dl>
                    <dt><a href="../sub/notice.php" class="">공지사항</a></dt>
                    <dd>
                        <ul>
                            <li><a href="../sub/notice.php" class="">공지사항</a></li>
                            <li><a href="../sub/faq.php" class="">FAQ</a></li>
                        </ul>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
    <section class="b-d">
        <?php
        $num=$_GET['num'];

        $hSql="UPDATE bo_notice SET hit=hit+1 WHERE num='$num'";
        $hRes=mysqli_query($conn, $hSql);

        $sql="SELECT * FROM bo_notice WHERE num='$num'";
        $res=mysqli_query($conn, $sql);
        $row=mysqli_fetch_array($res);
        $title=$row['title'];
        $contents=$row['contents'];
        $file=$row['file_1'];
        ?>
        <div class="inner">
            <h2><?php echo $title?></h2>
            <div class="b-d-contents"><?php echo $contents?></div>
            <?php
            $pSql="SELECT * FROM bo_notice WHERE num < '$num' ORDER BY num DESC LIMIT 1";
            $pRes=mysqli_query($conn, $pSql);
            $pRow=mysqli_fetch_array($pRes);
            $prev=$pRow['num'];
            
            $nSql="SELECT * FROM bo_notice WHERE num > '$num' ORDER BY num ASC LIMIT 1";
            $nRes=mysqli_query($conn, $nSql);
            $nRow=mysqli_fetch_array($nRes);
            $next=$nRow['num'];
            ?>
            <div class="down" style="cursor: pointer;<?php echo (empty($file)) ? "display:none" : ""?>">
                <div>
                    <img src="../img/b-down.png" alt="다운로드" onclick="document.querySelector('#down').click();">
                    <span onclick="document.querySelector('#down').click();">다운로드</span>
                </div>
                <a id="down" href="../img/file/<?php echo $file?>" style="display:none" download></a>
            </div>
            <div class="back-list">
                <a href="notice_detail.php?num=<?php echo $prev?>" class="b-before" style="<?php echo ($prev) ? "" : "display:none"?>">
                    <h2>BEFORE</h2>
                    <img src="../img/left-arrow.png" alt="">
                    <p>이전 게시글 보기</p>
                </a>
                <a href="notice.php" class="list-center">
                    <img src="../img/list.png" alt="">
                    <p>리스트 돌아가기</p>
                </a>
                <a href="notice_detail.php?num=<?php echo $next?>" class="b-next" style="<?php echo ($next) ? "" : "display:none"?>">
                    <h2>NEXT</h2>
                    <img src="../img/right-arrow.png" alt="">
                    <p>다음 게시글 보기</p>
                </a>
            </div>
        </div>
    </section>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>
