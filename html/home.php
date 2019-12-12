<?php
$servername = "localhost";
$username = "syj40886";
$password = "whdals.1217";
$database = "yami";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
mysqli_query("set names utf8");

$coment_check = "SELECT * from postinfo ORDER BY num DESC";
$coment_res = mysqli_query($conn,$coment_check);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>대야미와 긔야미의 일기장</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/album.css" rel="stylesheet">
  </head>
  <body>
  <header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">야미루!!</h4>
          <p class="text-muted">여기는 우리들의 추억들을 담을 수 있는 일기장이에요. 야미루에게 항상 정말 특별하고 유니크한 선물을 해주고 싶었는데 문득 아이디어가 떠올라서 만들어 봤어요. 많이 부족하겠지만 우리들 추억 많이 남기고 앞으로도 이쁜사랑하자 내가 많이 사랑해♥</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <ul class="list-unstyled">
            <button onclick="location.href='./editor/editor.php'" type="button" class="btn btn-sm btn-outline-secondary" style="color:white; width:250pt;">추억남기기</button>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>긔야미와 대야미의 추억들</strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main role="main">


  <div class="album py-5 bg-light">
    <div class="container">




      <div class="row">

        <?php
        $page = ($_GET['page'])?$_GET['page']:1;
        $list = 5;

          $s_point = ($page-1) * $list;

          $sql = "SELECT * from postinfo ORDER BY num DESC LIMIT $s_point,$list";
          $result = mysqli_query($conn,$sql);

          $qwe=mysqli_num_rows($result);

          for($i=0;$i<$qwe;$i++){
            $fetch = mysqli_fetch_array($result);

        ?>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="<?php  echo "$fetch[5]"; ?>" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></img>            <div class="card-body">
              <p class="card-text"><?php echo "$fetch[0]"; ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <form action="post.php" method="get">
                    <button type="submit" class="btn btn-sm btn-outline-secondary">추억보러가기</button>
                    <input type="hidden" name="num" value="<?php echo $fetch[4]; ?>">
                  </form>
                </div>
                <small class="text-muted"><?php echo "$fetch[2]"; ?></small>
              </div>
            </div>
          </div>
        </div>
        <?php
          }
         ?>
      </div>

      <div class="container">

      <?php


      $block = 10;

      $coment_rows_num = mysqli_num_rows($coment_res);
      $pageNum = ceil($coment_rows_num/$list); // 총 페이지
      $blockNum = ceil($pageNum/$block); // 총 블록
      $nowBlock = ceil($page/$block);

      $s_page = ($nowBlock * $block) - 9;
      if ($s_page <= 1) {
          $s_page = 1;
      }
      $e_page = $nowBlock*$block;
      if ($pageNum <= $e_page) {
          $e_page = $pageNum;
      }
      ?>

      <?php
      for ($p=$s_page; $p<=$e_page; $p++) {
      ?>
        <input type="button" class="btn btn-default" onclick="location.href='<?=$PHP_SELP?>?num=<?=$postnum?>&&page=<?=$p?>'" value="<?=$p?>">
      <?php
      }
      ?>
      <div>
      <?php
      if($coment_rows_num!=0){
        if($nowBlock!=1){
          ?><input type="button" class="btn btn-default" onclick="location.href='<?=$PHP_SELP?>?page=<?=$s_page-1?>'" value="이전"><?php
        }
        if($nowBlock!=$blockNum){
          ?><input type="button" class="btn btn-default" onclick="location.href='<?=$PHP_SELP?>?page=<?=$e_page+1?>'"value="다음"><?php
        }
      }
      ?>
      </div>

    </div>





    </div>
  </div>

</main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>
