<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../font/font.css">
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php'; ?>
    <section class="banner banner05">
        <div class="bg"></div>
        <div class="txt_box">
            <span>Best business partner</span>
            <p>BUSINESS의 성공적인 미래</p>
            <h2>(주)대원로지스틱이 함께 합니다.</h2>
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner">
            <select dir="rtl" onchange="window.open(value,'_self');">
                <option selected value="../sub/notice.php">공지사항</option>
                <option value="../sub/estimate.php">견적요청</option>
            </select>
            <ul>
                <li>HOME</li>
                <li>커뮤니티</li>
                <li>공지사항</li>
            </ul>
        </div>
    </section>
    <section class="b-d">
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

            $sql="SELECT * FROM bo_notice WHERE num='$num'{$s}";
            $res=mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($res);
            $title=$row['title'];
            $contents=$row['contents'];
            $file=$row['file_1'];
            ?>
        <div class="inner">
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
            <div class="b-d-contents"><p><?php echo $contents?></p></div>
            <div class="down" style="<?php echo ($file) ? "display:block" : "display:none"?>">
                <div>
                    <img src="../img/b-down.png" alt="다운로드" onclick="document.querySelector('#down').click();">
                    <span onclick="document.querySelector('#down').click();"><?php echo $file?></span>
                </div>
                <a id="down" href="../img/notice/<?php echo $file?>" download></a>
            </div>
            <div class="back-list">
                <a href="notice.php">
                    <img src="../img/list.png" alt="">
                    <p>리스트 돌아가기</p>
                </a>
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
