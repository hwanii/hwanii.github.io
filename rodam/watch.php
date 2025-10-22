
<section class="watch" data-aos="fade-up">
    <div class="title">
        <h2>WATCH ON</h2>
        <div class="title_line"></div>
        <p>유튜브로 자세히 보기</p>
    </div>
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
        <!-- <a href="<?php echo $yRow['link_1']?>" target="_blank"><img src="<?php echo get_youtube_thumbnail($yRow['link_1'])?>"></a>
        <div class="right">
            <a href="<?php echo ($yRow['link_2']) ? $yRow['link_2'] : "javascript:void(0)"?>" <?php echo ($yRow['link_2']) ? 'target="_blank"' : ""?>><?php if($yRow['link_2']) { ?><img src="<?php echo get_youtube_thumbnail($yRow['link_2'])?>"><?php } ?></a>
            <a href="<?php echo ($yRow['link_3']) ? $yRow['link_3'] : "javascript:void(0)"?>" <?php echo ($yRow['link_3']) ? 'target="_blank"' : ""?>><?php if($yRow['link_3']) { ?><img src="<?php echo get_youtube_thumbnail($yRow['link_3'])?>"><?php } ?></a>
            <a href="<?php echo ($yRow['link_4']) ? $yRow['link_4'] : "javascript:void(0)"?>" <?php echo ($yRow['link_4']) ? 'target="_blank"' : ""?>><?php if($yRow['link_4']) { ?><img src="<?php echo get_youtube_thumbnail($yRow['link_4'])?>"><?php } ?></a>
            <a href="<?php echo ($yRow['link_5']) ? $yRow['link_5'] : "javascript:void(0)"?>" <?php echo ($yRow['link_5']) ? 'target="_blank"' : ""?>><?php if($yRow['link_5']) { ?><img src="<?php echo get_youtube_thumbnail($yRow['link_5'])?>"><?php } ?></a>
        </div> -->
        <div class="main_watch_contents">
            <iframe id="zVideo" src="https://www.youtube.com/embed/<?php echo $link_1[1]?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div class="bottom_watch">
            <div class="bottom_watch_box" onclick="change('<?php echo $link_1[1]?>')">
                <img src="./admin/img/youtube/<?php echo $page ?>/<?php echo $photo1?>">
            </div>
            <div class="bottom_watch_box" onclick="change('<?php echo $link_2[1]?>')">
                <img src="./admin/img/youtube/<?php echo $page ?>/<?php echo $photo2?>">
            </div>
            <div class="bottom_watch_box" onclick="change('<?php echo $link_3[1]?>')">
                <img src="./admin/img/youtube/<?php echo $page ?>/<?php echo $photo3?>">
            </div>
            <div class="bottom_watch_box" onclick="change('<?php echo $link_4[1]?>')">
                <img src="./admin/img/youtube/<?php echo $page ?>/<?php echo $photo4?>">
            </div>
        </div>
    </div>
</section>
<script>
function change(n){
    var link = "https://www.youtube.com/embed/" + n;
    $("#zVideo").attr('src', link);
}
</script>