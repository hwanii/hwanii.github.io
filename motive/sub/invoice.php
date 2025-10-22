<!DOCTYPE html>
<html lang="ko">

<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <title>MOTIVE</title>
    <meta name="description" content="MOTIVE에서 만드는 나만의 선팅 간편 견적">
    <meta property="og:type" content="website" />
    <meta property="og:image" content="img/opengraph-img.jpg" />
    <meta property="og:title" content="MOTIVE" />
    <meta property="og:description" content="MOTIVE에서 만드는 나만의 선팅 간편 견적" />
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
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="rgba(0,0,0,0)">
    <meta name="naver-site-verification" content="01f26d1bf9dfb238fe359fb66ee4c816281dd2fe" />
    <link rel="canonical" href="홈페이지 URL 입력">
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>
<?php
include '../connect.php';

$num=$_GET['num'];

$sql="SELECT * FROM counsel WHERE num='$num'";
$res=mysqli_query($conn, $sql);
$row=mysqli_fetch_array($res);
$name=$row['res_name'];
$tel=$row['tel'];
$company=$row['company'];
$car=$row['car'];
$color=$row['color'];
$date=$row['confirm_time'];
$input_date=$row['input_date'];
$brand=$row['brand'];
$tinting=$row['tinting'];
$tinting_type=explode("/", $row['tinting_type']);
$tinting_price=$row['tinting_price'];
$ppf=$row['ppf'];
$ppf_type=$row['ppf_type'];
$ppf_price=$row['ppf_price'];
$glass=$row['glass'];
$glass_price=$row['glass_price'];
$leather=$row['leather'];
$leather_price=$row['leather_price'];
$deafening=$row['deafening'];
$deafening_price=$row['deafening_price'];
$blackbox=$row['blackbox'];
$blackbox_price=$row['blackbox_price'];
$battery=$row['battery'];
$battery_price=$row['battery_price'];
$after_blow=$row['after_blow'];
$after_blow_price=$row['after_blow_price'];
$total=$row['total'];
$progress=$row['progress'];
?>
<body>
    <div class="invoice_body">
        <div id="pdfDiv" class="invoice spoka">
            <div class="invoice_pdf">
                <div class="in_header">
                    <a href="../index.php" class="logo">
                        <img src="../img/logo.png" alt="모티브 로고">
                    </a>
                </div>
                <div class="top">
                    <div class="left">
                        <h2>견적서</h2>
                        <p><b>DATE : </b><?php echo date("Y-m-d", strtotime($date))?></p>
                    </div>
                    <div class="right">
                        <div>
                            <h3><?php echo $car?></h3>
                            <h3><?php echo $color?></h3>
                        </div>
                        <h2><?php echo $name?></h2>
                        <p><?php echo $tel?></p>
                    </div>
                </div>
                <div class="middle">
                    <?php
                    if($tinting){
                    ?>
                    <div class="contents">
                        <div>
                            <h3>썬팅</h3>
                            <p><?php echo $brand?>/전면 <?php echo $tinting_type[0]?>/측면1열 <?php echo $tinting_type[1]?>/측면2열 <?php echo $tinting_type[2]?>/후면 <?php echo $tinting_type[3]?>/썬루프 <?php echo $tinting_type[4]?></p>
                        </div>
                        <h2><?php echo number_format($tinting_price)?>원</h2>
                    </div>
                    <?php } 
                    if($ppf){
                    ?>
                    <div class="contents">
                        <div>
                            <h3>PPF</h3>
                            <p>
                            <?php
                            if($ppf_type=="choice"){
                                for($i=0;$i<count($ppf);$i++){
                                    if($i==0){
                                        echo $ppf[$i];
                                    } else {
                                        echo " / ".$ppf[$i];
                                    }
                                }
                            } else if($ppf_type=="package"){
                                $pSql="SELECT * FROM ppf_package WHERE title='$ppf'";
                                $pRes=mysqli_query($conn, $pSql);
                                $pRow=mysqli_fetch_array($pRes);
                                $pName=array("헤드램프", "프런트 범퍼 사이드", "사이드 미러", "도어 컵", "도어 스텝", "도어 에지", "주유구&도어", "리어 범퍼 사이드", "리어 범퍼 어퍼");
                                $pAry=array($pRow['hl'], $pRow['fbs'], $pRow['sm'], $pRow['dc'], $pRow['ds'], $pRow['de'], $pRow['gd'], $pRow['rbs'], $pRow['rbu']);
                                
                                for($i=0;$i<count($pAry);$i++){
                                    if($pAry[$i]=="0"){
                                        continue;
                                    } else {
                                        if($i==0){
                                            echo $pName[$i];
                                        } else {
                                            echo " / ".$pName[$i];
                                        }
                                    }
                                }
                            }
                            ?>
                            </p>
                        </div>
                        <h2><?php echo number_format($ppf_price)?>원</h2>
                    </div>
                    <?php } 
                    if($glass){
                    ?>
                    <div class="contents">
                        <div>
                            <h3>유리막 코팅</h3>
                            <p>모티브 슈프림 블랙</p>
                        </div>
                        <h2><?php echo number_format($glass_price)?>원</h2>
                    </div>
                    <?php } 
                    if($leather){
                    ?>
                    <div class="contents">
                        <div>
                            <h3>가죽 코팅</h3>
                            <p>가죽코팅그래핀 시공</p>
                        </div>
                        <h2><?php echo number_format($leather_price)?>원</h2>
                    </div>
                    <?php } 
                    if($deafening){
                    ?>
                    <div class="contents">
                        <div>
                            <h3>방음패키지</h3>
                            <p><?php echo $deafening?> 시공</p>
                        </div>
                        <h2><?php echo number_format($deafening_price)?>원</h2>
                    </div>
                    <?php } 
                    if($blackbox){
                    ?>
                    <div class="contents">
                        <div>
                            <h3>블랙박스</h3>
                            <p><?php echo $blackbox?> 시공</p>
                        </div>
                        <h2><?php echo number_format($blackbox_price)?>원</h2>
                    </div>
                    <?php } 
                    if($battery){
                    ?>
                    <div class="contents">
                        <div>
                            <h3>보조배터리</h3>
                            <p><?php echo $battery?></p>
                        </div>
                        <h2><?php echo number_format($battery_price)?>원</h2>
                    </div>
                    <?php } 
                    if($after_blow){
                    ?>
                    <div class="contents">
                        <div>
                            <h3>애프터블로우</h3>
                            <p><?php echo $after_blow?></p>
                        </div>
                        <h2><?php echo number_format($after_blow_price)?>원</h2>
                    </div>
                    <?php } 
                    ?>
                    <h2>총계&nbsp;&nbsp;&nbsp;&nbsp;<?php echo number_format($total)?>원</h2>
                </div>
                <div class="bottom">
                    <h2>MOTIVE는 하이퀄리티 원칙으로 정성을 다한 시공으로 차량을 인도 드리겠습니다.</h2>
                    <div class="bbottom">
                        <div class="left">
                            <p>경기도 하남시 우뱅스69번길18, 1F</p>
                            <h2>Phone:</h2>
                            <span><?php echo $tel?></span>
                        </div>
                        <a href="">GOMOTIVE.CO.KR</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="paper_download" onclick="down_img()">다운로드</button>
    <div class="empty"></div>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
<script type="text/javascript">
    // $(document).ready(function(){
    //     $('#copy').trigger("click");

        // $("#copy").on("click",function(){
        function down_img(){
            html2canvas($('#pdfDiv')[0]).then(function(canvas){
            var img = document.createElement("a");
            img.download = "MOTIVE 견적서.png";
            img.href=canvas.toDataURL();
            document.body.appendChild(img);
            img.click();
            });
        }
        // });
    // });
</script>
</html>
