<?php
/**
* 管理员 Index 控制器
*/
class IndexAction extends CommonAction
{
	public function index () {
		import('ORG.Util.Page');

		$count = M('activity')->count();
		// echo $count;
		$page = new Page($count,8);
		$limit = $page->firstRow . ',' . $page->listRows;

		$activity = M('activity')->order('time DESC')->limit($limit)->select();

		$this->activity = $activity;
		$this->page = $page->show();
		$this->display();
	}
	
	public function logout () {
		session_unset();
		session_destroy();
		$this->redirect('Admin/Login/index');
	}
	public function delete () {
		$a_id = I('a_id', '', 'intval');

		M('activity')->where(array('a_id' => $a_id))->delete();
		M('attend')->where(array('a_id' => $a_id))->delete();
		// if (M('activity')->delete($a_id) {
		// 	$this->success('删除成功', U('Admin/Index/index'));
		// } else {
		// 	$this->error('删除失败');
		// }
		$this->redirect('Admin/Index/index');
	}
	public function detail () {
		$a_id = I('a_id', '', 'intval');
		$code = I('code');

		$Model = new Model(); // 实例化一个model对象 没有对应任何数据表
		$activity = $Model->query("select * FROM cz_attend NATURAL JOIN cz_user where a_id = $a_id ");
		
		$this->activity = $activity;
		$this->code = $code;
		
		$this->display();
	}
	public function detaildel () {
		$a_id = I('a_id');
		$tel = I('tel');
		M('attend')->where("tel = $tel AND a_id = $a_id")->delete();
		$activity = M('activity')->where("a_id = $a_id")->find();
		$activity['num']--;
		M('activity')->where("a_id = $a_id")->data($activity)->save();
		$this->redirect('Admin/Index/detail', array('code' => $activity['code'] , 'a_id' => $a_id));
	}
}
?>