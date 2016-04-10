<?php
class IndexAction extends BaseAction{
    public function index(){

		Load('extend'); 
		$jdtData['postdate']=array('lt',time());
		$jdtData['is_checked']=array('eq',1);
		$jdtData['is_checked']=array('eq',1);
		$jdtData['is_checked']=array('eq',1);
		$jdtData['is_checked']=array('eq',1);
		$jdtData['is_checked']=array('eq',1);
		$jdtData['is_checked']=array('eq',1);
		$jdtData['is_checked']=array('eq',1);
		$jdtData['attachment']=array('neq','');
		$jdtArray=M('News')->where($jdtData)->order('nid desc')->limit(6)->select();
		foreach($jdtArray as $key=>$value){
			$temdir=M('Newsort')->getByCid($value['cid']);
			$jdtArray[$key]['dirname']=$temdir['dirname'];
		}
		$this->assign('jdtArray',$jdtArray);
        $this->display();
    }
}
?>
