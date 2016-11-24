<?php
/**
* 用户 Login 控制器
*/
class LoginAction extends Action
{
	public function index () {
		$this->display();
	}
	public function login () {
		if (!IS_POST) {
			halt('页面不存在CZ');
		}
		// p($_POST);
		$tel = I('tel');
		$pwd = I('password');

		$user = M('user')->where(array('tel' => $tel))->find();
		if (!$user || $user['u_password'] != $pwd){
			$this->error('帐号或密码错误');
		}

		session('tel', $user['tel']);
		session('u_name', $user['u_name']);
		session('photo', $user['photo']);

		$this->redirect('Index/Index/index');
	}
	public function signin () {
		$this->display();
	}
	public function handle () {
		$user['tel'] = I('tel');
		$user['u_password'] = I('password');
		$user['u_name'] = I('u_name');
		$user['sex'] = I('sex', '', 'intval');
		$user['email'] = I('email');
		
		$filename = $_FILES['photo']['name'];
		$tmp_name = $_FILES['photo']['tmp_name'];
		$user['photo'] = $user['tel'].$filename;
		
		if (M('user')->data($user)->add()) {
			move_uploaded_file($tmp_name,'Public/photo/'.$user['photo']);
			$message = '帐号'.$user['tel'].'注册成功';
			$this->message = $message;
		} else {
			$this->error("帐号已存在");
		}
		$this->display();
	}

}
?>