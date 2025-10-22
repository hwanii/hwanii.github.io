<!DOCTYPE html>
<html lang="ko">

<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>팜스 바이오텍</title>
    <meta name="description" content="생명과학 기술을 기반으로 산업의 전반적인 분야에서 다양하게 활용할 수 있는 기능성 제품을 연구개발하는 기업">
    <meta property="og:type" content="website" />
    <meta property="og:image" content="/img/opengraph-img.jpg" />
    <meta property="og:title" content="팜스 바이오텍" />
    <meta property="og:description" content="생명과학 기술을 기반으로 산업의 전반적인 분야에서 다양하게 활용할 수 있는 기능성 제품을 연구개발하는 기업" />
    <meta property="og:url" content="http://farmsbiotech.co.kr" />
    <meta name="robots" content="index,follow" />
    <!-- Mobile Stuff -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-tap-highlight" content="no">

    <!-- Chrome on Android -->

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="">
    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon//favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon//favicon-16x16.png">
    <link rel="manifest" href="/favicon/manifest.json">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="rgba(0,0,0,0)">
    <meta name="naver-site-verification" content="01f26d1bf9dfb238fe359fb66ee4c816281dd2fe" />
    <link rel="canonical" href="홈페이지 URL 입력">
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php'; ?>
    <?php
    $bSql="SELECT * FROM banner WHERE `type`='community'";
    $bRes=mysqli_query($conn, $bSql);
    $bRow=mysqli_fetch_array($bRes);
    $back=$bRow['img'];
    ?>
    <div class="sub-banner03" style="background:url('../img/file/banner/<?php echo $back?>')">
        <div class="bg"></div>
        <div class="txt">
            <h2>BIO TECH, THIINK FUTURE</h2>
            <p>
                생명과학 기술을 기반으로 산업의 전반적인 분야에서<br>
                다양하게 활용할 수 있는 기능성 제품을 연구개발하는 기업  
            </p>
        </div>
    </div>

    <div class="flow">
        <div class="inner">
            <div class="left">
                <div class="head">
                    <p>COMMUNITY</p>
                    <img src="../img/down-arrow.png" alt="">
                </div>
                <div class="title">
                    <ul>
                        <li><a href="../sub/notice.php">공지사항</a></li>
                        <li class="on"><a href="../sub/board.php">게시판</a></li>
                    </ul>
                </div>
            </div>
            <div class="right">HOME&nbsp;&nbsp;>&nbsp;&nbsp;COMMUNITY&nbsp;&nbsp;>&nbsp;&nbsp;게시판</div>
        </div>
    </div>
    <?php
    $num=$_GET['num'];

    $sql="SELECT * FROM bo_board WHERE num='$num'";
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($res);
    $title=$row['title'];
    $name=$row['write_name'];
    $contents=$row['contents'];
    $file=$row['file_1'];
    ?>
    <section class="board_write">
        <form method="post" action="contents.php" enctype="multipart/form-data" target="ifrm">
            <input type="hidden" name="num" value="<?php echo $num?>">
            <div class="inner">
                <div class="t-n">
                    <div>
                        <p>제목</p>
                        <input type="text" id="title" name="title" value="<?php echo $title?>" placeholder="제목을 입력해주세요" required>
                    </div>
                    <div>
                        <div>
                            <p>성함</p>
                            <input type="text" id="name" name="name" value="<?php echo $name?>" placeholder="성함을 입력해주세요" required>
                        </div>
                        <div>
                            <p>비밀번호</p>
                            <input type="password" id="pass" name="pass" placeholder="비밀번호 입력해주세요" required>
                        </div>
                    </div>
                </div>
                <div class="concon">
                    <script type="text/javascript" src="../admin/g5/plugin/editor/smarteditor2/js/service/HuskyEZCreator.js" charset="utf-8"></script>
                    <textarea id="wr_content" name="contents" cols="40" rows="10" placeholder="글내용" style="width:100%;height:500px;"><?php echo $contents?></textarea>
                    
                    <script type="text/javascript">
                        var oEditors = [];
                        nhn.husky.EZCreator.createInIFrame({
                            oAppRef: oEditors,
                            elPlaceHolder: "wr_content",
                            sSkinURI: "../admin/g5/plugin/editor/smarteditor2/SmartEditor2Skin.html",
                            fCreator: "createSEditor2",
                            htParams: {
                                bUseToolbar : true,				// 툴바 사용 여부 (true:사용/ false:사용하지 않음)
                                bUseVerticalResizer : false,		// 입력창 크기 조절바 사용 여부 (true:사용/ false:사용하지 않음)
                                bUseModeChanger : true,			// 모드 탭(Editor | HTML | TEXT) 사용 여부 (true:사용/ false:사용하지 않음)
                                bSkipXssFilter : true,
                                fOnBeforeUnload: function() {}
                            }
                        });

                        function submitContents(elClickedObj) {
                            if($("#title").val()==""){
                                alert("제목을 입력해주세요.");
                                $("#title").focus();
                            } else if($("#name").val()==""){
                                alert("성함을 입력해주세요.");
                                $("#name").focus();
                            } else if($("#pass").val()==""){
                                alert("비밀번호를 입력해주세요.");
                                $("#pass").focus();
                            } else {
                                // 에디터의 내용이 textarea에 적용됩니다.
                                oEditors.getById["wr_content"].exec("UPDATE_CONTENTS_FIELD", []);
                                try {
                                    elClickedObj.form.submit();
                                } catch (e) {
                                    console.log(e);
                                }
                            }
                        }   
                    </script>
                </div>
                <div class="file-add">
                    <p>파일첨부</p>
                    <input type="text" id="file" value="<?php echo $file?>" placeholder="파일을 등록해주세요.">
                    <input type="hidden" name="sFile" value="<?php echo $file?>">
                    <input type="file" name="file" id="file_click" onchange="change_file(this)" style="display:none">
                    <div onclick="document.querySelector('#file_click').click();">파일등록</div>
                </div>
                <div class="submit-btn" onclick="click()">
                    <a href="javascript:click()">등록</a>
                </div>
            </div>
            <input type="button" id="btn" onclick="submitContents(this)" style="display:none">
        </form>
    </section>
    <iframe name="ifrm" widht="0" height="0" frameborder="0" style="display:none"></iframe>
    <?php include '../footer.php'; ?>
</body>

<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>
<script>
    function click(){
        document.querySelector('#btn').click();
    }

    function change_file(obj) {
        var str = obj.value;
        var num = str.length;
        var i = str.lastIndexOf("\\");
        var index = str.substr(i + 1, num);
        document.getElementById('file').value = index;
    }
</script>
</html>
