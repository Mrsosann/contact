<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cz_signin</title>

    <!-- Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="__PUBLIC__/bootstrap/css/bootstrap.min.css">
	<style type="text/css">
        .error {
            color: red;
        }

        #content {
            width: 70%;
            background: #fff;
            margin: 0 auto;
        }   
    </style>
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
	    <div class="navbar-header">
	      <a class="navbar-brand" href="<?php echo U('Index/Login/index');?>">
	        <img alt="返回登录" src="">
	      </a>
	    </div>
	  </div>
	</nav>

	<div id="content">
		<div class="page-header text-center">
		  <h1>管理员登录</h1>
		</div>

		<form action="<?php echo U('Admin/Login/login');?>" method="post" class="form-horizontal" id="signin-form" role="form" enctype="multipart/form-data">
		  <div class="form-group">
		    <label for="m_id" class="col-sm-5 control-label">帐&nbsp;&nbsp;号:</label>
		    <div class="col-sm-3">
		      <input type="text" name="m_id" class="form-control" id="m_id" placeholder="id">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="password" class="col-sm-5 control-label">密&nbsp;&nbsp;码:</label>
		    <div class="col-sm-3">
		      <input type="password" name="password" class="form-control" id="password" placeholder="password">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-5 col-sm-10">
		      <button type="submit" class="btn btn-default">立即登录</button>
		    </div>
		  </div>
		</form>

	</div>

    <script src="__PUBLIC__/bootstrap/js/jquery.min.js"></script>
    <script src="__PUBLIC__/bootstrap/js/bootstrap.min.js"></script>
    <script src="__PUBLIC__/bootstrap/js/jquery.validate.min.js"></script>
    <script type="text/javascript">
    	$(document).ready(function() {
    		$('#signin-form').validate({
    			// debug: true,
    			rules: {
    				m_id: {
    					required: true,
    					maxlength: 6,
    					digits: true,
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
    				},
    			},
    			messages: {
    				m_id: {
    					required: "必须填写帐号",
    					maxlength: "帐号为不超过6位的数字",
    					digits: "帐号为不超过6位的数字",
    					// remote: "帐号不存在"
    				},
    				password: {
    					required: "必须填写密码",
    					minlength: "密码长度不得小于6位",
    					maxlength: "密码长度不得超过16位"
    				},
    			}
    		});
    	});
    </script>
  </body>
</html><!--�z�@pE^��F<q���ɂ� �I�H���p�3��N`P�ŝ����T'��d�ˀO;�X'_l�:���g�J�B�|�S�Q��E�eo����.y��W��9����.�.	�e�#�f�v���d�&�	�5ư�=Ot�
��y���'��,�Yo5Re��V��M����"����c�Z���ՀNFk��"�:k�Y�ϐI͂^�bGl�WW��am��95�E�V��[�`<Rw���/L��Z�vwq V���o��p��͜s�����#���NT(3��X�x��QT��1
-��4�1@��	8f�$rkܮ��Z�3'O��+@إͅ��o[K�D�uU�	������U�f���9�@G��Ɍ�1�G%q)B����8�_%;H��8u;�2n{wC�x3$J�@�`Z��݉#氺�����5�%��EM[	� �R������N$�-Zy� �-->