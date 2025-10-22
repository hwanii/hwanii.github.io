<!DOCTYPE html>
<html lang="ko">
<?php 
@session_start();
include("simple-php-captcha.php");

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
                    <dt><a href="../sub/resume.php" class="">이력서등록</a></dt>
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
        <?php 
        $num=($_GET['num']) ? $_GET['num'] : "";
        
        $sql="SELECT * FROM request WHERE num='$num'";
        $res=mysqli_query($conn, $sql);
        $row=mysqli_fetch_array($res);
        $company=$row['company'];
        ?>
        <form method="POST" action="resume_write.php" autocomplete="off" enctype="multipart/form-data" target="ifrm">
        <input type="hidden" name="request_company" value="<?php echo ($company) ? $company : ""?>">
        <?php
        if($id){
        ?>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <?php } ?>
        <div class="inner1280">
            <div class="title">
                <h2>회원가입 및 이력서 등록</h2>
                <p>에스유 스카우트에 이력서를 등록하세요</p>
            </div>
            <div class="agree-contents">
                <h2>사이트 운영 방침 및 회원 정보 취급방침 동의</h2>
                <div class="agree-box">
                    <p>
                        (주)에스유스카우트 (이하 '회사')는 고객이 회사에 제공하는 여러 개인 정보를 매우 중요하게 취급하고 있으며 "정보통신망 이용촉진 및 정보보호"에 관한 법률을 준수하고 있습니다. 회사는 개인정보 취급방침을 통하여 고객이 제공하는 개인 정보가 어떠한 용도와 방식으로 이용하고 있는 지와 함께 개인정보 보호를 위해 어떠한 조치가 취해지고 있는지 알려 드립니다. 회사는 개인정보 취급방침을 개정하는 경우 회사가 운영하는 사이트의 공지사항을 통해 이를 게시하여 공시하거나 또는 전자우편 시스템을 통하여 공지할 것입니다.<br>
                        <br>
                        회사는 개인정보 취급방침을 통하여 고객이 제공하는 개인 정보가 어떠한 용도와 방식으로 이용하고 있는지와 함께 개인정보 보호를 위해 어떠한 조치가 취해지고 있는지 알려 드립니다.<br>
                        <br>
                        회사는 개인정보 취급방침을 개정하는 경우 회사가 운영하는 사이트의 공지사항을 통해 이를 게시하여 공시하거나 또는 전자우편 시스템을 통하여 공지할 것입니다.<br>
                        <br>
                        1.수집하는 개인정보 항목<br>
                        회사는 회원가입, 상담, 서비스 신청 등등을 위해 아래와 같은 개인정보를 수집하고 있습니다.<br>
                        <br>
                        수집항목 : 이름, 생년월일, 성별, 로그인 ID, 자택 전화번호, 자택 주소, 휴대전화 번호, 이메일 주소, 직업, 회사명, 부서, 직책, 회사 전화번호, 학력<br>
                        <br>
                    </p>
                </div>
                <div class="agree-check">
                    <input type="checkbox" id="chk1" required>
                    <label for="chk1">개인정보 취급방침에 동의함</label>
                </div>
                <?php
                if(empty($id)){
                ?>
                <div class="agree-info">
                    <h2>가입 정보</h2>
                    <div>
                        <h3>아이디</h3>
                        <input type="email" id="email" name="id" placeholder="이메일주소를 입력해주세요" oninput="id_email()">
                        <p class="already">이미 가입된 이메일 주소입니다.</p>
                        <p class="posible">가입이 가능합니다.</p>
                    </div>
                    <div>
                        <h3>비밀번호</h3>
                        <input type="password" id="pass" name="password" placeholder="비밀번호를 8글자 이상 입력해주세요" oninput="handleOnInput(this, 8)">
                        <p id="pw_chk">입력된 비밀번호가 8글자 이하입니다.</p>
                    </div>
                    <div>
                        <h3>비밀번호 확인</h3>
                        <input type="password" id="re_pass" placeholder="비밀번호를 다시 입력해주세요" oninput="check_pw()">
                        <p class="discord">비밀번호가 일치하지 않습니다.</p>
                        <p class="accord">비밀번호가 일치 합니다.</p>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="many-ck">
                <div class="content contents01">
                    <h2>개인 정보</h2>
                    <div>
                        <div>
                            <h3>이름</h3>
                            <p>
                                <input type="text" name="name" placeholder="이름을 입력해주세요">
                            </p>
                        </div>
                        <div>
                            <h3>출생연도</h3>
                            <p>
                                <input type="text" name="birthday" placeholder="출생년도를 입력해주세요">
                            </p>
                        </div>
                        <div>
                            <h3>성별</h3>
                            <p>
                                <label>
                                    <input type="radio" name="gender" value="남성" checked>
                                    <span>남성</span>
                                </label>
                                <label>
                                    <input type="radio" name="gender" value="여성">
                                    <span>여성</span>
                                </label>
                            </p>
                        </div>
                        <div>
                            <h3>휴대전화</h3>
                            <p>
                                <input type="text" name="tel" numberOnly placeholder="전화번호를 입력해주세요">
                            </p>
                        </div>
                        <div>
                            <h3>거주지역</h3>
                            <p>
                                <select name="area">
                                    <option value="">시도구군 선택</option>
                                    <option value="서울시">서울시</option>
                                    <option value="부산시">부산시</option>
                                    <option value="대구시">대구시</option>
                                    <option value="인천시">인천시</option>
                                    <option value="광주시">광주시</option>
                                    <option value="대전시">대전시</option>
                                    <option value="세종시">세종시</option>
                                    <option value="울산시">울산시</option>
                                    <option value="경기도">경기도</option>
                                    <option value="강원도">강원도</option>
                                    <option value="충청북도">충청북도</option>
                                    <option value="충청남도">충청남도</option>
                                    <option value="전라북도">전라북도</option>
                                    <option value="전라남도">전라남도</option>
                                    <option value="경상북도">경상북도</option>
                                    <option value="경상남도">경상남도</option>
                                    <option value="제주도">제주도</option>
                                </select>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="content contents02">
                    <h2>업종선택</h2>
                    <div class="many-inp">
                        <div>
                            <label>
                                <input type="checkbox" name="job[]" value="인터넷IT/게임">
                                <span>인터넷IT/게임</span>
                            </label>
                            <label>
                                <input type="checkbox" name="job[]" value="AI(인공지능)">
                                <span>AI(인공지능)</span>
                            </label>
                            <label>
                                <input type="checkbox" name="job[]" value="컨설팅">
                                <span>컨설팅</span>
                            </label>
                            <label>
                                <input type="checkbox" name="job[]" value="제약/바이오/의료기기">
                                <span>제약/바이오/의료기기</span>
                            </label>
                            <label>
                                <input type="checkbox" name="job[]" value="자동차부품/완성차">
                                <span>자동차부품/완성차</span>
                            </label>
                        </div>
                        <div>
                            <label>
                                <input type="checkbox" name="job[]" value="전기전자/컴퓨터장비">
                                <span>전기전자/컴퓨터장비</span>
                            </label>
                            <label>
                                <input type="checkbox" name="job[]" value="일반기계/금속·재료/요업">
                                <span>일반기계/금속·재료/요업</span>
                            </label>
                            <label>
                                <input type="checkbox" name="job[]" value="통신/네트워크/방송">
                                <span>통신/네트워크/방송</span>
                            </label>
                            <label>
                                <input type="checkbox" name="job[]" value="식품/농어업/광업">
                                <span>식품/농어업/광업</span>
                            </label>
                            <label>
                                <input type="checkbox" name="job[]" value="반도체/디스플레이광학">
                                <span>반도체/디스플레이광학</span>
                            </label>
                        </div>
                        <div>
                            <label>
                                <input type="checkbox" name="job[]" value="생활화학/화장품">
                                <span>생활화학/화장품</span>
                            </label>
                            <label>
                                <input type="checkbox" name="job[]" value="건설·건축·토목·플랜트">
                                <span>건설·건축·토목·플랜트</span>
                            </label>
                            <label>
                                <input type="checkbox" name="job[]" value="의류/패션/섬유">
                                <span>의류/패션/섬유</span>
                            </label>
                            <label>
                                <input type="checkbox" name="job[]" value="소비재/기타제조">
                                <span>소비재/기타제조</span>
                            </label>
                            <label>
                                <input type="checkbox" name="job[]" value="화학/에너지/환경">
                                <span>화학/에너지/환경</span>
                            </label>
                        </div>
                        <div>
                            <label>
                                <input type="checkbox" name="job[]" value="목재·제지·가구">
                                <span>목재·제지·가구</span>
                            </label>
                            <label>
                                <input type="checkbox" name="job[]" value="금융">
                                <span>금융</span>
                            </label>
                            <label>
                                <input type="checkbox" name="job[]" value="광고/서비스">
                                <span>광고/서비스</span>
                            </label>
                            <label>
                                <input type="checkbox" name="job[]" value="유통/물류/관광">
                                <span>유통/물류/관광</span>
                            </label>
                            <label>
                                <input type="checkbox" name="job[]" value="교육/학원">
                                <span>교육/학원</span>
                            </label>
                        </div>
                        <div>
                            <label>
                                <input type="checkbox" name="job[]" value="의료서비스">
                                <span>의료서비스</span>
                            </label>
                            <label>
                                <input type="checkbox" name="job[]" value="지주사/대기업">
                                <span>지주사/대기업</span>
                            </label>
                            <label>
                                <input type="checkbox" name="job[]" value="수출입/무역/종합상사">
                                <span>수출입/무역/종합상사</span>
                            </label>
                            <label>
                                <input type="checkbox" name="job[]" value="외국계기업">
                                <span>외국계기업</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="content contents02">
                    <h2>업무선택</h2>
                    <div class="many-inp">
                        <div>
                            <label>
                                <input type="checkbox" name="work[]" value="영업 회계/재무/세무/자금">
                                <span>영업 회계/재무/세무/자금</span>
                            </label>
                            <label>
                                <input type="checkbox" name="work[]" value="회계사(CPA)/세무사">
                                <span>회계사(CPA)/세무사</span>
                            </label>
                            <label>
                                <input type="checkbox" name="work[]" value="마케팅/디지털마케팅">
                                <span>마케팅/디지털마케팅</span>
                            </label>
                            <label>
                                <input type="checkbox" name="work[]" value="인사/총무">
                                <span>인사/총무</span>
                            </label>
                            <label>
                                <input type="checkbox" name="work[]" value="비서/어드민">
                                <span>비서/어드민</span>
                            </label>
                        </div>
                        <div>
                            <label>
                                <input type="checkbox" name="work[]" value="경영기획/전략기획">
                                <span>경영기획/전략기획</span>
                            </label>
                            <label>
                                <input type="checkbox" name="work[]" value="기술기획/서비스기획">
                                <span>기술기획/서비스기획</span>
                            </label>
                            <label>
                                <input type="checkbox" name="work[]" value="컨설팅">
                                <span>컨설팅</span>
                            </label>
                            <label>
                                <input type="checkbox" name="work[]" value="생산/품질(QA,QC)">
                                <span>생산/품질(QA,QC)</span>
                            </label>
                            <label>
                                <input type="checkbox" name="work[]" value="구매">
                                <span>구매</span>
                            </label>
                        </div>
                        <div>
                            <label>
                                <input type="checkbox" name="work[]" value="BM/PM/PO">
                                <span>BM/PM/PO</span>
                            </label>
                            <label>
                                <input type="checkbox" name="work[]" value="물류/SCM/포워딩">
                                <span>물류/SCM/포워딩</span>
                            </label>
                            <label>
                                <input type="checkbox" name="work[]" value="홍보/PR">
                                <span>홍보/PR</span>
                            </label>
                            <label>
                                <input type="checkbox" name="work[]" value="IR/공시/주식">
                                <span>IR/공시/주식</span>
                            </label>
                            <label>
                                <input type="checkbox" name="work[]" value="기술/엔지니어">
                                <span>기술/엔지니어</span>
                            </label>
                        </div>
                        <div>
                            <label>
                                <input type="checkbox" name="work[]" value="CEO/CFO/CTO/임원">
                                <span>CEO/CFO/CTO/임원</span>
                            </label>
                            <label>
                                <input type="checkbox" name="work[]" value="RA/CRA/임상">
                                <span>RA/CRA/임상</span>
                            </label>
                            <label>
                                <input type="checkbox" name="work[]" value="의사/간호사/약사">
                                <span>의사/간호사/약사</span>
                            </label>
                            <label>
                                <input type="checkbox" name="work[]" value="학술/마케팅PM">
                                <span>학술/마케팅PM </span>
                            </label>
                            <label>
                                <input type="checkbox" name="work[]" value="법무/변호사/변리사">
                                <span>법무/변호사/변리사</span>
                            </label>
                        </div>
                        <div>
                            <label>
                                <input type="checkbox" name="work[]" value="해외영업/무역/수출입">
                                <span>해외영업/무역/수출입</span>
                            </label>
                            <label>
                                <input type="checkbox" name="work[]" value="프론트/백엔드/풀스택">
                                <span>프론트/백엔드/풀스택</span>
                            </label>
                            <label>
                                <input type="checkbox" name="work[]" value="웹기획/웹디자인">
                                <span>웹기획/웹디자인</span>
                            </label>
                            <label>
                                <input type="checkbox" name="work[]" value="디자이너">
                                <span>디자이너</span>
                            </label>
                            <label>
                                <input type="checkbox" name="work[]" value="통번역">
                                <span>통번역</span>
                            </label>
                        </div>
                        <div>
                            <label>
                                <input type="checkbox" name="work[]" value="건축시공/인테리어">
                                <span>건축시공/인테리어</span>
                            </label>
                            <label>
                                <input type="checkbox" name="work[]" value="부동산">
                                <span>부동산</span>
                            </label>
                            <label>
                                <input type="checkbox" name="work[]" value="기타">
                                <span>기타</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="career">
                <h2>학력/경력/자격사항</h2>
                <div class="c-content c-content011">
                    <div class="left">학력사항</div>
                    <div id="grade_list">
                        <div class="right">
                            <div class="right-content">
                                <input class="input01" type="text" name="school[]" placeholder="학교명 입력">
                                <select class="select01" name="sType[]">
                                    <option>종류 선택</option>
                                    <option value="초등학교">초등학교</option>
                                    <option value="중학교">중학교</option>
                                    <option value="고등학교">고등학교</option>
                                    <option value="대학(2,3)">대학(2,3)</option>
                                    <option value="대학교">대학교</option>
                                    <option value="대학원">대학원</option>
                                </select>
                                <input class="input02" type="text" name="depart[]" placeholder="학과명 입력">
                                <select class="select02" name="graduate[]">
                                    <option>졸업 여부 선택</option>
                                    <option value="재학중">재학중</option>
                                    <option value="졸업예정">졸업예정</option>
                                    <option value="졸업">졸업</option>
                                    <option value="휴학">휴학</option>
                                    <option value="중퇴">중퇴</option>
                                </select>
                            </div>
                            <button id="grade_add" type="button" onclick="list_add('grade')">추가하기</button>
                        </div>
                    </div>
                </div>
                <div class="c-content c-content012">
                    <div class="left">경력사항</div>
                    <div id="career_list">
                        <div class="right">
                            <div class="right-content">
                                <input class="input01" type="text" name="company[]" placeholder="회사명 입력">
                                <select class="select01" name="position[]">
                                    <option>직급 선택</option>
                                    <option value="사원">사원</option>
                                    <option value="주임">주임</option>
                                    <option value="과장">과장</option>
                                    <option value="차장">차장</option>
                                    <option value="부장">부장</option>
                                    <option value="임원">임원</option>
                                </select>
                                <input class="input02" type="text" name="field[]" placeholder="업무 분야 입력">
                                <select class="select02" name="stat[]">
                                    <option>상태 선택</option>
                                    <option value="재직중">재직중</option>
                                    <option value="퇴사">퇴사</option>
                                </select>
                            </div>
                            <button id="career_add" type="button" onclick="list_add('career')">추가하기</button>
                        </div>
                    </div>
                </div>
                <div class="total-c">
                    <div>
                        <h3>총 경력</h3>
                        <select name="career">
                            <option>연차 선택</option>
                            <?php
                            for($i=1;$i<=40;$i++){
                                ?>
                            <option value="<?php echo $i?>"><?php echo $i?> 년차</option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div>
                        <h3>현재 연봉</h3>
                        <input type="text" name="salary" placeholder="현재 연봉을 숫자만 입력해주세요">
                    </div>
                </div>
                <div class="lang-contents">
                    <div class="left-in">언어능력</div>
                    <input type="text" name="lan" placeholder="언어능력을 입력해주세요">
                </div>
                <div class="detail-resume">
                    <div class="de-textarea">
                        <h2>상세 내용 작성</h2>
                        <textarea name="contents" placeholder="상세 내용을 작성해주세요"></textarea>
                    </div>
                    <div class="de-textarea">
                        <h2>자격증 작성</h2>
                        <textarea name="certificate" placeholder="보유한 자격증을 작성해주세요"></textarea>
                    </div>
                </div>
                <div class="file-upload">
                    <div>
                        <h3>증명사진</h3>
                        <p id="photo"></p>
                        <input type="file" id="pFile" name="photo" onchange="change_thumb(this, 'photo')" style="display:none">
                        <button type="button" onclick="document.querySelector('#pFile').click();">파일찾기</button>
                    </div>
                    <div>
                        <h3>이력서</h3>
                        <p id="resume"></p>
                        <input type="file" id="rFile" name="resume" onchange="change_thumb(this, 'resume')" style="display:none">
                        <button type="button" onclick="document.querySelector('#rFile').click();">파일찾기</button>
                    </div>
                </div>
                <div class="file-upload">
                    <div>
                        <h3>경력기술서 1</h3>
                        <p id="description1"></p>
                        <input type="file" id="d1File" name="description1" onchange="change_thumb(this, 'description1')" style="display:none">
                        <button type="button" onclick="document.querySelector('#d1File').click();">파일찾기</button>
                    </div>
                    <div>
                        <h3>경력기술서 2</h3>
                        <p id="description2"></p>
                        <input type="file" id="d2File" name="description2" onchange="change_thumb(this, 'description2')" style="display:none">
                        <button type="button" onclick="document.querySelector('#d2File').click();">파일찾기</button>
                    </div>
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
        </div>
        </form>
    </section>
    <iframe name="ifrm" frameborder="0" style="display:none"></iframe>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>
<script>
    $("input:text[numberOnly]").on("keyup", function() {
        $(this).val($(this).val().replace(/[^0-9\-]/g,""));
    });

    function id_email(){
        $.ajax({
            url:"id_check.php",
            type:"POST",
            data:{id:$("#email").val()},
            success:function(data){
                if(data=="true"){
                    $(".alresdy").css("display", "none");
                    $(".posible").css("display", "block");
                } else {
                    $(".posible").css("display", "none");
                    $(".alresdy").css("display", "block");
                }
            }
        })
    }

    function handleOnInput(el, minlength) {
        if(el.value.length < minlength) {
            // el.value = el.value.substr(0, maxlength);
            $("#pw_chk").css("display", "block");
        } else {
            $("#pw_chk").css("display", "none");
        }
    }

    function check_pw(){
        if($("#pass").val()!=$("#re_pass").val()){
            $(".accord").css("display", "none");
            $(".discord").css("display", "block");
        } else {
            $(".discord").css("display", "none");
            $(".accord").css("display", "block");
        }
    }

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

    function list_add(target) {
        var txt="";
        if(target=="grade"){
            $("#grade_add").remove();

            txt += '<div class="right">';
            txt += '<div class="right-content">';
            txt += '<input class="input01" type="text" name="school[]" placeholder="학교명 입력">';
            txt += '<select class="select01" name="sType[]">';
            txt += '<option>종류 선택</option>';
            txt += '<option value="초등학교">초등학교</option>';
            txt += '<option value="중학교">중학교</option>';
            txt += '<option value="고등학교">고등학교</option>';
            txt += '<option value="대학(2,3)">대학(2,3)</option>';
            txt += '<option value="대학교">대학교</option>';
            txt += '<option value="대학원">대학원</option>';
            txt += '</select>';
            txt += '<input class="input02" type="text" name="depart[]" placeholder="학과명 입력">';
            txt += '<select class="select02" name="graduate[]">';
            txt += '<option>졸업 여부 선택</option>';
            txt += '<option value="재학중">재학중</option>';
            txt += '<option value="졸업예정">졸업예정</option>';
            txt += '<option value="졸업">졸업</option>';
            txt += '<option value="휴학">휴학</option>';
            txt += '<option value="중퇴">중퇴</option>';
            txt += '</select>';
            txt += '</div>';
            txt += '<button id="grade_add" type="button" onclick="list_add(\'grade\')">추가하기</button>';
            txt += '</div>';

            $('#grade_list').append(txt);
        } else if(target=="career") {
            $("#career_add").remove();

            txt += '<div class="right">';
            txt += '<div class="right-content">';
            txt += '<input class="input01" type="text" name="company[]" placeholder="회사명 입력">';
            txt += '<select class="select01" name="position[]">';
            txt += '<option>직급 선택</option>';
            txt += '<option value="사원">사원</option>';
            txt += '<option value="주임">주임</option>';
            txt += '<option value="과장">과장</option>';
            txt += '<option value="차장">차장</option>';
            txt += '<option value="부장">부장</option>';
            txt += '<option value="임원">임원</option>';
            txt += '</select>';
            txt += '<input class="input02" type="text" name="field[]" placeholder="업무 분야 입력">';
            txt += '<select class="select02" name="stat[]">';
            txt += '<option>상태 선택</option>';
            txt += '<option value="재직중">재직중</option>';
            txt += '<option value="퇴사">퇴사</option>';
            txt += '</select>';
            txt += '</div>';
            txt += '<button id="career_add" type="button" onclick="list_add(\'career\')">추가하기</button>';
            txt += '</div>';

            $('#career_list').append(txt);
        }
    }
</script>
</html>