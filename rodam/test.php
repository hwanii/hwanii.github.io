<!-- https://www.youtube.com/watch?v=L118QN3Hqb4 -->

<?php
include 'connect.php';


$sql="SELECT * FROM counting";
$res=mysqli_query($conn, $sql);
$row=mysqli_fetch_array($res);
$since=str_split($row['since']);
$date=$row['date'];
$cumulative=str_split($row['cumulative']);
$satisfaction=str_split($row['satisfaction']);

print_r($since);
echo "<br>";
$ary=array();
for($i=0;$i<count($since);$i++){
    $n=$since[$i];
    $txt= $n;
    for($j=1;$j<=9;$j++){
        $nn=$n-$j;

        if($nn<0){
            $nn=$nn+10;
        }
        $txt.= " ".$nn;
    }
    $txt.= " ".$n;
    array_push($ary, $txt);
    print_r($ary);
    echo "<br>";
}

// function get_youtube_thumbnail($url)
// {
//     $video_id = explode("?v=", $url);
//     $video_id = explode("&", $video_id[1]);
//     $video_id = $video_id[0];

//     $thumbnail = "http://img.youtube.com/vi/{$video_id}/maxresdefault.jpg";

//     return $thumbnail;
// }
// $img= get_youtube_thumbnail("https://www.youtube.com/watch?v=L118QN3Hqb4");
?>

<!-- <img src="<?php echo $img?>" alt=""> -->
<!-- 
'0' : 480 x 360
'//img.youtube.com/vi/'.$youtubeId.'/0.jpg';

'1' : 120 x 90 (영상 시작 썸네일)
'//img.youtube.com/vi/'.$youtubeId.'/1.jpg';

'2' : 120 x 90 (영상 중간 썸네일)
'//img.youtube.com/vi/'.$youtubeId.'/2.jpg';

'3' : 120 x 90 (영상 마지막 썸네일)
'//img.youtube.com/vi/'.$youtubeId.'/3.jpg';

'hqdefault' : 480 x 360 (High Quality)
'//img.youtube.com/vi/'.$youtubeId.'/hqdefault.jpg';

'mqdefault' : 320 x 180 (Medium Quality)
'//img.youtube.com/vi/'.$youtubeId.'/mqdefault.jpg';

'sddefault' : 640 x 480 (Standard Definition)
'//img.youtube.com/vi/'.$youtubeId.'/sddefault.jpg';

'maxresdefault' : 1920 x 1080(Maximum Resolution)
'//img.youtube.com/vi/'.$youtubeId.'/maxresdefault.jpg';

'default' : 120 x 90 (Normal Quality)
'//img.youtube.com/vi/'.$youtubeId.'/default.jpg'; 

-->
<!--1. 카카오 SDK 로드-->
<script src="https://developers.kakao.com/sdk/js/kakao.js"></script>
<script src="https://t1.kakaocdn.net/kakao_js_sdk/2.5.0/kakao.min.js"
  integrity="sha384-kYPsUbBPlktXsY6/oNHSUDZoTX6+YI51f63jCPEIPFP09ttByAdxd2mEjKuhdqn4" crossorigin="anonymous"></script>

<!-- <script type="text/javascript" src="/js/apikey.js"></script> -->
<script>
    const KaApiKey = "46505b177fd5d4ea935723d9f2d30387";
    //2. 카카오 초기화
    Kakao.init(KaApiKey);
    Kakao.isInitialized();
    //3. 카카오로그인 코드 확인
    function loginWithKakao() {
        Kakao.Auth.login({
        success: function (authObj) {
            console.log(authObj); //access토큰 값
            Kakao.Auth.setAccessToken(authObj.access_token); //access 토큰 값 저장
            getInfo();
        },
        fail: function (err) {
            console.log(err);
        },
        });
    }
    //4. 엑세스 토큰을 발급받고, 아래 함수를 호출시켜 사용자 정보 받아옴.
    function getInfo() {
        Kakao.API.request({
        url: "/v2/user/me",
        success: function (res) {
            console.log(res);
            var id = res.id;
            var profile_nickname = res.kakao_account.profile.nickname;
            localStorage.setItem("nickname", profile_nickname);
            localStorage.setItem("id", id);
            console.log(profile_nickname);
            console.log(id);
        },
        fail: function (error) {
            alert("카카오 로그인 실패" + JSON.stringify(error));
        },
        });
    }

    //5.로그아웃 기능 - 카카오 서버에 접속하는 액세스 토큰을 만료 시킨다.
    function kakaoLogOut() {
        if (!Kakao.Auth.getAccessToken()) {
        alert("로그인을 먼저 하세요.");
        return;
        }
        Kakao.Auth.logout(function () {
        alert("로그아웃" + Kakao.Auth.getAccessToken());
        });
    }
</script>
<a id="kakao-login-btn" href="javascript:loginWithKakao()">
  <img src="https://k.kakaocdn.net/14/dn/btroDszwNrM/I6efHub1SN5KCJqLm1Ovx1/o.jpg" width="222"
    alt="카카오 로그인 버튼" />
</a>