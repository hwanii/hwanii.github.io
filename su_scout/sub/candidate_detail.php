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
            $num=$_GET['num'];

            $sql="SELECT * FROM candidates WHERE num='$num'";
            $res=mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($res);
            $write_date=$row['write_date'];
            $name=$row['name'];
            $tel=$row['tel'];
            $email=$row['email'];
            $company=$row['company'];
            $gender=$row['gender'];
            $rank=$row['rank'];

            $age=$row['age'];

            $date=$row['cDate'];

            $type=$row['type'];
            $process= (strpos($row['process'], ",")!=false) ? str_replace(",", " > ", $row['process']) : $row['process'];

            $classa=$row['classa'];
            $language=$row['language'];

            $salary=$row['salary'];
            $area=$row['area'];

            $qualification=$row['qualification'];
            $work=$row['work'];
            $more=$row['more'];

            $file1=$row['file1'];
            $file2=$row['file2'];
            ?>
            <div class="candi-title">
                <h2><?php echo $company?> 채용 공고입니다.</h2>
                <div>
                    <p>등록일자</p>
                    <p><?php echo date("Y. m. d", strtotime($write_date))?></p>
                </div>
            </div>
            <div class="candi-basic">
                <h2>기본 등록 정보</h2>
                <div class="basic-contents">
                    <div>
                        <h3>기업구분</h3>
                        <p><?php echo $type?></p>
                    </div>
                    <div>
                        <h3>진행 절차</h3>
                        <p><?php echo $process?></p>
                    </div>
                    <div>
                        <h3>성별</h3>
                        <p><?php echo $gender?></p>
                    </div>
                    <div>
                        <h3>우대조건1</h3>
                        <p><?php echo ($classa) ? $classa : "-"?></p>
                    </div>
                    <div>
                        <h3>직급</h3>
                        <p><?php echo $rank?></p>
                    </div>
                    <div>
                        <h3>우대조건2</h3>
                        <p><?php echo ($language) ? $language : "-"?></p>
                    </div>
                    <div>
                        <h3>연령</h3>
                        <p><?php echo $age ?></p>
                    </div>
                    <div>
                        <h3>마감일자</h3>
                        <p><?php echo $date?></p>
                    </div>
                    <div>
                        <h3>근무지</h3>
                        <p><?php echo ($area) ? $area : "-"?></p>
                    </div>
                </div>
            </div>
            <div class="detail-contents">
                <h2>상세 정보</h2>
                <div>
                    <h3>자격 요건 안내</h3>
                    <textarea readonly placeholder="자격 요건을 상세히 작성해주세요"><?php echo $qualification?></textarea>
                </div>
                <div>
                    <h3>담당 업무 안내</h3>
                    <textarea readonly placeholder="담당 업무를 상세히 작성해주세요"><?php echo $work?></textarea>
                </div>
                <div>
                    <h3>추가 정보 안내</h3>
                    <textarea readonly placeholder="담당 업무를 상세히 작성해주세요"><?php echo $more?></textarea>
                </div>
            </div>
            <div class="candi-basic">
                <h2>담당컨설턴트</h2>
                <div class="basic-contents">
                    <div>
                        <h3>이름</h3>
                        <p><?php echo $name?></p>
                    </div>
                    <div>
                        <h3>전화</h3>
                        <p><?php echo $tel?></p>
                    </div>
                    <div style="width: 100%;">
                        <h3>이메일</h3>
                        <p><?php echo $email?></p>
                    </div>
                </div>
            </div>
            <div class="contents-submit">
                <button onclick="location.href='resume.php?num=<?php echo $num?>'">온라인 이력서 등록</button>
                <a href="candidate_information.php">목록</a>
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
