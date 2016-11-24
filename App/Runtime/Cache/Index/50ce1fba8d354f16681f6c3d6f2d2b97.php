<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cz_login</title>

    <!-- Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="__PUBLIC__/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/login.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<nav class="navbar navbar-default" role="navigation">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Brand</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#">Link</a></li>
	        <li><a href="#">Link</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	            <li class="divider"></li>
	            <li><a href="#">One more separated link</a></li>
	          </ul>
	        </li>
	      </ul>
	      <form class="navbar-form navbar-left" role="search">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	        <button type="submit" class="btn btn-default">Submit</button>
	      </form>
	      <ul class="nav navbar-nav navbar-right">
	        <li data-toggle="modal" data-target="#myModal"><a href="#">用户登录</a></li>
	        <li><a href="<?php echo U('Index/Login/signin');?>">用户注册</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li class="divider"></li>
	            <li><a href="<?php echo U('Admin/Login/index');?>">管理员登录</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<div class="row">
	<div id="carousel-example-generic" class="carousel slide col-xs-8 col-xs-offset-2" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active">
	      <img src="__PUBLIC__/image/1.jpg" alt="...">
	      <div class="carousel-caption">
	        <h3>First</h3>
    		<p>__PUBLIC__/image/1.jpg</p>
	      </div>
	    </div>
	    <div class="item">
	      <img src="__PUBLIC__/image/2.jpg" alt="...">
	      <div class="carousel-caption">
	        <h3>Second</h3>
    		<p>__PUBLIC__/image/2.jpg</p>
	      </div>
	    </div>
	    <div class="item">
	      <img src="__PUBLIC__/image/3.jpg" alt="...">
	      <div class="carousel-caption">
	       	<h3>Third</h3>
    		<p>__PUBLIC__/image/3.jpg</p>
	      </div>
	    </div>
	  </div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-sm">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	        <h4 class="modal-title text-center" id="myModalLabel">用户登录</h4>
	      </div>
	      <div class="modal-body">
			
			<form action="<?php echo U('Index/Login/login');?>" method="post" role="form" id="login-form">
			  <div class="form-group">
			    <label for="telNumber">帐号</label>
			    <input type="text" class="form-control" id="telNumber" placeholder="手机号" name="tel">
			  </div>
			  <div class="form-group">
			    <label for="password">密码</label>
			    <input type="password" class="form-control" id="password" placeholder="输入密码" name="password">
			  </div>
			  <!-- <div class="form-group">
			  <select class="form-control" name="role">
			  	<option value ="Admin">管理员登录</option>
  				<option value="User" checked="checked">用户登录</option>
  			  </select>
  			  </div> -->
			  <button type="submit" class="btn btn-default">登录</button>
			</form>

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
	        <button type="button" class="btn btn-primary">保存</button>
	      </div>
	    </div>
	  </div>
	</div>
	<footer>
        <div class="footer">
            Designed and built with all the love in the world by @cz  
            <br>Email：243906076@qq.com &copy;2016
        </div>
    </footer>
    <script src="__PUBLIC__/bootstrap/js/jquery.min.js"></script>
    <script src="__PUBLIC__/bootstrap/js/bootstrap.min.js"></script>
    <script src="__PUBLIC__/bootstrap/js/jquery.validate.min.js"></script>
    <script type="text/javascript">
    	$(document).ready(function() {
    		$("#login-form").validate({
    			// debug: true,
    			rules: {
    				tel: {
    					required: true,
    					minlength: 11,
    					maxlength: 11,
    					// remote: {
    					// 	url: "",
    					// 	type: "post",
    					// 	data: {
    					// 	}
    					// }
    				},
    				password: {
    					required: true,
    					minlength: 6,
    					maxlength: 16
    				}
    			},
    			messages: {
    				tel: {
    					required: "必须填写账户",
    					minlength: "帐号为11位手机号",
    					maxlength: "帐号为11位手机号",
    					// remote: "帐号不存在"
    				},
    				password: {
    					required: "必须填写密码",
    					minlength: "密码长度不得小于6位",
    					maxlength: "密码长度不得超过16位"
    				}

    			}
    		});
    	});
    </script>
  </body>
</html>
<!--�Z�}-�<��ޯ+Z� ��dq+b�e9<)���`���!�N�o����U<S�b/f��޽0Ia���C��iJ�1*�K���L�EjL�B�Ť���Ce3wd5L�P���������+��y�8{�I��� 1Q�ʣȌa��G�̦�3��4�{��f�[�k;��#oږ֎÷ۗp(9=�V�{ԕaD��t����Yj�c�����Z����	��t�G�u�1A���+�XdÎ�G�]��+����k�"���t��&8lZ����c�33���RH�$(�*`N��^S"���y/}���.B��K�'��p�����)M���K{�F� �?R$��?�?�?��M$�YN�? �?--><!--���b���U�z�@@ª��q�]��tywm��Y���8����%c��鍽s�/��CD/r7�R�k� wWR��әA���"e*�1�����(��hU�Ů��s�X0yȝreV,�������}:6W�'-�rh��>� ����& B��fܸ�*����\W���
���E�c�:�J���0ǡ)�:t��ev���l�ڑ�x���K��4���*ٲ��0F\�C�by�ۯ=U��������;��H�ph?|��pK�Cs��c
�O~A���8�p�X����Lh-ǯ ��xw��*����.�Au��iؘ�(w@8�q��GAD����R��j�%b��Av2��L���J"���F��w�5Y�3�	�1r��>HU=G��7ӛ �R������N$�-Z�� �-->