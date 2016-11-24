<?php
/**
* 管理员 创建 控制器
*/
class EstablishAction extends CommonAction 
{
	public function index () {
		$this->display();
	}
	public function handle () {
		// p($_POST);
		$data = array(
			'a_name' => I('a_name'),
			'sta_tel' => I('sta_tel') ? I('sta_tel') : 0,
			'sta_name' => I('sta_name') ? I('sta_name') : 0,
			'sta_photo' => I('sta_photo') ? I('sta_photo') : 0,
			'sta_sex' => I('sta_sex') ? I('sta_sex') : 0,
			'sta_email' => I('sta_email') ? I('sta_email') : 0,
			'm_id' => $_SESSION['m_id'],
			'num' => 0,
			// 'time' => time(),
			'code' => $_SESSION['m_id'].rand(1000,9999),
			);
		// p($data);
		if ($a_id = M('activity')->data($data)->add()) {
			$data['code'] = substr($a_id . $data['code'], 0, 6);
			// echo $data['code'];
			M('activity')->where(array('a_id' => $a_id))->data($data)->save();
			$this->redirect('Admin/Establish/success',array('code' => $data['code']));
		} else {
			$this->error('创建失败');
		}
	}
	public function success () {
		$this->code = I('code');
		$this->display();
	}
}