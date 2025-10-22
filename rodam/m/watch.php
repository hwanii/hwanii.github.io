<?php
$ySql="SELECT * FROM sub_youtube WHERE `page`='$page'";
$yRes=mysqli_query($conn, $ySql);
$yRow=mysqli_fetch_array($yRes);
$link_1=explode("?v=", $yRow['link_1']);
$link_2=explode("?v=", $yRow['link_2']);
$link_3=explode("?v=", $yRow['link_3']);
$link_4=explode("?v=", $yRow['link_4']);
$photo1=$yRow['photo1'];
$photo2=$yRow['photo2'];
$photo3=$yRow['photo3'];
$photo4=$yRow['photo4'];
?>
<div class="watch_contents">
    <div class="main_watch_contents">
        <iframe id="zVideo" src="https://www.youtube.com/embed/<?php echo $link_1[1]?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div class="bottom_watch">
        <div class="bottom_watch_box" onclick="change('<?php echo $link_1[1]?>')">
            <img src="../admin/img/youtube/<?php echo $page ?>/<?php echo $photo1?>">
        </div>
        <div class="bottom_watch_box" onclick="change('<?php echo $link_2[1]?>')">
            <img src="../admin/img/youtube/<?php echo $page ?>/<?php echo $photo2?>">
        </div>
        <div class="bottom_watch_box" onclick="change('<?php echo $link_3[1]?>')">
            <img src="../admin/img/youtube/<?php echo $page ?>/<?php echo $photo3?>">
        </div>
        <div class="bottom_watch_box" onclick="change('<?php echo $link_4[1]?>')">
            <img src="../admin/img/youtube/<?php echo $page ?>/<?php echo $photo4?>">
        </div>
    </div>
</div>
<script>
function change(n){
    var link = "https://www.youtube.com/embed/" + n;
    $("#zVideo").attr('src', link);
}
</script>