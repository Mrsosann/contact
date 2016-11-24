<?php
/**
* 
*/
class CommonAction extends Action
{
	
	public function _initialize () {
		if (!isset($_SESSION['tel']) || !isset($_SESSION['u_name'])) {
			$this->redirect('Index/Login/index');
		}
	}
}
?>