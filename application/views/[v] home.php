<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>SITCSSA.ORG</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=$PATH_PLUGIN_BOOTSTRAP?>css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="<?=$PATH_CUSTOM_CSS?>home.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script>
      $(document).ready(function() {
        $('#sUsernameForm').submit(function(event) {
             // Stop form from submitting normally
            event.preventDefault();
            // Get some values from elements on the page:

            var $form = $( this ),
                        sUser = $form.find( "input[name='sUsername']" ).val(),
                        url = $form.attr( "action" );
            // Send the data using post
            $posting = $.post( url, { sUsername: sUser } );
            // Put the results in alert
            $posting.done(function( data ) {
              var content = jQuery.parseJSON(data);
              alert(content.result);
            });
        });
                
        });
      
      
    </script>
    
    
    
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#" style="color:white;">史蒂文斯理工学院 中国学生学者联谊会 </a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav" style="float: right; margin-right:80px;">
                <li class="active"><a href="#">主页</a></li>
                <li><a href="#" data-toggle="modal" data-target="#loginModal">登陆</a></li>
                <li><a href="#" data-toggle="modal" data-target="#registerModal">注册</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">联系我们<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">谷歌邮箱</a></li>
                    <li><a href="#">人人主页</a></li>
                    <li><a href="#"> else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?=$PATH_CUSTOM_IMG?>[pic] slides_pickUp.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>新生接机</h1>
              <p>我们利用各种资源，确保每一位新生安全抵达</p>
              <p><a class="btn btn-lg btn-success" href="#" role="button">2014秋季接机申请</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?=$PATH_CUSTOM_IMG?>[pic] slides_galaShow.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>共度佳节</h1>
              <p>中国人的节日，我们欢聚一堂</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">2014史蒂文斯春节联欢晚会</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?=$PATH_CUSTOM_IMG?>[pic] slides_cssa.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>你可以做得更好</h1>
              <p>加入CSSA，温暖传递</p>
              <p><a class="btn btn-lg btn-warning" href="#" role="button">加入CSSA</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-3 col-md-3" style="text-align: center;">
          <img class="img-circle" src="<?=$PATH_CUSTOM_IMG?>[icon] artAndSportDept.jpg" alt="Generic placeholder image">
          <h2>文体部</h2>
          <p>负责承办各类活动</p>
          <br>
          <p><a class="btn btn-default" href="#" role="button">&nbsp;&nbsp; 更多 &nbsp;&nbsp;&raquo;</a></p>
        </div>
        <!-- /.col-lg-3 -->
        <div class="col-lg-3 col-md-3" style="text-align: center;">
          <img class="img-circle" src="<?=$PATH_CUSTOM_IMG?>[icon] techDept.jpg" alt="Generic placeholder image">
          <h2>技术部</h2>
          <p>负责网站及移动应用的制作</p>
          <br>
          <p><a class="btn btn-default" href="#" role="button">&nbsp;&nbsp; 更多 &nbsp;&nbsp;&raquo;</a></p>
        </div>
        <!-- /.col-lg-3 -->
        <div class="col-lg-3 col-md-3" style="text-align: center;">
          <img class="img-circle" src="<?=$PATH_CUSTOM_IMG?>[icon] publicityDept.jpg" alt="Generic placeholder image">
          <h2>宣传部</h2>
          <p>负责学生会的宣传工作</p>
          <br>
          <p><a class="btn btn-default" href="#" role="button">&nbsp;&nbsp; 更多 &nbsp;&nbsp;&raquo;</a></p>
        </div>
        <!-- /.col-lg-3 -->
                <!-- /.col-lg-4 -->
        <div class="col-lg-3 col-md-3" style="text-align: center;">
          <img class="img-circle" src="<?=$PATH_CUSTOM_IMG?>[icon] socialAffairDept.jpg" alt="Generic placeholder image">
          <h2>外联部</h2>
          <p>负责与其他组织维持良好关系</p>
          <br>
          <p><a class="btn btn-default" href="#" role="button">&nbsp;&nbsp; 更多 &nbsp;&nbsp;&raquo;</a></p>
        </div>
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">我们的坚持<br><span class="text-muted">只为一句承诺</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="<?=$PATH_CUSTOM_IMG?>[pic] showcase_pickUp.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="<?=$PATH_CUSTOM_IMG?>[pic] showcase_creative.jpg" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">我们的成绩<br><span class="text-muted">来自不懈追求</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">我们的未来<br><span class="text-muted">掌握在你的手中</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive"  src="<?=$PATH_CUSTOM_IMG?>[pic] showcase_talent.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">回顶端</a></p>
        <p>&copy; 2014 Stevens Institute of Technology &middot; Chinese Students and Scholars Association &middot; Technology Department &middot; Beichen Li</p>
        <p>Framework of Bootstrap &middot; CodeIgniter</p>
      </footer>

    </div><!-- /.container -->

    <!-- Bootstrap Modal    (Login Modal)
    ===================================================-->
   <!-- Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:300px;">
      <div class="modal-content">
        <div class="modal-header" style="height:40px;">
          用户登陆
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
              <form class="form-signin" role="form">
                <input type="user" class="form-control" placeholder="用户名" required autofocus>
                  <br>
                <input id="psw" type="password" class="form-control" placeholder="密码" required>
                  <br>
                <label class="checkbox">
                  <input type="checkbox" value="remember-me"> 记住我
                  <br>
                </label>
                <button class="btn btn-lg btn-primary btn-block" data-loading-text="正在验证..." type="submit" onclick="hashPassword();">登陆</button>
              </form>
        </div>
        <div class="modal-footer">
            <a></a>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal --> 

  <!-- Bootstrap Modal （ Register Modal）
  ===================================================-->
   <!-- Modal -->
  <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:300px;">
      <div class="modal-content">
        <div class="modal-header" style="height:40px;">
          新用户注册
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
              <form id="sUsernameForm" action="<?=$PATH_SITE_URL?>register/sendConfirEmail" method="POST" class="form-signin" role="form">
                <br>
                <div class="row">
                  <div class="col-md-7">
                    <input id="sUsername" name="sUsername" type="text" class="form-control" placeholder="史蒂文斯用户名" required autofocus>
                  </div>
                  <div class="col-md-5">
                    <h5> @stevens.edu </h5>
                  </div>
                </div>
                  <br><br>
                <button class="btn btn-lg btn-primary btn-block" data-loading-text="正在验证..." type="submit">发送验证邮件</button>
              </form>
        </div>
        <div class="modal-footer">
            <a id="result"></a>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal --> 
  

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="<?=$PATH_PLUGIN_BOOTSTRAP?>js/bootstrap.min.js"></script>
    <script src="<?=$PATH_PLUGIN_BOOTSTRAP?>js/docs.min.js"></script>
    <script src="<?=$PATH_CUSTOM_JS?>sha1.js"></script>
    
    <!-- Custom JavaScript Functions
    ================================================== -->
    <script>
      function hashPassword()
      {
          var pswInputBox = document.getElementById("psw");
          var psw = pswInputBox.value;
          pswInputBox.value = CryptoJS.SHA1(psw);
      }
    </script>
  </body>
</html>