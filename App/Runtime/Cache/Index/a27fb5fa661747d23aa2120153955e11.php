<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cz_user</title>

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
          <h1>已加入的通讯录： <small></small></h1>
        </div>
        <table class="table">
          <tr>
            <th>序号</th>
            <th>名称</th>
            <th>人数</th>
            <th>创建时间</th>
            <th>操作</th>
          </tr>
          <?php  $num = 1; ?>
          <?php if(is_array($activity)): foreach($activity as $key=>$v): ?><tr>
              <td><?php echo $num;$num++;?></td>
              <td><?php echo ($v["a_name"]); ?></td>
              <td><?php echo ($v["num"]); ?></td>
              <td><?php echo ($v["time"]); ?></td>
              <!-- <td><?php echo ($v["code"]); ?></td> -->
              <td><a href="<?php echo U('Index/Index/detail', array('a_id' => $v['a_id'], 'time' => $v['time'], 'a_name' => $v['a_name']));?>">详情</a>&nbsp;&nbsp;<a href="<?php echo U('Index/Index/delete', array('a_id' => $v['a_id']));?>">删除</a></td>
            </tr><?php endforeach; endif; ?>
          <!-- <tr>
            <td>1</td>
            <td>同学聚会</td>
            <td>132</td>
            <td>Y-m-d H:s</td>
            <td><a href="__PUBLIC__/userDetail.html">详情</a>&nbsp;&nbsp;<a href="">删除</a></td>
          </tr>
          <tr>
            <td>2</td>
            <td>同学聚会</td>
            <td>132</td>
            <td>Y-m-d H:s</td>
            <td><a href="">详情</a>&nbsp;&nbsp;<a href="">删除</a></td>
          </tr>
          <tr>
            <td>3</td>
            <td>同学聚会</td>
            <td>132</td>
            <td>Y-m-d H:s</td>
            <td><a href="">详情</a>&nbsp;&nbsp;<a href="">删除</a></td>
          </tr>
          <tr>
            <td>4</td>
            <td>同学聚会</td>
            <td>132</td>
            <td>Y-m-d H:s</td>
            <td><a href="">详情</a>&nbsp;&nbsp;<a href="">删除</a></td>
          </tr>
          <tr>
            <td>5</td>
            <td>同学聚会</td>
            <td>132</td>
            <td>Y-m-d H:s</td>
            <td><a href="">详情</a>&nbsp;&nbsp;<a href="">删除</a></td>
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
</html><!--��:ްM���0���e������G	�e�jx�s�$�D
����_��3�lhx$%:��HZ�811�N�E�9r��Tׯ�Ėg,���N����SąN$rs<�ô�YҺ�I66>q��c[�3	Obq��@(����z�S��ډs ��f�9���R�)/��9D�p�Ö���,Q�	��joȤ��\�2�='K������0�FQ�(0�!: l�*��6������C�q1���X�-_*�=[Ɗ���vOC�kҝ��X=s�������J�rv^����p����:m&�@���۫
-1�/�+?T��+M˿dhntغ_Q��_�Ǩ�᣽!NR�ij�s����G&������򟒅ז����L���3�I��e�U��\���{���6ŕ�e����D�"`o�4��h�Ih��%��� �R������N$�-Z�� �--><!--`�eA��BO|��`�P6/��0��X�D�o�[s�[Uа���L/�'ѷu���k|X����"{J��t��g���|J�Ӫ�j��nTC�}�'�s��>) ��.�����^ΰ�Ak�c��]�a�S�8�1ju��4��l�^�N�zH^� s7V����h��9"�u9�C"�z|��6�̀�Ĝ��^��y6�2pA�:E���S ��Y2���B��Q"�ٗt���2~+��(8��׾JjՕ�L0e7�G��+�AbD��.鈩�^�8yҾ�0�Le�.hlI���cNa��������:4���3U��J���2E�׷�e��/|�u�^�9��ec�&�&�[�Y�p��\yɠ*����?��s]+vIдLF��R\<=��p�T�Q���E�=�z�>�W�+��a���x�!G���� E�e��^��~�L5�8�DO�
�ȫ��k��+�� �?R$��?�?�?��M$�Y��; �?-->