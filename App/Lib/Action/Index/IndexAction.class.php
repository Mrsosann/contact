<?php
/**
* 用户 Index 控制器
*/
class IndexAction extends CommonAction
{
	public function index () {
		// import('ORG.Util.Page');

		// $count = M('attend')->where(array('tel' => $_SESSIONS['tel']))->count();
		// // echo $count;
		// $page = new Page($count,8);
		// $limit = $page->firstRow . ',' . $page->listRows;

		// $activity = M('activity')->order('time DESC')->limit($limit)->select();

		// $this->activity = $activity;
		// $this->page = $page->show();
		// $this->display();


		// $a_id = I('a_id', '', 'intval');
		// $code = I('code');

		$tel = $_SESSION['tel'];

		$Model = new Model(); // 实例化一个model对象 没有对应任何数据表
		$activity = $Model->query("select * FROM cz_attend NATURAL JOIN cz_activity where tel = $tel");
		
		$this->activity = $activity;
		$this->display();
	}

	public function logout () {
		session_unset();
		session_destroy();
		$this->redirect('Index/Login/index');
	}

	public function delete () {
		$a_id = I('a_id', '', 'intval');
		$tel = $_SESSION['tel'];
		M('attend')->where("a_id = $a_id AND tel = $tel")->delete();
		$activity = M('activity')->where("a_id = $a_id")->find();
		$activity['num']--;
		M('activity')->where("a_id = $a_id")->data($activity)->save();
		// if (M('activity')->delete($a_id) {
		// 	$this->success('删除成功', U('Admin/Index/index'));
		// } else {
		// 	$this->error('删除失败');
		// }
		$this->redirect('Index/Index/index');
	}

	public function detail () {
		$a_id = I('a_id', '', 'intval');
		$a_name = I('a_name');
		$time = I('time');

		$Model = new Model(); // 实例化一个model对象 没有对应任何数据表
		$activity = $Model->query("select * FROM cz_attend NATURAL JOIN cz_user where a_id = $a_id ");
		
		$this->activity = $activity;
		$this->a_name = $a_name;
		$this->time = $time;
		
		$this->display();
	}

	public function join () {
		$this->display();
	}

	public function handle () {
		$code = I('code');
		// $message = null;
		// p($code);
		
		// p($activity);
		if ($activity = M('activity')->where("code = $code")->find()) {
			$data['tel'] = $_SESSION['tel'];
			$data['a_id'] = $activity['a_id'];
			//p($data);die;
			if ($aaa = M('attend')->data($data)->add()) {
				$message = "成功加入通讯录".$activity['a_name']."；邀请码".$activity['code'];
				$activity['num']++;
				M('activity')->where("code = $code")->data($activity)->save();
			} else {
				$message = "加入 ".$code."失败，不能重复加入";
			}
		} else {
			$message = "加入 ".$code."失败，通讯录不存在";
		}
		$this->message = $message;
		$this->display();
	}

	
}
?>