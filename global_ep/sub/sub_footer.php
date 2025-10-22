<section class="common_bottom">
    <div class="inner" data-aos="fade-up">
        <form method="POST" action="counsel.php" target="cIfrm">
        <input type="hidden" name="type" value="입사지원">
        <div class="bottom_contents" data-aos="fade-up">
            <h2>GLOBAL EP 입사지원</h2>
            <div class="contents contents00">
                <h2>지원자 성별</h2>
                <div class="right">
                    <div class="label_contents01">
                        <label>
                            <input type="radio" name="gender" value="남성" required>
                            <span>남성</span>
                        </label>
                        <label>
                            <input type="radio" name="gender" value="여성" required>
                            <span>여성</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="contents contents00">
                <h2>지원분야</h2>
                <div class="right">
                    <div class="label_contents02">
                        <label>
                            <input type="radio" name="supportArea" value="이커머스 운영 매니저" required>
                            <span>이커머스 운영 매니저</span>
                        </label>
                        <label>
                            <input type="radio" name="supportArea" value="마케터" required>
                            <span>마케터</span>
                        </label>
                        <label>
                            <input type="radio" name="supportArea" value="인턴" required>
                            <span>인턴</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="contents">
                <h2>작성자명</h2>
                <input type="text" name="name" placeholder="작성자명을 입력하세요">
            </div>
            <div class="contents">
                <h2>전화번호</h2>
                <input type="tel" name="tel" placeholder="전화번호를 입력하세요">
            </div>
            <div class="contents">
                <h2>이메일주소</h2>
                <input type="email" name="email" placeholder="이메일주소를 입력하세요">
            </div>
            <div class="site">
                <a href="javascript:void(0);">[ 사이트 이용약관 보기 ]</a>
                <a href="javascript:void(0);">[ 개인정보 취급 방침 동의 ]</a>
            </div>
            <div class="pri_btn">
                <label>
                    <input type="radio" required>
                    <span>동의하고 신청하기</span>
                </label>
                <button>작성 완료</button>
                <input type="reset" id="sub_reset" style="display:none">
            </div>
        </div>
        </form>
        <div class="line"></div>
        <form method="POST" action="counsel.php" target="cIfrm">
        <input type="hidden" name="type" value="상담신청">
        <div class="bottom_contents" data-aos="fade-up">
            <h2>상담 신청</h2>
            <div class="contents">
                <h2>작성자명</h2>
                <input type="text" name="name" placeholder="작성자명을 입력하세요">
            </div>
            <div class="contents">
                <h2>전화번호</h2>
                <input type="tel" name="tel" placeholder="전화번호를 입력하세요">
            </div>
            <div class="contents">
                <h2>이메일주소</h2>
                <input type="email" name="email" placeholder="이메일주소를 입력하세요">
            </div>
            <div class="contents contents00">
                <h2>희망 서비스</h2>
                <div class="right">
                    <div class="label_contents03">
                        <label>
                            <input type="radio" name="service" value="운영대행" required>
                            <span>운영대행</span>
                        </label>
                        <label>
                            <input type="radio" name="service" value="마케팅" required>
                            <span>마케팅</span>
                        </label>
                        <label>
                            <input type="radio" name="service" value="ERP" required>
                            <span>ERP</span>
                        </label>
                        <label>
                            <input type="radio" name="service" value="배송대행" required>
                            <span>배송대행</span>
                        </label>
                        <label>
                            <input type="radio" name="service" value="컨설팅" required>
                            <span>컨설팅</span>
                        </label>
                        <label>
                            <input type="radio" name="service" value="LIVE" required>
                            <span>LIVE</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="site mt29">
                <a href="javascript:void(0);">[ 사이트 이용약관 보기 ]</a>
                <a href="javascript:void(0);">[ 개인정보 취급 방침 동의 ]</a>
            </div>
            <div class="pri_btn">
                <label>
                    <input type="radio" required>
                    <span>동의하고 신청하기</span>
                </label>
                <button>작성 완료</button>
                <input type="reset" id="subs_reset" style="display:none">
            </div>
        </div>
        </form>
    </div>
</section>
<iframe name="cIfrm" frameborder="0" style="display:none"></iframe>