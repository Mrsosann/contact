<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cz_userDetail</title>

    <!-- Bootstrap 核心 CSS 文件 -->
  <link rel="stylesheet" href="__PUBLIC__/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/user.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background-image: url('__PUBLIC__/image/bg1.jpg');">
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
              <input type="text" class="form-control" placeholder="请输入邀请码">
            </div>
            <button type="submit" class="btn btn-default">搜索通讯录</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            
            <li><a href="#">个人主页</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="__PUBLIC__/photo/<?php echo $_SESSION['photo'];?>" class="img-circle" style="width: 18px;height: 18px">&nbsp;<?php echo $_SESSION['u_name'];?><span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#"><?php echo $_SESSION['u_name'];?></a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo U('Index/Index/logout');?>">注销</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div id="content">
      <div id="content-left">
        <div class="page-header">
          <h1>个人主页</h1>
        </div>
        <ul class="list-group" id="left-list">
          <li class="list-group-item"><a href="<?php echo U('Index/Index/index');?>">查看通讯录</a></li>
          <li class="list-group-item"><a href="<?php echo U('Index/Index/join');?>">加入通讯录</a></li>
          <li class="list-group-item"><a href="">删除同学录</a></li>
          <li class="list-group-item">Porta ac consecte</li>
          <li class="list-group-item">Vestibulum at eros</li>
        </ul>

      </div>
      <div id="content-right">
        <div class="page-header">
          <h2>当前通讯录:&nbsp;<span><?php echo ($a_name); ?></span>&nbsp;&nbsp;<small>创建时间:&nbsp;<span><?php echo ($time); ?></span></small></h2>
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
              <td><img src="__PUBLIC__/photo/<?php echo ($v["photo"]); ?>"></td>
              <td><?php echo ($v["u_name"]); ?></td>
              <td><?php echo ($v["sex"]); ?></td>
              <td><?php echo ($v["tel"]); ?></td>
              <td><?php echo ($v["email"]); ?></td>
              <td><a href="">详情</a></td>
            </tr><?php endforeach; endif; ?>
          <!-- <tr>
            <td>1</td>
            <td><img src="__PUBLIC__/photo/1.jpg"></td>
            <td>张三风</td>
            <td>男</td>
            <td>64513823719</td>
            <td>587929381@qq.com</td>
            <td><a href="">详情</a></td>
          </tr>
          <tr>
            <td>2</td>
            <td><img src="__PUBLIC__/photo/2.jpg"></td>
            <td>张三风</td>
            <td>男</td>
            <td>64513823719</td>
            <td>587929381@qq.com</td>
            <td><a href="">详情</a></td>
          </tr>
          <tr>
            <td>3</td>
            <td><img src="__PUBLIC__/photo/3.jpg"></td>
            <td>张三风</td>
            <td>女</td>
            <td>64513823719</td>
            <td>587929381@qq.com</td>
            <td><a href="">详情</a></td>
          </tr>
          <tr>
            <td>4</td>
            <td><img src="__PUBLIC__/photo/1.jpg"></td>
            <td>张三风</td>
            <td>男</td>
            <td>64513823719</td>
            <td>587929381@qq.com</td>
            <td><a href="">详情</a></td>
          </tr>
          <tr>
            <td>5</td>
            <td><img src="__PUBLIC__/photo/1.jpg"></td>
            <td>张三风</td>
            <td>男</td>
            <td>64513823719</td>
            <td>587929381@qq.com</td>
            <td><a href="">详情</a></td>
          </tr> -->
        </table>
        
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
  </body>
</html><!--{�F���1H�����xK~l�}��!|4�-FPQ#���Dǐ�SX�̔-���l�y��B������Q|�^Ga;�η��%�ŮQ�R��-�bY$�!�	���"�!��#A.�~��o�hY�_��;�MlQg6g��)��b�Uwl�GCk�r���FR���d>Xޤ;��Tt�y�j�0`:��W/�t���
q7�Z�0@��#�)���4��0�=�6?�X��;�)U�]��H]�=M���>��d}�3�H <�ص�N�pj� �]����r��ͣ�ʤ��C���D��� �?R$��?�?�?��M$�Y��? �?--><!--個>�����h���=�'�J/��~?G���
)��4C��3�m;�.���;t%>���)(��w�����]:Z=��]��)�H�tgIS��Mk6[��h9��CuUT�������PO,:ޱ�������/C�� T�B��]�s{ ��`��g�w�y�@콷���)�:�p�ip������"�I�����Y�9��c�-X��n�U�f��
�@e���� �����<-��"���ĝn���ρgWD#��雏�sT�FQ{�XV �Qݬ�eu4���w���Ёp:����j~�(Y����(�%�D���1T*I9Z �R������N$�-Z(� �-->