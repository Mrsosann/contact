<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cz_detail</title>

    <!-- Bootstrap æ ¸å¿ƒ CSS æ–‡ä»¶ -->
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
            <li><a href="#">ç®¡ç†å‘˜ç™»å½•</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">ç®¡ç†å‘˜ <?php echo $_SESSION['m_name'];?> <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo U('Admin/Index/logout');?>">æ³¨é”€</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div id="content">
      <div id="content-left">
        <div class="page-header">
          <h1>ç®¡ç†åˆ—è¡¨</h1>
        </div>
        <ul class="list-group" id="left-list">
          <li class="list-group-item"><a href="<?php echo U('Admin/Index/index');?>">æŸ¥çœ‹é€šè®¯å½•</a></li>
          <li class="list-group-item"><a href="<?php echo U('Admin/Establish/index');?>">åˆ›å»ºé€šè®¯å½•</a></li>
          <li class="list-group-item"><a href="">åˆ é™¤åŒå­¦å½•</a></li>
          <li class="list-group-item">Porta ac consecte</li>
          <li class="list-group-item">Vestibulum at eros</li>
        </ul>

      </div>
      <div id="content-right">
        <div class="page-header">
          <h2>å½“å‰é€šè®¯å½•åç§°:&nbsp;<span>åŒå­¦èšä¼š</span>&nbsp;&nbsp;<small>é‚€è¯·ç :&nbsp;<span><?php echo ($code); ?></span></small></h2>
        </div>
        <table class="table">
          <tr>
            <th>åºå·</th>
            <th>ç…§ç‰‡</th>
            <th>å§“å</th>
            <th>æ€§åˆ«</th>
            <th>æ‰‹æœºå·</th>
            <th>é‚®ç®±</th>
            <th>æ“ä½œ</th>
          </tr>
          <?php  $num = 1; ?>
          <?php if(is_array($activity)): foreach($activity as $key=>$v): ?><tr>
              <td><?php echo $num;$num++;?></td>
              <td><img src="__ROOT__/Public/photo/<?php echo ($v["photo"]); ?>"></td>
              <td><?php echo ($v["u_name"]); ?></td>
              <td><?php echo ($v["sex"]); ?></td>
              <td><?php echo ($v["tel"]); ?></td>
              <td><?php echo ($v["email"]); ?></td>
              <td><a href="<?php echo U('Admin/Index/detaildel', array('tel' => $v['tel'], 'a_id' => $v['a_id']));?>">åˆ é™¤</a></td>
            </tr>
            <!-- <tr>
              <td><?php echo $num;$num++;?></td>
              <td><?php echo ($v["a_name"]); ?></td>
              <td><?php echo ($v["num"]); ?></td>
              <td><?php echo ($v["time"]); ?></td>
              <td><?php echo ($v["code"]); ?></td>
              <td><a href="<?php echo U('Admin/Index/detail', array('a_id' => $v['a_id'], 'code' => $v['code']));?>">è¯¦æƒ…</a>&nbsp;&nbsp;<a href="">ä¿®æ”¹</a>&nbsp;&nbsp;<a href="<?php echo U('Admin/Index/delete', array('a_id' => $v['a_id']));?>">åˆ é™¤</a></td>
            </tr> --><?php endforeach; endif; ?>
          <!-- <tr>
            <td>1</td>
            <td><img src="__PUBLIC__/photo/1.jpg"></td>
            <td>å¼ ä¸‰é£</td>
            <td>ç”·</td>
            <td>64513823719</td>
            <td>587929381@qq.com</td>
            <td><a href="">åˆ é™¤</a></td>
          </tr>
          <tr>
            <td>2</td>
            <td><img src="__PUBLIC__/photo/2.jpg"></td>
            <td>å¼ ä¸‰é£</td>
            <td>ç”·</td>
            <td>64513823719</td>
            <td>587929381@qq.com</td>
            <td><a href="">åˆ é™¤</a></td>
          </tr>
          <tr>
            <td>3</td>
            <td><img src="__PUBLIC__/photo/3.jpg"></td>
            <td>å¼ ä¸‰é£</td>
            <td>å¥³</td>
            <td>64513823719</td>
            <td>587929381@qq.com</td>
            <td><a href="">åˆ é™¤</a></td>
          </tr>
          <tr>
            <td>4</td>
            <td><img src="__PUBLIC__/photo/1.jpg"></td>
            <td>å¼ ä¸‰é£</td>
            <td>ç”·</td>
            <td>64513823719</td>
            <td>587929381@qq.com</td>
            <td><a href="">åˆ é™¤</a></td>
          </tr>
          <tr>
            <td>5</td>
            <td><img src="__PUBLIC__/photo/1.jpg"></td>
            <td>å¼ ä¸‰é£</td>
            <td>ç”·</td>
            <td>64513823719</td>
            <td>587929381@qq.com</td>
            <td><a href="">åˆ é™¤</a></td>
          </tr> -->
        </table>
        <form id="establish-form" method="get">
          æ˜¯å¦éœ€è¦ä¿®æ”¹é€šè®¯å½•å¯æŸ¥çœ‹å±æ€§:
          
          <label><input name="Fruit" type="checkbox" value="" />&nbsp;æ‰‹æœºå·&nbsp;&nbsp;</label> 
          <label><input name="Fruit" type="checkbox" value="" />å§“å&nbsp;&nbsp;</label>
          <label><input name="Fruit" type="checkbox" value="" />ç…§ç‰‡&nbsp;&nbsp;</label> 
          <label><input name="Fruit" type="checkbox" value="" />æ€§åˆ«&nbsp;&nbsp;</label> 
          <label><input name="Fruit" type="checkbox" value="" />é‚®ç®±&nbsp;&nbsp;</label> 
          &nbsp;&nbsp;<input type="submit" class="btn btn-primary" value="ç¡®è®¤ä¿®æ”¹" />
        </form>
      </div>
      
    </div>

    <script src="__PUBLIC__/bootstrap/js/jquery.min.js"></script>
    <script src="__PUBLIC__/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html><!--èŸu‹7]îÀ&ØŠŸ›ƒRªº±÷ï™ù±@¿ú1üD)diJ²è¸¦ÌÊ?Î'åèhHã¬‰2Ó£a±}ªVãÓ~AS—Œ:6_¹\½¢êğÇX{œsuw7R¶µİİaÇbZ]İ« B5bÀù‚RèÑÃÜc€¢…ÚÚ›5xpR^R÷©>Áù
‚_FaR,üá…¤àtIÅz ÒÊD;ôï!–!áiÆ­ÁËFº8şC §v¨G!„,ã–Ië "İuÙk¥íåW‘gS rsº£^Ï”š-PØ@{~Ë˜DMğÊÂtÖB‹¬-jĞö¹¥7pßR¶v$øl/{¾›ßl¥¢@†¯=1Ü†ˆ¯ï-İªyWšã»><øİ`&¯³Gu4‹« ÜF	 ßRøßßß’ÕN$¡-Z"À ß--><!--aÌx?‹!f¹=ŞsœHÁ¸¹ÆàæÌ÷ºŸ³Vö42ú¦‡„|Í?â#_]½X>÷ƒ%‡îäE|²åVãgŒŸÈxÜõ¸C™İ¡r¬ÔxY;¦|Í­;ÚWh5‘cÀB9ZRò¦îóR¤8	L{"à-­~Î¹„öúï@±ë’¹0Ç?ĞÎÜ,Õ·ê/ù16]Jßf2;hP¯rëÈB„VúÔ0	,!k“øıªÃ·Rrà˜ì¬ÂF±ò>éã(ö|½mÜßVt3Õ¸¼œ¹R’ŒÓNA7m%ãÀ†ëÌ	J&"[1İVV[ŠmWı0
I´œÅyÂ9ãFg@ ‡uÌÒ Ë‘`ì™¨e3ûÜbª·@ëÒæ¡ÂEZgÀi	õYJä+ŠÂÇ×Şª­<(·¹K5Œ’*m y~™×Ó%4Ü5îÔKÁ}Ø8Ğø·à^4ó¨qèÔşÑ±Nä›-}ÌÍÄn‡Ó¢ ß?R$ûß?ß?ß?’âM$¡Yg™; ß?-->