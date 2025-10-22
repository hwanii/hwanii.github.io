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
    <section class="sub-banner sub01">
        <h2>FOR CANDIDATES</h2>
    </section>
    <div class="menu-flow">
        <div class="inner">
            <a href="../index.php"><img src="../img/icon-home.png" alt=""></a>
            <div class="select">
                <dl>
                    <dt><a href="../sub/candidate_information.php" class="">FOR CANDIDATES</a></dt>
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
                    <dt><a href="../sub/candidate_information.php" class="">채용정보</a></dt>
                    <dd>
                        <ul>
                            <li><a href="../sub/candidate_information.php" class="">채용정보</a></li>
                            <li><a href="../sub/resume.php" class="">이력서등록</a></li>
                        </ul>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
    <section class="candidate">
        <div class="inner1280">
            <div class="title">
                <h2>채용정보</h2>
                <p>에스유 스카우트에 등록된 채용정보입니다.</p>
            </div>
            <?php 
            $type=($_GET['type']) ? $_GET['type'] : "";
            if($type){
                $t=" WHERE `type`='$type'";
            } else {
                $t=" WHERE `type` LIKE '%'";
            }

            $stat=$_GET['stat'];
            if($stat){
            $st=($stat=="전체") ? "" : " AND stat=".$stat;
            }
            $search=$_GET['search'];
            $s = ($search) ? " AND company LIKE '%$search%'" : "";
            $se="&type=$type&stat=$stat&search=$search";
            ?>
            <div class="candi-cate">
                <a href="<?php echo $_SERVER['PHP_SELF']?>" class="<?php echo (empty($type)) ? "on" : ""?>">전체보기</a>
                <a href="<?php echo $_SERVER['PHP_SELF']?>?type=대기업" class="<?php echo ($type=="대기업") ? "on" : ""?>">대기업</a>
                <a href="<?php echo $_SERVER['PHP_SELF']?>?type=중견기업" class="<?php echo ($type=="중견기업") ? "on" : ""?>">중견기업</a>
                <a href="<?php echo $_SERVER['PHP_SELF']?>?type=중소기업" class="<?php echo ($type=="중소기업") ? "on" : ""?>">중소기업</a>
                <a href="<?php echo $_SERVER['PHP_SELF']?>?type=벤처기업" class="<?php echo ($type=="벤처기업") ? "on" : ""?>">벤처기업</a>
                <a href="<?php echo $_SERVER['PHP_SELF']?>?type=외국계기업" class="<?php echo ($type=="외국계기업") ? "on" : ""?>">외국계기업</a>
                <a href="<?php echo $_SERVER['PHP_SELF']?>?type=공공기관" class="<?php echo ($type=="공공기관") ? "on" : ""?>">공공기관</a>
                <a href="<?php echo $_SERVER['PHP_SELF']?>?type=기타" class="<?php echo ($type=="기타") ? "on" : ""?>">기타</a>
            </div>
            <div class="contents">
                <ul class="candi-top">
                    <li>기업구분</li>
                    <li>공고 제목</li>
                    <li>채용직급</li>
                    <li>상태</li>
                    <li>기한</li>
                </ul>
                <?php
                $page=($_GET['page']) ? $_GET['page'] : 1; // 페이지 번호
                $list = 20; // 페이지 당 목록 개수
                $b_pageNum_list = 5; // 페이지 당 블록 갯수
                $block = ceil($page/$b_pageNum_list); // 현재 리스트의 블럭
                
                $b_start_page = (($block - 1) * $b_pageNum_list) + 1; // 현재 블럭에서 시작 페이지 번호
                $b_end_page = $b_start_page + $b_pageNum_list -1; // 현재 블럭에서 마지막 페이지 번호
                
                $pSql="SELECT COUNT(*) AS cnt FROM candidates{$t}{$st}{$s}";
                $pRes=mysqli_query($conn, $pSql);
                $pRow=mysqli_fetch_array($pRes);
                $total_count=$pRow['cnt'];
                
                $total_page = ceil($total_count / $list); // 총 페이지 수 
                if($b_end_page > $total_page) $b_end_page = $total_page;
                
                $limit=($page - 1) * $list; // 출력 시작 번호
                
                $sql="SELECT * FROM candidates{$t}{$st}{$s} ORDER BY num DESC LIMIT $limit, $list";
                $res=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($res)){
                    $t=$row['type'];
                    $company=$row['company'];
                    $rank=$row['rank'];
                    $cDate=$row['cDate'];
                    $stat=$row['stat'];
                    $num=$row['num'];
                ?>
                <a href="candidate_detail.php?num=<?php echo $num?><?php echo $se?>" class="candi-content">
                    <ul>
                        <li><?php echo $t?></li>
                        <li><?php echo $company?></li>
                        <li><?php echo $rank?></li>
                        <li class="<?php echo ($stat=="마감") ? "deadline" : ""?>"><?php echo $stat?></li>
                        <li><?php echo $cDate?></li>
                    </ul>
                </a>
                <?php } ?>
            </div>
            <div class="list-page">
                <?php
                if($block > 1){
                ?>
                <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $b_start_page - 1?><?php echo $se?>" class="prev"><img src="../img/list-arrow.png" alt=""></a>
                <?php
                }
                ?>
                <div class="num">
                    <?php
                    for($i=$b_start_page;$i<=$b_end_page;$i++){
                        if($page == $i){ // page 와 i 가 같으면 현재 페이지
                        ?>
                        <a href="javascript:void(0)" class="on"><?php echo $i?></a>
                        <?php
                        } else {
                        ?>
                        <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $i?><?php echo $se?>"><?php echo $i?></a>
                        <?php
                        }
                    }
                    ?>
                </div>
                <?php
                if($block < $total_block){
                ?>
                <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $b_end_page + 1 ?><?php echo $se?>" class="next"><img src="../img/list-arrow.png" alt=""></a>
                <?php
                }
                ?>
            </div>
            <div class="search">
                <form method="GET" action="<?php echo $_SERVER['PHP_SELF']?>">
                <input type="hidden" name="type" value="<?php echo $type?>">
                <select name="stat">
                    <option value="전체">상태전체</option>
                    <option value="진행중">진행중</option>
                    <option value="마감">마감</option>
                </select>
                <input type="text" name="search" placeholder="검색어를 입력하세요">
                <button>검색</button>
                </form>
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
