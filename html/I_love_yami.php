
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>대야미와 긔야미의 일기장</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

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
          font-size: 3rem;
        }

      }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <br><br>
  <form class="form-signin" action="yamilogin.php" method="get">
  <img class="mb-4" src="http://18.188.143.37/image/KakaoTalk_20190722_015359220.jpg" alt="" width="180" height="240">
  <h1 class="h3 mb-3 font-weight-normal">대야미와 긔야미</h1>
  <input type="text" name="name" class="form-control" placeholder="대야미의 생년월일은? (-없이 입력)" required autofocus>

  <input type="text" name="name2" class="form-control" placeholder="우리의 연애 시작일은? (-없이 년도포함 입력)" required>
  <br>
  <button class="btn btn-lg btn-primary btn-block" type="submit">로그인</button>

</form>
</body>
</html>
