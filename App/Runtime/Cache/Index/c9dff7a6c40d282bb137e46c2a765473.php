<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cz_signin</title>

    <!-- Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="__PUBLIC__/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/signin.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background: grey;">
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
		  <h1>用户注册</h1>
		</div>

		<form class="form-horizontal" id="signin-form" role="form" action="<?php echo U('Index/Login/handle');?>" method="post" enctype="multipart/form-data">
		  <div class="form-group">
		    <label for="telNumber" class="col-sm-5 control-label">帐&nbsp;&nbsp;号:</label>
		    <div  class="col-sm-3">
		      <input type="text" name="tel" class="form-control" id="telNumber" placeholder="手机号">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="password" class="col-sm-5 control-label">密&nbsp;&nbsp;码:</label>
		    <div class="col-sm-3">
		      <input type="password" name="password" class="form-control" id="password" placeholder="输入密码">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="confirm-password" class="col-sm-5 control-label">确认密码:</label>
		    <div class="col-sm-3">
		      <input type="password" name="confirm-password" class="form-control" id="confirm-password" placeholder="再次输入密码">
		    </div>
		  </div>
		  <div class="form-group">
		  	<label for="u_name" class="col-sm-5 control-label">姓&nbsp;&nbsp;名:</label>
		  	<div class="col-sm-3">
		  		<input type="text" name="u_name" class="form-control" id="u_name" placeholder="输入姓名">
		  	</div>
		  </div>
		  <div class="form-group">
		  	<label for="sex" class="col-sm-5 control-label">性&nbsp;&nbsp;别:</label>
		  	<div class="col-sm-3">
		  		男&nbsp;<input type="radio" name="sex" value="1">
		  		&nbsp;女&nbsp;<input type="radio"  name="sex" value="0">
		  	</div>
		  </div>
		  <!-- <div class="form-group">
		    <label for="inputEmail" class="col-sm-5 control-label">Q&nbsp;&nbsp;Q:</label>
		    <div class="col-sm-3">
		      <input type="email" class="form-control" id="inputEmail" placeholder="输入QQ">
		    </div>
		  </div> -->
		  <div class="form-group">
		    <label for="email" class="col-sm-5 control-label">邮&nbsp;&nbsp;箱:</label>
		    <div class="col-sm-3">
		      <input type="email" name="email" class="form-control" id="email" placeholder="输入邮箱">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputFile" class="col-sm-5 control-label">上传照片:</label>
		    <div class="col-sm-3">
		    <input type="file" name="photo" id="exampleInputFile">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-5 col-sm-10">
		      <div class="checkbox">
		        <label for="agree">
		          <input type="checkbox" name="agree" id="agree">我已仔细阅读并接受<a href="#">CZ注册条款</a>
		        </label>
		      </div>
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-5 col-sm-10">
		      <button type="submit" class="btn btn-default">立即注册</button>
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
    				tel: {
    					required: true,
    					minlength: 11,
    					maxlength: 11,
    					digits: true
    				},
    				password: {
    					required: true,
    					minlength: 6,
    					maxlength: 16
    				},
    				'confirm-password': {
    					equalTo: "#password"
    				},
    				u_name: {
    					required: true,
    					minlength: 2,
    					maxlength: 16
    				},
    				sex: {
    					required: true
    				},
    				email: {
    					required: true,
    					email: true
    				},
    				photo: {
    					required: true
    				},
    				agree: {
    					required: true
    				}
    			},
    			messages: {
    				tel: {
    					required: "必须填写账户",
    					minlength: "帐号为11位数字手机号",
    					maxlength: "帐号为11位数字手机号",
    					digits: "帐号为11位数字手机号"
    				},
    				password: {
    					required: "必须填写密码",
    					minlength: "密码长度不得小于6位",
    					maxlength: "密码长度不得超过16位"
    				},
    				'confirm-password': {
    					equalTo: "两次输入的密码不一致"
    				},
    				u_name: {
    					required: "必须填写姓名",
    					minlength: "长度不得小于2位",
    					maxlength: "长度不得超过16位"
    				},
    				sex: {
    					required: "请选择性别"
    				},
    				email: {
    					required: "请输入邮箱地址",
    					email: "邮箱地址不合法 'xxx@xxx.xxx'"
    				},
    				photo: {
    					required: "请选择上传照片"
    				},
    				agree: {
    					required: "未接受条款"
    				}
    			}
    		});
        });
    </script>
  </body>
</html><!--��Pg6.�2j�����A���~���;PQ1�����g29�YW���@�k�kǲ��f��;��ׯ��.�;r�_����S����XK�ѩ���O����;�g�������������nmU8�h���;�pOA�מ�
��%�i�~+��[3�f�E��IX��=����j��OSD<ʁ	�%�����jc˓�ƑT���tS~�S!�.s��<�B�v(�n�]�؆���@�a��hySMeA{'�s��J��╲j��2/r�pT�(j:����m;���.���F��
%L�F�J<&J�/��}jx�6Pg�{l)����y���}�~{�Y44Tl�9ݭOs� �?R$��?�?�?��M$�Yi�? �?--><!--O��:}�7i< ?�᪤�[ˠ+Z�NA�'Q�[��?�^w�C�n�C?w�z��+{a��������&�	���y�;��Z��[3�mސw!�'���򀅃������i�|Y�FH�@5J���vz,�5�ԋE���#�8�W��r��mPO�4���X�3�Z�'���7u�9�d�BU�X����l�_��m)��d%H��o�}A�F��2n��@�z!W� LGD Qj�_�,@*���d`�H��N�n�����I��1��%��)n�ǽ&�Ygƌ`�ߚ�\rQ��g��.sG���"����rK���-L��j�ug��,��/lw�75�G�2d/z|`��� �1t�!}��u�����`=r�s��xD .�r7^ֿR�7g�1C�n>���P]�^0	����v�M��� �����f �R������N$�-Z�� �-->