<?php
namespace Admin\Controller;
use User\Model;
use Spark\Util\Page;
class TextController extends BaseController{
	public function index(){
		$img_db=D('Text');
		$wx_db=D('Wxuser');
		$count=$img_db->count();
		$page=new Page($count,25);
		$info=$img_db->limit($page->firstRow.','.$page->listRows)->select();
		foreach($info as $key=>$val){
			$where['token']=$val['token'];
			$where['uid']=$val['uid'];
			$res=$wx_db->where($where)->find();
			$info[$key]['wxname']=$res['wxname'];
			
		}
		$this->assign('page',$page->show());
		$this->assign('info',$info);
		$this->display();
	}
	
	public function del(){
		C('TOKEN_ON',false);
		$id=I('get.id','intval');
		$pid=I('get.pid','intval');
		if(D('Text')->delete($id)){
			$this->success('操作成功',U('index',array('pid'=>$pid)));
		}else{
			$this->error('操作失败',U('index',array('pid'=>$pid)));
		}
	}
	
}