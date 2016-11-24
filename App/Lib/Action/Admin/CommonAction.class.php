<?php
/**
* 
*/
class CommonAction extends Action
{
	
	public function _initialize () {
		if (!isset($_SESSION['m_id']) || !isset($_SESSION['m_name'])) {
			$this->redirect('Admin/Login/index');
		}
	}
}
?>