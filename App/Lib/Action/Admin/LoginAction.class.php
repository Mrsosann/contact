<?php
/**
* 管理员 登录 控制器
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
		$id = I('m_id');
		$pwd = I('password');

		$manager = M('manager')->where(array('m_id' => $id))->find();
		// p($manager);
		if (!$manager || $manager['m_password'] != $pwd){
			$this->error('帐号或密码错误');
		}

		session('m_id', $manager['m_id']);
		session('m_name', $manager['m_name']);

		$this->redirect('Admin/Index/index');
	}
}
?>