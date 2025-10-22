<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php'; ?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php'; ?>
    <section class="sub-banner sub04">
        <div class="bg"></div>
        <div class="txt-box">
            <h2>PRODUCTS</h2>
            <p>HOME&nbsp;&nbsp;>&nbsp;&nbsp;PRODUCTS</p>
        </div>
    </section>
    <div class="wow-cate wow-cate02">
        <ul>
            <?php
            $mSql="SELECT * FROM product_menu ORDER BY num ASC";
            $mRes=mysqli_query($conn, $mSql);
            $array=array();
            while($mRow=mysqli_fetch_array($mRes)){
                array_push($array, $mRow['title']);
            }
            ?>
            <li class="on"><a href="../sub/product01.php"><?php echo $array[0]?></a></li>
            <li><a href="../sub/product02.php"><?php echo $array[1]?></a></li>
            <li><a href="../sub/product03.php"><?php echo $array[2]?></a></li>
            <li><a href="../sub/product04.php"><?php echo $array[3]?></a></li>
            <li><a href="../sub/product05.php"><?php echo $array[4]?></a></li>
            <li><a href="../sub/product06.php"><?php echo $array[5]?></a></li>
            <li><a href="../sub/product07.php"><?php echo $array[6]?></a></li>
            <li><a href="../sub/product08.php"><?php echo $array[7]?></a></li>
        </ul>
    </div>
    <section class="product">
        <div class="title-txt">
            <h2>제품군 소개</h2>
        </div>
        <div class="inner">
            <form method="GET" action="<?php echo $_SERVER['PHP_SELF']?>">
            <div class="search-box">
                <select name="stat">
                    <option value="t">제 목</option>
                    <option value="c">내 용</option>
                    <option value="tc">제목 + 내용</option>
                </select>
                <input name="search" required>
                <button>검색</button>
            </div>
            </form>
            <div class="de-contents">
                <?php
                $stat=$_GET['stat'];
                $search=$_GET['search'];

                if($stat=="t"){
                    $s=" AND title LIKE '%$search%'";
                } else if($stat=="c"){
                    $s=" AND contents LIKE '%$search%'";
                } else if($stat=="tc"){
                    $s=" AND (title LIKE '%$search%' OR contents LIKE '%$search%')";
                }

                $page=($_GET['page']) ? $_GET['page'] : 1; // 페이지 번호
                $list = 10; // 페이지 당 목록 개수
                $b_pageNum_list = 5; // 페이지 당 블록 갯수
                $block = ceil($page/$b_pageNum_list); // 현재 리스트의 블럭
                
                $b_start_page = (($block - 1) * $b_pageNum_list) + 1; // 현재 블럭에서 시작 페이지 번호
                $b_end_page = $b_start_page + $b_pageNum_list -1; // 현재 블럭에서 마지막 페이지 번호
                
                $pSql="SELECT COUNT(*) AS cnt FROM product WHERE `type`='cate1'{$s}";
                $pRes=mysqli_query($conn, $pSql);
                $pRow=mysqli_fetch_array($pRes);
                $total_count=$pRow['cnt'];
                
                $total_page = ceil($total_count / $list); // 총 페이지 수 
                if($b_end_page > $total_page) $b_end_page = $total_page;
                
                $limit=($page - 1) * $list; // 출력 시작 번호

                $no=$total_count-$limit;

                $sql="SELECT * FROM product WHERE `type`='cate1'{$s} ORDER BY num DESC LIMIT $limit, $list";
                $res=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($res)){
                    $title=$row['title'];
                    $thumb=$row['thumbnail1'];
                    $num=$row['num'];
                ?>
                <a href="product_detail.php?type=cate1&num=<?php echo $num?>">
                    <img src="../img/product/cate1/thumb/<?php echo $thumb?>" alt="">
                    <p><?php echo $title?></p>
                </a>
                <?php } ?>
            </div>
            <div class="page-ch">
                <div class="prev">
                    <?php
                    if($page > 1){
                    ?>
                    <a href="<?php echo $_SERVER['PHP_SELF']?>"><img src="../img/pagination-backward.png" alt=""></a>
                    <?php } 
                    if($block > 1){ ?>
                    <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $b_start_page - 1 ?>"><img src="../img/pagination-prev.png" alt=""></a>
                    <?php } ?>
                </div>
                <div class="num">
                    <?php
                    for($i=$b_start_page;$i<=$b_end_page;$i++){
                        if($page == $i){ // page 와 i 가 같으면 현재 페이지
                        ?>
                        <a href="javascript:void(0)" class="on"><?php echo $i?></a>
                        <?php
                        } else {
                        ?>
                        <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $i?>">2</a>
                        <?php
                        }
                    }
                    ?>
                </div>
                <div class="next">
                    <?php
                    $total_block = ceil($total_page/$b_pageNum_list);
                    if($block < $total_block){
                    ?>
                    <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $b_end_page + 1 ?>"><img src="../img/pagination-prev.png" alt=""></a>
                    <?php } 
                    if($page < $total_page){
                    ?>
                    <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $total_page?>"><img src="../img/pagination-backward.png" alt=""></a>
                    <?php } ?>
                </div>
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
