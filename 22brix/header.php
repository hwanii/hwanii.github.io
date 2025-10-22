<?php include 'connect.php';

?>
<header>
    <div class="inner">
        <div class="ham-btn"><img src="<?php echo $root?>img/ham.png" alt=""></div>
        <h1><a href="<?php echo $root?>index.php"><img src="<?php echo $root?>img/logo01.png" alt=""></a></h1>
        <ul class="gnb">
            <li>
                <a href="<?php echo $root?>sub/about.php">What we are</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/about.php">about</a></li>
                    <li><a href="<?php echo $root?>sub/man.php">Man Power</a></li>
                    <li><a href="<?php echo $root?>sub/map.php">Location</a></li>
                </ul>
            </li>
            <li><a href="<?php echo $root?>sub/service.php">Service</a></li>
            <li>
                <a href="<?php echo $root?>sub/performance.php">Performance</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/performance.php">광고 대행</a></li>
                    <li><a href="<?php echo $root?>sub/performance01.php">교육 및 컨설팅</a></li>
                    <li><a href="<?php echo $root?>sub/performance02.php">빅 데이터 분석</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $root?>sub/commerce.php">Commerce</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/commerce.php">운영 대행</a></li>
                    <li><a href="<?php echo $root?>sub/commerce01.php">교육 및 컨설팅</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $root?>sub/performance03.php">성공사례</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/performance03.php">퍼포먼스</a></li>
                    <li><a href="<?php echo $root?>sub/commerce02.php">교육 및 컨설팅</a></li>
                    <li><a href="<?php echo $root?>sub/commerce03.php">라이브 커머스</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $root?>sub/register.php">Register</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/inquire.php">대행 문의</a></li>
                    <li><a href="<?php echo $root?>sub/edu_register.php">교육 신청</a></li>
                    <li><a href="<?php echo $root?>sub/consulting_register.php">컨설팅 신청</a></li>
                </ul>
            </li>
        </ul>
    </div>
</header>
<aside>
    <h1><a href="<?php echo $root?>index.php"><img src="<?php echo $root?>img/logo01.png" alt=""></a></h1>
    <div class="close">
        <span></span>
        <span></span>
    </div>
    <ul class="gnb">
        <li>
            <a href="javascript:void(0);">What we are
            <div class="plus">
                <span></span>
                <span></span>
            </div></a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/about.php">About</a></li>
                <li><a href="<?php echo $root?>sub/man.php">Man Power</a></li>
                <li><a href="<?php echo $root?>sub/map.php">Location</a></li>
            </ul>
        </li>
        <li>
            <a href="<?php echo $root?>sub/service.php">Service</a>
        </li>
        <li>
            <a href="javascript:void(0);">Performance
            <div class="plus">
                <span></span>
                <span></span>
            </div></a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/performance.php">광고 대행</a></li>
                <li><a href="<?php echo $root?>sub/performance01.php">교육 및 컨설팅</a></li>
                <li><a href="<?php echo $root?>sub/performance02.php">빅 데이터 분석</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);">Commerce
            <div class="plus">
                <span></span>
                <span></span>
            </div></a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/commerce.php">운영 대행</a></li>
                <li><a href="<?php echo $root?>sub/commerce01.php">교육 및 컨설팅</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);">성공사례
            <div class="plus">
                <span></span>
                <span></span>
            </div></a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/performance03.php">퍼포먼스</a></li>
                <li><a href="<?php echo $root?>sub/commerce02.php">교육 및 컨설팅</a></li>
                <li><a href="<?php echo $root?>sub/commerce03.php">라이브 커머스</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);">Register
            <div class="plus">
                <span></span>
                <span></span>
            </div></a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/inquire.php">대행 문의</a></li>
                <li><a href="<?php echo $root?>sub/edu_register.php">교육 신청</a></li>
                <li><a href="<?php echo $root?>sub/consulting_register.php">컨설팅 신청</a></li>
            </ul>
        </li>
    </ul>
</aside>