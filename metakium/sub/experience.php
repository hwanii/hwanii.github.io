<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php 
    include '../header.php';
    $sql="SELECT * FROM xr_contents WHERE area='contents'";
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($res);
    ?>
    <section class="expeience">
        <div class="ex-column">
            <div>
                <img src="../img/ex-01.png" alt="">
                <p>경신중학교 관리실</p>
            </div>
            <div>
                <img src="../img/ex-15.png" alt="">
                <p>세현고등학교 도서관</p>
            </div>
            <div>
                <img src="../img/ex-03.png" alt="">
                <p>관악구 당곡고등학교 도서관</p>
            </div>
            <div>
                <img src="../img/ex-06.png" alt="">
                <p>광진구 양진중학교 도서관</p>
            </div>
            <div>
                <img src="../img/ex-10.png" alt="">
                <p>서울도시과학기술고 학생 활동 복합 공간</p>
            </div>
            <div>
                <img src="../img/ex-20.png" alt="">
                <p>청원여고 로비</p>
            </div>
            <div>
                <img src="../img/ex-22.png" alt="">
                <p>청원여고 휴게실</p>
            </div>
            <div>
                <img src="../img/ex-19.png" alt="">
                <p>청원여고 교육실</p>
            </div>
            <div>
                <img src="../img/ex-21.png" alt="">
                <p>청원여고 자습실</p>
            </div>
        </div>
        <div class="ex-column">
            <div>
                <img src="../img/ex-04.png" alt="">
                <p>관악구 당곡고등학교 온라인 교실</p>
            </div>
            <div>
                <img src="../img/ex-13.png" alt="">
                <p>석관고등학교 교육실 로비</p>
            </div>
            <div>
                <img src="../img/ex-09.png" alt="">
                <p>서울공고</p>
            </div>
            <div>
                <img src="../img/ex-02.png" alt="">
                <p>경신중학교 로비</p>
            </div>
            <div>
                <img src="../img/ex-08.png" alt="">
                <p>능허대학교</p>
            </div>
            <div>
                <img src="../img/ex-11.png" alt="">
                <p>석관고등학교 고교학점제 시설</p>
            </div>
        </div>
        <div class="ex-column">
            <div>
                <img src="../img/ex-05.png" alt="">
                <p>관악구 당곡고등학교 온라인 교실 복도</p>
            </div>
            <div>
                <img src="../img/ex-14.png" alt="">
                <p>석관고등학교 로비</p>
            </div>
            <div>
                <img src="../img/ex-16.png" alt="">
                <p>세현고등학교 메이커룸</p>
            </div>
            <div>
                <img src="../img/ex-07.png" alt="">
                <p>광진구 양진중학교 라운지</p>
            </div>
            <div>
                <img src="../img/ex-18.png" alt="">
                <p>송파2동 키움센터</p>
            </div>
            <div>
                <img src="../img/ex-17.png" alt="">
                <p>세현고등학교 미디어스페이스룸</p>
            </div>
            <div>
                <img src="../img/ex-12.png" alt="">
                <p>석관고등학교 1교육실</p>
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
