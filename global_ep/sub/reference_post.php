<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../css/sub.css">
</head>

<body class="wrap">
    <?php include '../header.php'; ?>
    <?php include 'side.php'; ?>
    <section class="sub_banner" style="background: url(../img/sub_ref.png) no-repeat center/cover;">
        <div class="bg"></div>
        <div class="txt_box">
            <h2>REFERENCE</h2>
            <p>
                GLOBAL EP는 전자상거래를 통해 CBT(역직구+보세)방식으로<br>
                해외 진출 원스톱 서비스를 제공하고 있습니다.
            </p>
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner" data-aos="fade-right">
            <h2>HOME</h2>
            <img src="../img/icon-flow-arrow.png">
            <h2>REFERENCE</h2>
        </div>
    </section>
    <section class="reference">
        <div class="inner1200">
            <div class="brand_contents" data-aos="fade-up">
                <?php
                $num=$_GET['num'];
                $type=($_GET['type']) ? $_GET['type'] : "all";

                if($type=="branding"){
                    $w=" AND (branding1!='' OR branding2!='' OR branding3!='' OR branding4!='' OR branding5!='')";
                    $local="refer_branding.php";
                } else if($type=="marketing"){
                    $w=" AND (marketing1!='' OR marketing2!='' OR marketing3!='' OR marketing4!='' OR marketing5!='' OR marketing6!='' OR marketing7!='' OR marketing8!='')";
                    $local="refer_marketing.php";
                } else if($type=="bab"){
                    $w=" AND (bab1!='' OR bab2!='' OR bab3!='' OR bab4!='' OR bab5!='')";
                    $local="refer_b2b.php";
                } else if($type=="government"){
                    $w=" AND (government1!='' OR government2!='' OR government3!='' OR government4!='' OR government5!='')";
                    $local="refer_government.php";
                } else {
                    $local="reference.php";
                }

                $t="&type=".$type;

                $sql="SELECT * FROM reference WHERE num='$num'";
                $res=mysqli_query($conn, $sql);
                $row=mysqli_fetch_array($res);
                $title=$row['title'];
                $thumb=$row['thumb'];

                $bs=0;
                for($b=1;$b<=5;$b++){
                    if($row['branding'.$b]){
                        $bs++;
                    }
                }
                
                $ms=0;
                for($m=1;$m<=8;$m++){
                    if($row['marketing'.$m]){
                        $ms++;
                    }
                }

                $as=0;
                for($a=1;$a<=5;$a++){
                    if($row['bab'.$a]){
                        $as++;
                    }
                }

                $gs=0;
                for($g=1;$g<=5;$g++){
                    if($row['government'.$g]){
                        $gs++;
                    }
                }
                ?>
                <div class="brand_name">
                    <img src="../img/reference/<?php echo $thumb?>">
                    <div class="txt_box">
                        <div class="top">
                            <p>클라이언트</p>
                            <h2><?php echo $title?></h2>
                        </div>
                        <div class="bottom">
                            <p>레퍼런스 분야</p>
                            <div class="<?php echo ($bs>0) ? "on" : ""?>">
                                <i></i>
                                <h2>브랜딩</h2>
                            </div>
                            <div class="<?php echo ($ms>0) ? "on" : ""?>">
                                <i></i>
                                <h2>마케팅</h2>
                            </div>
                            <div class="<?php echo ($as>0) ? "on" : ""?>">
                                <i></i>
                                <h2>B2C & B2B</h2>
                            </div>
                            <div class="<?php echo ($gs>0) ? "on" : ""?>">
                                <i></i>
                                <h2>정부지원사업</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                if($bs>0){
                ?>
                <h2 class="brand_title">브랜딩</h2>
                <div class="swiper-container shop_slide">
                    <div class="swiper-wrapper">
                        <?php
                        for($l=1;$l<=5;$l++){
                            if(empty($row['branding'.$l])){
                                continue;
                            }
                        ?>
                        <div class="swiper-slide" style="background: url('../img/reference/<?php echo $row['branding'.$l]?>') no-repeat center/cover;"></div>
                        <?php } ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <?php } 
                if($ms>0){
                ?>
                <h2 class="brand_title">마케팅</h2>
                <div class="brand_icon">
                    <?php
                    for($o=1;$o<=8;$o++){
                        $ml=$row['marketing_link'.$o];
                        if(empty($row['marketing'.$o])){
                            continue;
                        }
                    ?>
                    <a href="<?php echo ($ml) ? $ml : "javascript:void(0)"?>" target="_blank"><img src="../img/reference/<?php echo $row['marketing'.$o]?>"></a>
                    <?php } ?>
                </div>
                <?php } 
                if($as>0){
                ?>
                <div class="line"></div>
                <h2 class="brand_title">B2C & B2B</h2>
                <div class="swiper-container b2c_slide">
                    <div class="swiper-wrapper">
                        <?php
                        for($p=1;$p<=5;$p++){
                            if(empty($row['bab'.$p])){
                                continue;
                            }
                        ?>
                        <div class="swiper-slide" style="background: url('../img/reference/<?php echo $row['bab'.$p]?>') no-repeat center/cover;"></div>
                        <?php } ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <?php } 
                if($gs>0){
                ?>
                <h2 class="brand_title">정부지원사업</h2>
                <div class="swiper-container gover_slide">
                    <div class="swiper-wrapper">
                        <?php
                        for($p=1;$p<=5;$p++){
                            if(empty($row['government'.$p])){
                                continue;
                            }
                        ?>
                        <div class="swiper-slide" style="background: url('../img/reference/<?php echo $row['government'.$p]?>') no-repeat center/cover;"></div>
                        <?php } ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <?php } ?>
            </div>
            <div class="brand_bottom">
                <?php
                $pSql="SELECT * FROM reference WHERE num < '$num'{$w} ORDER BY num DESC LIMIT 1";
                $pRes=mysqli_query($conn, $pSql);
                $pRow=mysqli_fetch_array($pRes);
                $prev=$pRow['num'];
                
                $nSql="SELECT * FROM reference WHERE num > '$num'{$w} ORDER BY num ASC LIMIT 1";
                $nRes=mysqli_query($conn, $nSql);
                $nRow=mysqli_fetch_array($nRes);
                $next=$nRow['num'];
                ?>
                <a href="<?php echo $_SERVER['PHP_SELF']?>?num=<?php echo $prev?><?php echo $t?>" class="prev" <?php echo ($prev) ? "" : "style='visibility:hidden'"?>>
                    <img src="../img/g-left-arrow.png">
                    <p>Before</p>
                </a>
                <a href="<?php echo $local?>" class="center">BACK TO LIST</a>
                <a href="<?php echo $_SERVER['PHP_SELF']?>?num=<?php echo $next?><?php echo $t?>" class="next" <?php echo ($next) ? "" : "style='visibility:hidden'"?>>
                    <img src="../img/g-right-arrow.png">
                    <p>After</p>
                </a>
            </div>
        </div>
    </section>
    <?php include 'sub_footer.php'; ?>
    <?php include '../footer.php'; ?>
</body>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/swiper-bundle.min.js"></script>
<script src="../js/sub.js"></script>

</html>
