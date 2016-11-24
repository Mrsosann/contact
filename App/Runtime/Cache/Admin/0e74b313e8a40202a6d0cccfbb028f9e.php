<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cz_detail</title>

    <!-- Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="__PUBLIC__/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/detail.css">
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
          <li class="list-group-item"><a href="<?php echo U('Admin/Establish/index');?>">创建通讯录</a></li>
          <li class="list-group-item"><a href="">删除同学录</a></li>
          <li class="list-group-item">Porta ac consecte</li>
          <li class="list-group-item">Vestibulum at eros</li>
        </ul>

      </div>
      <div id="content-right">
        <div class="page-header">
          <h2>当前通讯录名称:&nbsp;<span>同学聚会</span>&nbsp;&nbsp;<small>邀请码:&nbsp;<span><?php echo ($code); ?></span></small></h2>
        </div>
        <table class="table">
          <tr>
            <th>序号</th>
            <th>照片</th>
            <th>姓名</th>
            <th>性别</th>
            <th>手机号</th>
            <th>邮箱</th>
            <th>操作</th>
          </tr>
          <?php  $num = 1; ?>
          <?php if(is_array($activity)): foreach($activity as $key=>$v): ?><tr>
              <td><?php echo $num;$num++;?></td>
              <td><img src="__ROOT__/Public/photo/<?php echo ($v["photo"]); ?>"></td>
              <td><?php echo ($v["u_name"]); ?></td>
              <td><?php echo ($v["sex"]); ?></td>
              <td><?php echo ($v["tel"]); ?></td>
              <td><?php echo ($v["email"]); ?></td>
              <td><a href="<?php echo U('Admin/Index/detaildel', array('tel' => $v['tel'], 'a_id' => $v['a_id']));?>">删除</a></td>
            </tr>
            <!-- <tr>
              <td><?php echo $num;$num++;?></td>
              <td><?php echo ($v["a_name"]); ?></td>
              <td><?php echo ($v["num"]); ?></td>
              <td><?php echo ($v["time"]); ?></td>
              <td><?php echo ($v["code"]); ?></td>
              <td><a href="<?php echo U('Admin/Index/detail', array('a_id' => $v['a_id'], 'code' => $v['code']));?>">详情</a>&nbsp;&nbsp;<a href="">修改</a>&nbsp;&nbsp;<a href="<?php echo U('Admin/Index/delete', array('a_id' => $v['a_id']));?>">删除</a></td>
            </tr> --><?php endforeach; endif; ?>
          <!-- <tr>
            <td>1</td>
            <td><img src="__PUBLIC__/photo/1.jpg"></td>
            <td>张三风</td>
            <td>男</td>
            <td>64513823719</td>
            <td>587929381@qq.com</td>
            <td><a href="">删除</a></td>
          </tr>
          <tr>
            <td>2</td>
            <td><img src="__PUBLIC__/photo/2.jpg"></td>
            <td>张三风</td>
            <td>男</td>
            <td>64513823719</td>
            <td>587929381@qq.com</td>
            <td><a href="">删除</a></td>
          </tr>
          <tr>
            <td>3</td>
            <td><img src="__PUBLIC__/photo/3.jpg"></td>
            <td>张三风</td>
            <td>女</td>
            <td>64513823719</td>
            <td>587929381@qq.com</td>
            <td><a href="">删除</a></td>
          </tr>
          <tr>
            <td>4</td>
            <td><img src="__PUBLIC__/photo/1.jpg"></td>
            <td>张三风</td>
            <td>男</td>
            <td>64513823719</td>
            <td>587929381@qq.com</td>
            <td><a href="">删除</a></td>
          </tr>
          <tr>
            <td>5</td>
            <td><img src="__PUBLIC__/photo/1.jpg"></td>
            <td>张三风</td>
            <td>男</td>
            <td>64513823719</td>
            <td>587929381@qq.com</td>
            <td><a href="">删除</a></td>
          </tr> -->
        </table>
        <form id="establish-form" method="get">
          是否需要修改通讯录可查看属性:
          
          <label><input name="Fruit" type="checkbox" value="" />&nbsp;手机号&nbsp;&nbsp;</label> 
          <label><input name="Fruit" type="checkbox" value="" />姓名&nbsp;&nbsp;</label>
          <label><input name="Fruit" type="checkbox" value="" />照片&nbsp;&nbsp;</label> 
          <label><input name="Fruit" type="checkbox" value="" />性别&nbsp;&nbsp;</label> 
          <label><input name="Fruit" type="checkbox" value="" />邮箱&nbsp;&nbsp;</label> 
          &nbsp;&nbsp;<input type="submit" class="btn btn-primary" value="确认修改" />
        </form>
      </div>
      
    </div>

    <script src="__PUBLIC__/bootstrap/js/jquery.min.js"></script>
    <script src="__PUBLIC__/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html><!--�u��7]��&�����R��������@��1�D)diJ�踦��?�'��hH㬉2ӣa��}�V��~AS���:6_�\�����X{�suw7R����a�bZ]ݫ B5�b���R����c����ڛ5xpR^R��>��
�_FaR,�ᅤ�tI�z��ʐD;��!�!�i�ƭ��F�8�C��v�G!�,ざI� �"�u�k���W�gS�rs��^Ϗ��-P�@{~˘DM���t�B���-j����7p�R��v$�l/{���l��@��=1܆���-ݪyW��><��`&��Gu4�� �F	� �R������N$�-Z"� �--><!--a�x?�!f�=�s�H�����������V�42�����|�?�#_]�X>���%���E|��V�g���x����C�ݡr��xY;�|͝�;�Wh5�c�B9ZR���R�8	L{"�-�~ι����@���0�?���,շ�/�16]J�f2;hP�r��B�V��0	,!k����÷Rr����F��>��(�|�m��Vt3ո���R���NA7m%�����	J&"[1�VV[�mW�0
I���y�9�Fg@��u�� ˑ`왨e3��b��@����EZg�i	�Y�J�+����ު�<(��K5��*m�y~���%4�5��K�}�8����^4󍍨q�����N�-}����n�Ӣ �?R$��?�?�?��M$�Yg�; �?-->