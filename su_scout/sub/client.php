<!DOCTYPE html>
<html lang="ko">
<?php 
@session_start();
include "simple-php-captcha.php";

$_SESSION['captcha'] = simple_php_captcha();
?>
<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>
<body>
    <?php include '../header.php'; ?>
    <section class="sub-banner sub02">
        <h2>FOR CLIENTS</h2>
    </section>
    <div class="menu-flow">
        <div class="inner">
            <a href="../index.php"><img src="../img/icon-home.png" alt=""></a>
            <div class="select">
                <dl>
                    <dt><a href="../sub/client.php" class="">FOR CLIENTS</a></dt>
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
                    <dt><a href="../sub/client.php" class="">채용의뢰</a></dt>
                    <dd>
                        <ul>
                            <li><a href="../sub/client.php" class="">채용의뢰</a></li>
                        </ul>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
    <section class="candidate">
        <div class="inner1280">
            <div class="title">
                <h2>채용의뢰서 작성</h2>
                <p>에스유 스카우트에 채용정보를 등록하세요</p>
            </div>
            <form method="POST" action="request.php" autocomplete="off" enctype="multipart/form-data" target="ifrm">
            <div class="cl-info">
                <h2>기본 정보</h2>
                <div>
                    <div>
                        <h3>의뢰자명</h3>
                        <input type="text" name="name" placeholder="이름을 입력해주세요">
                    </div>
                    <div>
                        <h3>휴대전화번호</h3>
                        <input type="text" name="tel" placeholder="전화번호를 입력해주세요" numberOnly>
                    </div>
                    <div>
                        <h3>이메일주소</h3>
                        <input type="email" name="email" placeholder="이메일주소를 입력해주세요">
                    </div>
                </div>
            </div>
            <div class="cl-re-info">
                <h2>채용 의뢰 정보</h2>
                <div class="content">
                    <div class="left">
                        <div>
                            <h3>의뢰기업명</h3>
                            <input type="text" name="company" placeholder="기업명을 입력해주세요">
                        </div>
                        <div>
                            <h3>성별</h3>
                            <select name="gender" required>
                                <option value="">성별을 선택해주세요</option>
                                <option value="성별무관">성별무관</option>
                                <option value="남성">남성</option>
                                <option value="여성">여성</option>
                            </select>
                        </div>
                        <div>
                            <h3>직급</h3>
                            <div class="label6">
                                <label>
                                    <input type="checkbox" name="rank[]" value="사원-대리">
                                    <span>사원-대리</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="rank[]" value="과장-차장">
                                    <span>과장-차장</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="rank[]" value="차장-부장">
                                    <span>차장-부장</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="rank[]" value="협의">
                                    <span>협의</span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <h3>연령</h3>
                            <div class="date02">
                                <input type="text" id="sa" name="start_age" placeholder="연령을 입력해주세요">
                                <label>
                                    <input type="checkbox" id="age" name="age" onclick="chk_age()" value="연령무관">
                                    <span>연령무관</span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <h3>마감일자</h3>
                            <div class="date02">
                                <input type="text" id="sd" name="start_date" class="date0202" placeholder="마감일자를 입력해주세요">
                                <label>
                                    <input type="checkbox" id="close" name="close" onclick="chk_date()" value="채용시 마감">
                                    <span>채용시 마감</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div>
                            <h3>기업구분선택</h3>
                            <select name="type" required>
                                <option value="">기업 구분을 선택해주세요</option>
                                <option value="대기업">대기업</option>
                                <option value="중견기업">중견기업</option>
                                <option value="중소기업">중소기업</option>
                                <option value="벤처기업">벤처기업</option>
                                <option value="외국계기업">외국계기업</option>
                                <option value="공공기관">공공기관</option>
                                <option value="기타">기타</option>
                            </select>
                        </div>
                        <div>
                            <h3>진행 절차</h3>
                            <div class="label7">
                                <label>
                                    <input type="checkbox" name="process[]" value="서류전형">
                                    <span>서류전형</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="process[]" value="1차면접">
                                    <span>1차면접</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="process[]" value="2차면접">
                                    <span>2차면접</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="process[]" value="3차면접">
                                    <span>3차면접</span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <h3>우대조건1</h3>
                            <div class="label3">
                                <p>연관 전공</p>
                                <div>
                                    <label>
                                        <input type="checkbox" name="classa[]" value="학사">
                                        <span>학사</span>
                                    </label>
                                    <label>
                                        <input type="checkbox" name="classa[]" value="석사">
                                        <span>석사</span>
                                    </label>
                                    <label>
                                        <input type="checkbox" name="classa[]" value="박사 이상 수료">
                                        <span>박사 이상 수료</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h3>우대조건2</h3>
                            <div class="label6">
                                <label>
                                    <input type="checkbox" name="language[]" value="영어">
                                    <span>영어</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="language[]" value="일본어">
                                    <span>일본어</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="language[]" value="중국어">
                                    <span>중국어</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="language[]" value="베트남어">
                                    <span>베트남어</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="language[]" value="아랍어">
                                    <span>아랍어</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="language[]" value="기타언어">
                                    <span>기타언어</span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <h3>근무지</h3>
                            <input type="text" name="area" placeholder="근무지를 입력해주세요">
                        </div>
                    </div>
                </div>
            </div>
            <div class="detail-resume">
                <div class="de-textarea">
                    <h2>자격 요건 안내</h2>
                    <textarea name="qualification" placeholder="자격 요건을 상세히 작성해주세요"></textarea>
                </div>
                <div class="de-textarea">
                    <h2>담당 업무 안내</h2>
                    <textarea name="work" placeholder="담당 업무 안내를 상세히 작성해주세요"></textarea>
                </div>
                <div class="de-textarea">
                    <h2>추가 정보 안내</h2>
                    <textarea name="more" placeholder="추가 정보 안내를 상세히 작성해주세요"></textarea>
                </div>
            </div>
            <div class="file-upload">
                <div>
                    <h3>참고 파일 1</h3>
                    <p id="sFile1"></p>
                    <input type="file" id="file1" name="file1" onchange="change_thumb(this, 'sFile1')" style="display:none" accept="image/*">
                    <button type="button" onclick="document.querySelector('#file1').click();">파일찾기</button>
                </div>
                <div>
                    <h3>참고 파일 2</h3>
                    <p id="sFile2"></p>
                    <input type="file" id="file2" name="file2" onchange="change_thumb(this, 'sFile2')" style="display:none" accept="image/*">
                    <button type="button" onclick="document.querySelector('#file2').click();">파일찾기</button>
                </div>
            </div>
            <div class="auto-no">
                <div>
                    <h3>자동 등록 방지</h3>
                    <p id="auto-no"><img src="<?php echo $_SESSION['captcha']['image_src']?>" alt="captcha" title="captcha" id="capt_img" style="width:100%;height:50px;"/></p>
                    <img src="../img/refresh.png" class="captcha_reload" alt="reload" onclick="reload()">
                    <input type="text" name="code">
                </div>
                <div>
                    <span></span>
                    <p>자동등록방지 문자를 순서대로 입력하세요.</p>
                </div>
            </div>
            <div class="contents-submit">
                <button>작성 완료하기</button>
            </div>
            </form>
            <iframe name="ifrm" frameborder="0" style="display:none"></iframe>
        </div>
    </section>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>
<script>
    function chk_age(){
        if($("#age").is(":checked")){
            $("#sa").val("");
            $("#sa").attr("readonly", true);
        } else {
            $("#sa").removeAttr("readonly");
        }
    }
    
    function chk_date(){
        if($("#close").is(":checked")){
            $("#sd").val("");
            $("#sd").attr("readonly", true);
        } else {
            $("#sd").removeAttr("readonly");
        }
    }

    $("input:text[numberOnly]").on("keyup", function() {
        $(this).val($(this).val().replace(/[^0-9\-]/g,""));
    });

    function change_thumb(obj, target) {
        var str = obj.value;
        var num = str.length;
        var i = str.lastIndexOf("\\");
        var index = str.substr(i + 1, num);
        document.getElementById(target).innerText = index;
    }

    function reload(){
        $('#auto-no').empty();
        $('#auto-no').load(location.href + ' #capt_img');
    }
</script>
</html>
