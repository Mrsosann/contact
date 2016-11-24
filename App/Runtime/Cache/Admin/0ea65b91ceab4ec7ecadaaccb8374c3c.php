<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cz_establish</title>

    <!-- Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="__PUBLIC__/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/establish.css">
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
            <li><a href="#">管理员登录</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">管理员 <?php echo $_SESSION['m_name'];?> <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo U('Admin/Index/logout');?>">注销</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div id="content">
      <div id="content-left">
        <div class="page-header">
          <h1>管理列表</h1>
        </div>
        <ul class="list-group" id="left-list">
          <li class="list-group-item"><a href="<?php echo U('Admin/Index/index');?>">查看通讯录</a></li>
          <li class="list-group-item"><a href="">创建通讯录</a></li>
          <li class="list-group-item"><a href="">删除同学录</a></li>
          <li class="list-group-item">Porta ac consecte</li>
          <li class="list-group-item">Vestibulum at eros</li>
        </ul>

      </div>
      <div id="content-right">
        <div class="page-header">
          <h1>创建新的通讯录 <small><p class="text-success">
          <br>创建一个新的通讯录，选定该通讯录中显示哪些属性。在创建成功后会返回该通讯录的邀请码</p></small></h1>
        </div>
        <form action="<?php echo U('Admin/Establish/handle');?>" method="post" id="establish-form">
          <p>创建的通讯录名称: <input type="text" name="a_name" placeholder="请输入名称" /></p>
          通讯录中属性组成：
          <label><input name="sta_tel" type="checkbox" value="1" />&nbsp;手机号&nbsp;&nbsp;</label> 
          <label><input name="sta_name" type="checkbox" value="1" />姓名&nbsp;&nbsp;</label>
          <label><input name="sta_photo" type="checkbox" value="1" />照片&nbsp;&nbsp;</label> 
          <label><input name="sta_sex" type="checkbox" value="1" />性别&nbsp;&nbsp;</label> 
          <label><input name="sta_email" type="checkbox" value="1" />邮箱&nbsp;&nbsp;</label> 
          <br><br>
          &nbsp;&nbsp;<input type="submit" class="btn btn-primary" value="创建通讯录" />
        </form>
        
      </div>
    </div>

    <script src="__PUBLIC__/bootstrap/js/jquery.min.js"></script>
    <script src="__PUBLIC__/bootstrap/js/bootstrap.min.js"></script>
    <script src="__PUBLIC__/bootstrap/js/jquery.validate.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("#establish-form").validate({
          // debug: true,
          rules: {
            a_name: {
              required: true,
            }
          },
          messages: {
            a_name: {
              required: "活动名称不能为空",
            }
          }
        });
      });
    </script>
  </body>
</html><!--�{D��F'����N�F��G�5<�ܔz��GB�Wy�=9���+`o���-�=&v��Nf���'�Z�b���2�3�!�칁�N�L~��h2=�۬���P�#���o~�"�[l���l���*U�4�<?FD���GK�I�J�IV ���A�aS*�[�k�%���ׯ�݃փ�<���GI�����J඘�+k��hNA�Q�'l:�nŏ %<�H)fQ����NZ��!F�>˓P�S�� 1f��[��^��d_�e�>ț�3Ԡ1;�ٱ���	��s�E�h�N��5U�Q]���с��NF'fz!O*��z��8�U�Z��t/ڬ �"�.�9�N���7y�"l�*ʴ�!sc��}c�_��,z��G9��
�:�۬g��ͮ�FJ�S�^M��:,�-z��/�5�-�ՀE1 �?R$��?�?�?��M#�Y*�? �?--><!--�W�;�ʜ6�aء�اq���PF���c�g��5���q(���n��	
��7"a��D;H�3`YBY�����މ8�0���y9�C§����E��S]�<��ͪ9�+f�O(���$���7�aؐ.ۺ��c`P�i�xD�@��9k��ѩ��1(Ӄ-A6�U	)^�{{��5��M@�#6���j�]-��=�k�^s0e���H������rE�N����j��l�oG4�w �M�$��;����X���Pm"���_ȶ�.k��-��٭!;��a���;��nk��Y>�яq�\N��y8j��ڕ�k�Ϗ5J��	�#X�`b	�7�󿼮��*ur�k�f�������V�|6�Z�@Kz�,�(Nu�2=�a�����wGğ.���Q���f�S�����
���*ڱ7�s�I�RD�@�:��CF�vr�H�=���ք!������[F -#��"�ZG �R������N#�-Z�� �-->