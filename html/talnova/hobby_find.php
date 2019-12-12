<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "talnova";

$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");

$adventurousness = 0; // 모험성
$artistic_interests = 0;
$emotionality = 0;
$imagination = 0;
$intellect = 0;
$liberalism = 0;
$achievement_striving = 0;
$cautiousness = 0;
$dutifulness = 0;
$self_discipline = 0;
$self_efficacy = 0;
$activity_level = 0;
$excitement_seeking = 0;
$friendliness = 0;
$gregariousness = 0;
$altruism = 0;


$bicycle=0;
$badminton=0;
$bowling=0;
$tennis=0;
$ski=0;
$golf=0;
$climbing=0;
$health=0;
$yoga=0;
$ping=0;
$billiards=0;
$scuba=0;
$swimming=0;
$soccer=0;
$basketball=0;
$baseball=0;
$volleyball=0;
$football=0;
$fencing=0;
$boxing=0;
$taekwondo=0;
$judo=0;
$kendo=0;
$jitsu=0;
$skate=0;
$archery=0;
$korean=0;
$form=0;
$chinese=0;
$japanese=0;
$baking=0;
$car=0;
$bike=0;
$musical=0;
$show=0;
$movie=0;
$exhibition=0;
$acting=0;
$heritage=0;
$walk=0;
$camping=0;
$travel1=0;
$travel2=0;
$fishing=0;
$paragliding=0;
$sing=0;
$guitar=0;
$drum=0;
$piano=0;
$violin=0;
$flute=0;
$band=0;
$lyrics=0;
$indie=0;
$rap=0;
$classic=0;
$jazz=0;
$rock=0;
$electronic=0;
$board=0;
$brains=0;
$online=0;
$magic=0;
$book=0;
$write=0;
$make=0;
$dance=0;
$volunteer=0;
$picture=0;
$sport=0;
$highnum=0;


function set_number($hobby){
  //echo "$hobby\n";
  global $bicycle,$bicycle,$badminton,$bowling,$tennis,$ski,$golf,$climbing,$health,$yoga,
  $ping,$billiards,$scuba,$swimming,$soccer,$basketball,$baseball,$volleyball,$football,
  $fencing,$boxing,$taekwondo,$judo,$kendo,$jitsu,$skate,$archery,$korean,$form,$chinese,
  $japanese,$baking,$car,$bike,$musical,$show,$movie,$exhibition,$acting,
  $heritage,$walk,$camping,$travel1,$travel2,$fishing,$paragliding,$sing,
  $guitar,$drum,$piano,$violin,$flute,$band,$lyrics,$indie,$rap,$classic,
  $jazz,$rock,$electronic,$board,$brains,$online,$magic,$book,$write,
  $make,$dance,$volunteer,$picture,$sport,$highnum;
  if($hobby=="자전거") $bicycle++; if($bicycle>$highnum) $highnum=$bicycle;
  if($hobby=="배드민턴") $badminton++;  if($badminton>$highnum) $highnum=$badminton;
  if($hobby=="볼링") $bowling++; if($bowling>$highnum) $highnum=$bowling;
  if($hobby=="테니스") $tennis++; if($tennis>$highnum) $highnum=$tennis;
  if($hobby=="스키/보드") $ski++; if($ski>$highnum) $highnum=$ski;
  if($hobby=="골프") $golf++; if($golf>$highnum) $highnum=$golf;
  if($hobby=="클라이밍") $climbing++; if($climbing>$highnum) $highnum=$climbing;
  if($hobby=="헬스") $health++; if($health>$highnum) $highnum=$health;
  if($hobby=="요가/필라테스") $yoga++; if($yoga>$highnum) $highnum=$yoga;
  if($hobby=="탁구") $ping++; if($ping>$highnum) $highnum=$ping;
  if($hobby=="당구") $billiards++; if($billiards>$highnum) $highnum=$billiards;
  if($hobby=="스쿠버다이빙") $scuba++; if($scuba>$highnum) $highnum=$scuba;
  if($hobby=="수영") $swimming++; if($swimming>$highnum) $highnum=$swimming;
  if($hobby=="축구/풋살") $soccer++; if($soccer>$highnum) $highnum=$soccer;
  if($hobby=="농구") $basketball++; if($basketball>$highnum) $highnum=$basketball;
  if($hobby=="야구") $baseball++; if($baseball>$highnum) $highnum=$baseball;
  if($hobby=="배구") $volleyball++; if($volleyball>$highnum) $highnum=$volleyball;
  if($hobby=="족구") $football++; if($football>$highnum) $highnum=$football;
  if($hobby=="펜싱") $fencing++; if($fencing>$highnum) $highnum=$fencing;
  if($hobby=="복싱") $boxing++; if($boxing>$highnum) $highnum=$boxing;
  if($hobby=="태권도") $taekwondo++; if($taekwondo>$highnum) $highnum=$taekwondo;
  if($hobby=="유도") $judo++; if($judo>$highnum) $highnum=$judo;
  if($hobby=="검도") $kendo++; if($kendo>$highnum) $highnum=$kendo;
  if($hobby=="주짓수") $jitsu++; if($jitsu>$highnum) $highnum=$jitsu;
  if($hobby=="스케이트") $skate++; if($skate>$highnum) $highnum=$skate;
  if($hobby=="양궁") $archery++; if($archery>$highnum) $highnum=$archery;
  if($hobby=="한식") $korean++; if($korean>$highnum) $highnum=$korean;
  if($hobby=="양식") $form++; if($form>$highnum) $highnum=$form;
  if($hobby=="중식") $chinese++; if($chinese>$highnum) $highnum=$chinese;
  if($hobby=="일식") $japanese++; if($japanese>$highnum) $highnum=$japanese;
  if($hobby=="베이킹/제과") $baking++; if($baking>$highnum) $highnum=$baking;
  if($hobby=="차") $car++; if($car>$highnum) $highnum=$car;
  if($hobby=="오토바이") $bike++; if($bike>$highnum) $highnum=$bike;
  if($hobby=="뮤지컬/오페라관람") $musical++; if($musical>$highnum) $highnum=$musical;
  if($hobby=="공연/연극관람") $show++; if($show>$highnum) $highnum=$show;
  if($hobby=="영화") $movie++; if($movie>$highnum) $highnum=$movie;
  if($hobby=="전시회") $exhibition++; if($exhibition>$highnum) $highnum=$exhibition;
  if($hobby=="연기/공연제작") $acting++; if($acting>$highnum) $highnum=$acting;
  if($hobby=="문화재탐방") $heritage++; if($heritage>$highnum) $highnum=$heritage;
  if($hobby=="산책") $walk++; if($walk>$highnum) $highnum=$walk;
  if($hobby=="캠핑") $camping++; if($camping>$highnum) $highnum=$camping;
  if($hobby=="국내여행") $travel1++; if($travel1>$highnum) $highnum=$travel1;
  if($hobby=="해외여행") $travel2++; if($travel2>$highnum) $highnum=$travel2;
  if($hobby=="낚시") $fishing++; if($fishing>$highnum) $highnum=$fishing;
  if($hobby=="패러글라이딩") $paragliding++; if($paragliding>$highnum) $highnum=$paragliding;
  if($hobby=="노래/보컬") $sing++; if($sing>$highnum) $highnum=$sing;
  if($hobby=="기타/베이스") $guitar++; if($guitar>$highnum) $highnum=$guitar;
  if($hobby=="드럼") $drum++; if($drum>$highnum) $highnum=$drum;
  if($hobby=="피아노") $piano++; if($piano>$highnum) $highnum=$piano;
  if($hobby=="바이올린") $violin++; if($violin>$highnum) $highnum=$violin;
  if($hobby=="플룻") $flute++; if($flute>$highnum) $highnum=$flute;
  if($hobby=="밴드/합주") $band++; if($band>$highnum) $highnum=$band;
  if($hobby=="작사/작곡") $lyrics++; if($lyrics>$highnum) $highnum=$lyrics;
  if($hobby=="인디음악") $indie++; if($indie>$highnum) $highnum=$indie;
  if($hobby=="랩/힙합/DJ") $rap++; if($rap>$highnum) $highnum=$rap;
  if($hobby=="클래식") $classic++; if($classic>$highnum) $highnum=$classic;
  if($hobby=="재즈") $jazz++; if($jazz>$highnum) $highnum=$jazz;
  if($hobby=="락/메탈") $rock++; if($rock>$highnum) $highnum=$rock;
  if($hobby=="일레트로닉") $electronic++; if($electronic>$highnum) $highnum=$electronic;
  if($hobby=="보드게임") $board++; if($board>$highnum) $highnum=$board;
  if($hobby=="두뇌심리게임") $brains++; if($brains>$highnum) $highnum=$brains;
  if($hobby=="온라인게임") $online++; if($online>$highnum) $highnum=$online;
  if($hobby=="마술") $magic++; if($magic>$highnum) $highnum=$magic;
  if($hobby=="독서") $book++; if($book>$highnum) $highnum=$book;
  if($hobby=="작문/글쓰기") $writer++; if($writer>$highnum) $highnum=$writer;
  if($hobby=="공예/만들기") $make++; if($make>$highnum) $highnum=$make;
  if($hobby=="댄스/무용") $dance++; if($dance>$highnum) $highnum=$dance;
  if($hobby=="봉사활동") $volunteer++; if($volunteer>$highnum) $highnum=$volunteer;
  if($hobby=="사진/영상") $picture++; if($picture>$highnum) $highnum=$picture;
  if($hobby=="스포츠관람") $sport++; if($sport>$highnum) $highnum=$sport;
}


$hobby = $_POST['hobby'];
$user = $_POST['user'];
$str = explode("  ", $hobby);
$cnt = count($str);
if($hobby==""){
  echo "none";
}else{
  for ($i=0; $i<$cnt; $i++) {
    if ($str[$i]=="모험성") {
      $adventurousness = 1;
      $fsql = "select hobby from personality where adventurousness='$adventurousness'";
      $fres = mysqli_query($conn,$fsql);
      $fnum = mysqli_num_rows($fres);
      for($j=0; $j<$fnum; $j++){
        $frow = mysqli_fetch_array($fres);
        set_number($frow[0]);
        // echo "$frow[0]\n";
      }
    }else if ($str[$i]=="예술적 흥미") {
      $artistic_interests = 1;
      $fsql = "select hobby from personality where artistic_interests='$artistic_interests'";
      $fres = mysqli_query($conn,$fsql);
      $fnum = mysqli_num_rows($fres);
      for($j=0; $j<$fnum; $j++){
        $frow = mysqli_fetch_array($fres);
        set_number($frow[0]);
        // echo "$frow[0]\n";
      }

    }else if ($str[$i]=="정서성") {
      $emotionality = 1;
      $fsql = "select hobby from personality where emotionality='$emotionality'";
      $fres = mysqli_query($conn,$fsql);
      $fnum = mysqli_num_rows($fres);
      for($j=0; $j<$fnum; $j++){
        $frow = mysqli_fetch_array($fres);
        set_number($frow[0]);
        // echo "$frow[0]\n";
      }
    }else if ($str[$i]=="상상력") {
      $imagination = 1;
      $fsql = "select hobby from personality where imagination='$imagination'";
      $fres = mysqli_query($conn,$fsql);
      $fnum = mysqli_num_rows($fres);
      for($j=0; $j<$fnum; $j++){
        $frow = mysqli_fetch_array($fres);
        set_number($frow[0]);
        // echo "$frow[0]\n";
      }
    }else if ($str[$i]=="지력") {
      $intellect = 1;
      $fsql = "select hobby from personality where intellect='$intellect'";
      $fres = mysqli_query($conn,$fsql);
      $fnum = mysqli_num_rows($fres);
      for($j=0; $j<$fnum; $j++){
        $frow = mysqli_fetch_array($fres);
        set_number($frow[0]);
        // echo "$frow[0]\n";
      }
    }else if ($str[$i]=="자유") {
      $liberalism = 1;
      $fsql = "select hobby from personality where liberalism='$liberalism'";
      $fres = mysqli_query($conn,$fsql);
      $fnum = mysqli_num_rows($fres);
      for($j=0; $j<$fnum; $j++){
        $frow = mysqli_fetch_array($fres);
        set_number($frow[0]);
        // echo "$frow[0]\n";
      }
    }else if ($str[$i]=="성취 추구") {
      $achievement_striving = 1;
      $fsql = "select hobby from personality where achievement_striving='$achievement_striving'";
      $fres = mysqli_query($conn,$fsql);
      $fnum = mysqli_num_rows($fres);
      for($j=0; $j<$fnum; $j++){
        $frow = mysqli_fetch_array($fres);
        set_number($frow[0]);
        // echo "$frow[0]\n";
      }
    }else if ($str[$i]=="신중함") {
      $cautiousness = 1;
      $fsql = "select hobby from personality where cautiousness='$cautiousness'";
      $fres = mysqli_query($conn,$fsql);
      $fnum = mysqli_num_rows($fres);
      for($j=0; $j<$fnum; $j++){
        $frow = mysqli_fetch_array($fres);
        set_number($frow[0]);
        // echo "$frow[0]\n";
      }
    }else if ($str[$i]=="순종성") {
      $dutifulness = 1;
      $fsql = "select hobby from personality where dutifulness='$dutifulness'";
      $fres = mysqli_query($conn,$fsql);
      $fnum = mysqli_num_rows($fres);
      for($j=0; $j<$fnum; $j++){
        $frow = mysqli_fetch_array($fres);
        set_number($frow[0]);
        // echo "$frow[0]\n";
      }
    }else if ($str[$i]=="자기 훈련") {
      $self_discipline = 1;
      $fsql = "select hobby from personality where self_discipline='$self_discipline'";
      $fres = mysqli_query($conn,$fsql);
      $fnum = mysqli_num_rows($fres);
      for($j=0; $j<$fnum; $j++){
        $frow = mysqli_fetch_array($fres);
        set_number($frow[0]);
        // echo "$frow[0]\n";
      }
    }else if ($str[$i]=="자기 효능감") {
      $self_efficacy = 1;
      $fsql = "select hobby from personality where self_efficacy='$self_efficacy'";
      $fres = mysqli_query($conn,$fsql);
      $fnum = mysqli_num_rows($fres);
      for($j=0; $j<$fnum; $j++){
        $frow = mysqli_fetch_array($fres);
        set_number($frow[0]);
        // echo "$frow[0]\n";
      }
    }else if ($str[$i]=="활동 레벨") {
      $activity_level = 1;
      $fsql = "select hobby from personality where activity_level='$activity_level'";
      $fres = mysqli_query($conn,$fsql);
      $fnum = mysqli_num_rows($fres);
      for($j=0; $j<$fnum; $j++){
        $frow = mysqli_fetch_array($fres);
        set_number($frow[0]);
        // echo "$frow[0]\n";
      }
    }else if ($str[$i]=="자극 탐색") {
      $excitement_seeking = 1;
      $fsql = "select hobby from personality where excitement_seeking='$excitement_seeking'";
      $fres = mysqli_query($conn,$fsql);
      $fnum = mysqli_num_rows($fres);
      for($j=0; $j<$fnum; $j++){
        $frow = mysqli_fetch_array($fres);
        set_number($frow[0]);
        // echo "$frow[0]\n";
      }
    }else if ($str[$i]=="외향적") {
      $friendliness = 1;
      $fsql = "select hobby from personality where friendliness='$friendliness'";
      $fres = mysqli_query($conn,$fsql);
      $fnum = mysqli_num_rows($fres);
      for($j=0; $j<$fnum; $j++){
        $frow = mysqli_fetch_array($fres);
        set_number($frow[0]);
        // echo "$frow[0]\n";
      }
    }else if ($str[$i]=="사교적") {
      $gregariousness = 1;
      $fsql = "select hobby from personality where gregariousness='$gregariousness'";
      $fres = mysqli_query($conn,$fsql);
      $fnum = mysqli_num_rows($fres);
      for($j=0; $j<$fnum; $j++){
        $frow = mysqli_fetch_array($fres);
        set_number($frow[0]);
        // echo "$frow[0]\n";
      }
    }else if ($str[$i]=="이타성") {
      $altruism = 1;
      $fsql = "select hobby from personality where altruism='$altruism'";
      $fres = mysqli_query($conn,$fsql);
      $fnum = mysqli_num_rows($fres);
      for($j=0; $j<$fnum; $j++){
        $frow = mysqli_fetch_array($fres);
        set_number($frow[0]);
        // echo "$frow[0]\n";
      }
    }else {
      $nope = $str[$i];
      //echo $nope;echo "\n";
    }
  }

  if($bicycle>=$highnum) echo "자전거  ";
  if($badminton>=$highnum) echo "배드민턴  ";
  if($bowling>=$highnum) echo "볼링  ";
  if($tennis>=$highnum) echo "테니스  ";
  if($ski>=$highnum) echo "스키/보드  ";
  if($golf>=$highnum) echo "골프  ";
  if($climbing>=$highnum) echo "클라이밍  ";
  if($health>=$highnum) echo "헬스  ";
  if($yoga>=$highnum) echo "요가/필라테스  ";
  if($ping>=$highnum) echo "탁구  ";
  if($billiards>=$highnum) echo "당구  ";
  if($scuba>=$highnum) echo "스쿠버다이빙  ";
  if($swimming>=$highnum) echo "수영  ";
  if($soccer>=$highnum) echo "축구/풋살  ";
  if($basketball>=$highnum) echo "농구  ";
  if($baseball>=$highnum) echo "야구  ";
  if($volleyball>=$highnum) echo "배구  ";
  if($football>=$highnum) echo "족구  ";
  if($fencing>=$highnum) echo "펜싱  ";
  if($boxing>=$highnum) echo "복싱  ";
  if($taekwondo>=$highnum) echo "태권도  ";
  if($judo>=$highnum) echo "유도  ";
  if($kendo>=$highnum) echo "검도  ";
  if($jitsu>=$highnum) echo "주짓수  ";
  if($skate>=$highnum) echo "스케이트  ";
  if($archery>=$highnum) echo "양궁  ";
  if($korean>=$highnum) echo "한식  ";
  if($form>=$highnum) echo "양식  ";
  if($chinese>=$highnum) echo "중식  ";
  if($japanese>=$highnum) echo "일식  ";
  if($baking>=$highnum) echo "베이킹/제과  ";
  if($car>=$highnum) echo "차  ";
  if($bike>=$highnum) echo "오토바이  ";
  if($musical>=$highnum) echo "뮤지컬/오페라관람  ";
  if($show>=$highnum) echo "공연/연극관람  ";
  if($movie>=$highnum) echo "영화  ";
  if($exhibition>=$highnum) echo "전시회  ";
  if($acting>=$highnum) echo "연기/공연제작  ";
  if($heritage>=$highnum) echo "문화재탐방  ";
  if($walk>=$highnum) echo "산책  ";
  if($camping>=$highnum) echo "캠핑  ";
  if($travel1>=$highnum) echo "국내여행  ";
  if($travel2>=$highnum) echo "해외여행  ";
  if($fishing>=$highnum) echo "낚시  ";
  if($paragliding>=$highnum) echo "패러글라이딩  ";
  if($sing>=$highnum) echo "노래/보컬  ";
  if($guitar>=$highnum) echo "기타/베이스  ";
  if($drum>=$highnum) echo "드럼  ";
  if($piano>=$highnum) echo "피아노  ";
  if($violin>=$highnum) echo "바이올린  ";
  if($flute>=$highnum) echo "플룻  ";
  if($band>=$highnum) echo "밴드/합주  ";
  if($lyrics>=$highnum) echo "작사/작곡  ";
  if($indie>=$highnum) echo "인디음악  ";
  if($rap>=$highnum) echo "랩/힙합/DJ  ";
  if($classic>=$highnum) echo "클래식  ";
  if($jazz>=$highnum) echo "재즈  ";
  if($rock>=$highnum) echo "락/메탈  ";
  if($electronic>=$highnum) echo "일렉트로닉  ";
  if($board>=$highnum) echo "보드게임  ";
  if($brains>=$highnum) echo "두뇌심리게임  ";
  if($online>=$highnum) echo "온라인게임  ";
  if($magic>=$highnum) echo "마술  ";
  if($book>=$highnum) echo "독서  ";
  if($write>=$highnum) echo "작문/글쓰기  ";
  if($make>=$highnum) echo "공예/만들기  ";
  if($dance>=$highnum) echo "댄스/무용  ";
  if($volunteer>=$highnum) echo "봉사활동  ";
  if($picture>=$highnum) echo "사진/영상  ";
  if($sport>=$highnum) echo "스포츠관람  ";

}




// $sql = "select hobby from personality where adventurousness='$adventurousness' or artistic_interests='$artistic_interests' or emotionality='$emotionality' or
// imagination ='$imagination' or intellect ='$intellect' or liberalism='$liberalism' or achievement_striving='$achievement_striving' or cautiousness='$cautiousness' or
// dutifulness='$dutifulness' or self_discipline='$self_discipline' or self_efficacy='$self_efficacy' or activity_level='$activity_level' or excitement_seeking = '$excitement_seeking'
// or friendliness='$friendliness' or gregariousness='$gregariousness' or altruism = '$altruism'";
// $sql = "select hobby from personality where $test";
// $res = mysqli_query($conn,$sql);
// $num = mysqli_num_rows($res);
//
// $arr=[];
// for($i=0; $i<$num; $i++){
// $row = mysqli_fetch_array($res);
//
//   array_push($arr,
//     array("hobby"=>$row[0]
//   ));
//
//
// }

//echo json_encode($arr);
// header('Content-Type: application/json; charset=utf8');
// $json = json_encode(array("infor"=>$arr), JSON_PRETTY_PRINT+JSON_UNESCAPED_UNICODE);
// echo $json;


// $sql = "select * from hobbylist where bike,badminton,bowling,tenins,ski,golf,climing,diet,health
// ,yoga,pingpong,running,swim,surfing,soccer,basketball,baseball,voellyball,
// riding,pensing,boxsing,taekwondo,kendo,jiujitsu,skate,football,archery = '$hobby'";
//
// $res = mysqli_query($conn,$sql);
// $num=mysqli_num_rows($res);
//
// $arr=[];
// for($i=0; $i<$num; $i++){
//   $row = mysqli_fetch_array($res);
//
//   array_push($arr,
//     array("user"=>$row[1],
//     "message"=>$row[2]
//   ));
//
//
// }
//
// //echo json_encode($arr);
// header('Content-Type: application/json; charset=utf8');
// $json = json_encode(array("infor"=>$arr), JSON_PRETTY_PRINT+JSON_UNESCAPED_UNICODE);
// echo $json;







?>
