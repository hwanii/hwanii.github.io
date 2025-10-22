<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php'?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php';?>
    <section class="sub_banner">
        <div class="txt_box">
            <h3>ILPA ACADEMY</h3>
            <h2>국제리샤필라테스협회</h2>
            <p>전통의 필라테스에 현대의 해부학적 지식을 접목하여 <b>전문적인 필라테스 전문가를 양성하고 있습니다.</b></p>
            <span>HOME&nbsp;&nbsp;>&nbsp;&nbsp;커뮤니티&nbsp;&nbsp;>&nbsp;&nbsp;Q&A</span>
        </div>
    </section>
    <section class="qna">
        <div class="inner">
            <div class="title">
                <h2>Q&amp;A</h2>
                <p>자주 묻는 질문과 답변입니다.</p>
            </div>
            <div class="qna_contents">
                <?php
                $sql="SELECT * FROM qna ORDER BY num ASC";
                $res=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($res)){
                ?>
                <ul>
                    <li>
                        <span>Q</span>
                        <h2><?php echo $row['title'];?></h2>
                    </li>
                    <li>
                        <div>
                            <span>A</span>
                            <p><?php echo nl2br($row['contents'])?></p>
                        </div>
                    </li>
                </ul>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>
