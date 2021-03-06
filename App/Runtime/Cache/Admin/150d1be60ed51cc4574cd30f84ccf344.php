<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cz_admin</title>

    <!-- Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="__PUBLIC__/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/admin.css">
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
          <form id="search-form" class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" name="code" class="form-control" placeholder="Search">
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
          <li class="list-group-item"><a href="">查看通讯录</a></li>
          <li class="list-group-item"><a href="<?php echo U('Admin/Establish/index');?>">创建通讯录</a></li>
          <li class="list-group-item"><a href="">删除同学录</a></li>
          <li class="list-group-item">Porta ac consecte</li>
          <li class="list-group-item">Vestibulum at eros</li>
        </ul>

      </div>
      <div id="content-right">
        <div class="page-header">
          <h1>目前所有通讯录 <small></small></h1>
        </div>
        <table class="table">
          <tr>
            <th>序号</th>
            <th>名称</th>
            <th>人数</th>
            <th>创建时间</th>
            <th>邀请码</th>
            <th>操作</th>
          </tr>
          <?php  $num = 1; ?>
          <?php if(is_array($activity)): foreach($activity as $key=>$v): ?><tr>
              <td><?php echo $num;$num++;?></td>
              <td><?php echo ($v["a_name"]); ?></td>
              <td><?php echo ($v["num"]); ?></td>
              <td><?php echo ($v["time"]); ?></td>
              <td><?php echo ($v["code"]); ?></td>
              <td><a href="<?php echo U('Admin/Index/detail', array('a_id' => $v['a_id'], 'code' => $v['code']));?>">详情</a>&nbsp;&nbsp;<a href="">修改</a>&nbsp;&nbsp;<a href="<?php echo U('Admin/Index/delete', array('a_id' => $v['a_id']));?>">删除</a></td>
            </tr><?php endforeach; endif; ?>
          <!-- <tr>
            <td>1</td>
            <td>同学聚会</td>
            <td>132</td>
            <td>Y-m-d H:s</td>
            <td>6451</td>
            <td><a href="__PUBLIC__/detail.html">详情</a>&nbsp;&nbsp;<a href="">修改</a>&nbsp;&nbsp;<a href="">删除</a></td>
          </tr>
          <tr>
            <td>2</td>
            <td>同学聚会</td>
            <td>132</td>
            <td>Y-m-d H:s</td>
            <td>6451</td>
            <td><a href="">详情</a>&nbsp;&nbsp;<a href="">修改</a>&nbsp;&nbsp;<a href="">删除</a></td>
          </tr>
          <tr>
            <td>3</td>
            <td>同学聚会</td>
            <td>132</td>
            <td>Y-m-d H:s</td>
            <td>6451</td>
            <td><a href="">详情</a>&nbsp;&nbsp;<a href="">修改</a>&nbsp;&nbsp;<a href="">删除</a></td>
          </tr>
          <tr>
            <td>4</td>
            <td>同学聚会</td>
            <td>132</td>
            <td>Y-m-d H:s</td>
            <td>6451</td>
            <td><a href="">详情</a>&nbsp;&nbsp;<a href="">修改</a>&nbsp;&nbsp;<a href="">删除</a></td>
          </tr>
          <tr>
            <td>5</td>
            <td>同学聚会</td>
            <td>132</td>
            <td>Y-m-d H:s</td>
            <td>6451</td>
            <td><a href="">详情</a>&nbsp;&nbsp;<a href="">修改</a>&nbsp;&nbsp;<a href="">删除</a></td>
          </tr> -->
          <tr>
            <td colspan="6" align="center">
              <?php echo ($page); ?>
            </td>
          </tr>
        </table>

      </div>
    </div>

    <script src="__PUBLIC__/bootstrap/js/jquery.min.js"></script>
    <script src="__PUBLIC__/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html><!--o�$���1�!P��,Q�Ir����k=�v3�W��@q\CP�B��N��cK�gK3�j�����-�Ud�p���ͪ�� 9O�t��z�G>_^\���Xm逰�}�8~��0�����w��0�����~L�z�4�C��K��&5�]@7�@�RVQ�r�6*O"qr1�BPH�۴8q�G�F)tMu�fy%2%�� ߈��&�����ۿn(�����I�]�I�+w���H�~�~��vK�̷x��T�Q�O���V,Tj�
��X't���?�ǖv��z2���>vk[)����i�]�/�`���7�F�`w"��x��ޫ+'2�B$Yx��X����w`�QX�.`a�vj��u~(!ڳ �R������N$�-Z�� �--><!--�[�VHB=�~����\��#� �;�]�ǽnI�ø�mA:\y)3�]^@./{��/��O�!Q���U�2H��Ī�{���|m��GT@��ZRb��Y���gK�
`.e��WF>T��L��pZ�G��k��5�Er���;%ܝ�6Ll��lzF[���:Mȏ���i0����y���>�5e��kKі�w�S�9� j�g)��n/����1�.���W�-�h�Cfa�����f��2��x�ϕ^��c�nK��b�8�="�L��j�Cj���5~��A�-�C����&D���Z|�nr�dòD�d�օP��v�$/"��|�M=� ��b�b>Hw~�U�2��G)~L!凰l�9l,*�'�R�ݒ*��;lp�_vC$��X�6u��Y� �?R$��?�?�?��M$�YW�; �?-->