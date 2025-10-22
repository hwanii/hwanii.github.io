<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php';?>
    <div class="click-menu">
        <a class="on" href="../sub/notice.php">공지사항</a>
        <a href="../sub/faq.php">FAQ</a>
        <a href="../sub/portfolio.php">PORTFOLIO</a>
    </div>
    <section class="b-d">
        <div class="inner">
            <?php
            $num=$_GET['num'];
            $search=$_GET['search'];

            $se="";
            if($search){
                $s=" AND (title LIKE '%$search%' OR contents LIKE '%$search%')";
                $se="&search=".$search;
                $le="?search=".$search;
            }

            $hSql="UPDATE bo_notice SET hit=hit+1 WHERE num='$num'";
            $hRes=mysqli_query($conn, $hSql);

            $pSql="SELECT * FROM bo_notice WHERE num<'$num'{$s} ORDER BY num DESC LIMIT 1";
            $pRes=mysqli_query($conn, $pSql);
            $pRow=mysqli_fetch_array($pRes);
            $prev=$pRow['num'];

            $nSql="SELECT * FROM bo_notice WHERE num>'$num'{$s} ORDER BY num ASC LIMIT 1";
            $nRes=mysqli_query($conn, $nSql);
            $nRow=mysqli_fetch_array($nRes);
            $next=$nRow['num'];

            $sql="SELECT * FROM bo_notice WHERE num='$num'";
            $res=mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($res);
            $title=$row['title'];
            $contents=$row['contents'];
            $file=$row['file_1'];
            ?>
            <a href="notice_detail.php?num=<?php echo $prev?><?php echo $se?>" class="b-before" style="<?php echo ($prev=="") ? "visibility:hidden" : ""?>">
                <h2>BEFORE</h2>
                <img src="../img/left-arrow.png" alt="">
                <p>이전 게시글 보기</p>
            </a>
            <a href="notice_detail.php?num=<?php echo $next?><?php echo $se?>" class="b-next" style="<?php echo ($next=="") ? "visibility:hidden" : ""?>">
                <h2>NEXT</h2>
                <img src="../img/right-arrow.png" alt="">
                <p>다음 게시글 보기</p>
            </a>
            <h2><?php echo $title?></h2>
            <div class="b-d-contents"><?php echo $contents?></div>
            <?php 
            if($file){
            ?>
            <div class="down">
                <div>
                    <img src="../img/b-down.png" alt="다운로드" onclick=" onclick="document.querySelector('#file').click();">
                    <span onclick="document.querySelector('#file').click();">파일 다운로드</span>
                    <a id="file" href="../img/notice/<?php echo $file?>" download style="display:none"></a>
                </div>
            </div>
            <?php } ?>
            <div class="back-list">
                <a href="notice.php<?php echo $le?>">
                    <img src="../img/list.png" alt="">
                    <p>리스트 돌아가기</p>
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
