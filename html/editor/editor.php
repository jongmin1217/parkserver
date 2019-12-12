<html lang="en"><!DOCTYPE html>
<html>
  <head>
    <title>일기작성</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <link href="/bcss/bootstrap.css" rel="stylesheet">
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.js"></script>
    <!-- include summernote css/js -->
    <link href="./summernote/summernote.css" rel="stylesheet" type="text/css">
    <script src="./summernote/summernote.js" type="text/javascript"></script>
    <style type="text/css">
    .wrap { position:relative;}
    .over { position:absolute; top:500px; left:140px;/*위에 올라가는 레이어의 포지션은 top, bottom 둘 중 하나, left, right 둘 중 하나의 속성을 선택하여 잡아준다.*/ width:100px; height:100px;  text-align:center; line-height:300px;}
    </style>


  </head>
</html>
<body>

  <div class="container">
     <form onsubmit="return writef();" action="/write.php" method="post">
      <h2 class="form-signin-heading">추억 작성</h2>


      <input type="text" name="postname" class="form-control" placeholder="post name" required autofocus>

      <h3 class="form-signin-heading">데이트 날짜</h3>
      <input type="date" id="dateday" name="dateday" value="2019-01-05"><br><br>
      <div class="wrap">
        <textarea id="summernote" name="postcontents"></textarea>

      </div>
      <div class="over">
        <img id='loading' src='/image/loading.gif' style='visibility: hidden; width:30%;'>
      </div>

      <!-- 버튼과 관련된 영역 -->
      <div align="center">
        <input type="submit" class="btn btn-lg btn-primary btn-block" value="저장" style="width:100px;">

      </div>
    </form>
  </div>
  <script>
    $(document).ready(function(){
      $('#summernote').summernote({
        placeholder:'post content',
        height : 400,
        callbacks:{

          onImageUpload: function(files, editor, welEditable) {
            for(var i = files.length -1; i>=0; i--){
              sendFile(files[i],this);
            }
          }
        }
      });
      function sendFile(file,el) {
        showLoading();
        var form_data = new FormData();
        form_data.append('file', file);
        $.ajax({
            data: form_data,
            type: "POST",
            url: "http://18.188.143.37/editor/upload.php",
            enctype:'multipart/form-data',
            cache: false,
            contentType: false,
            processData: false,
            success: function(url) {

                $(el).summernote('editor.insertImage', url);
                hideLoading();
            }
        });
      }
      function showLoading(){
      document.getElementById("loading").style = "visibility: visible";
      }
      function hideLoading(){
      document.getElementById("loading").style = "visibility: hidden";
      }
  });
  </script>

</body>
</html>
