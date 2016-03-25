<?php
namespace Home\Controller;
use Think\Controller;
class ContentController extends Controller {
	public function bankuai_list(){
		$list = M('bankuai')->select();
		$this->assign('list',$list);
		$this->display();
	}
	//板块添加页面
	public function ban_add(){
		if($list = M('bankuai')->field('id,ban_name')->select()){
		$this->assign('list',$list);
		}
		$this->display();
	}

	//添加板块操作
   public function runadd(){
	   	if(!IS_AJAX){
	   		$this->error('提交方式不正确');
	   	}
	    	$data = array(
	    		'pid'				=> I('pid'),
	    		'ban_name' 			=> I('ban_name'),
	    		'ban_info'			=> I('ban_info'),
	    		'order' 			=> I('order'),
	    		'time' 				=> time(),
	    		'status'			=> '1',
	    		);
	    if(M('bankuai')->add($data)){
	        $this->success('板块添加成功',U('bankuai_list'));
	    }else{
	    	$this->error('板块添加失败');
	    }
   }    //$upload->rootPath  =     "./Uploads/substr(basename(__FILE__),0,-20)/"; // 设置附件上传根目录

   //修改轮播图
   public function ban_edit(){
   	if(!I('id')){
   		$this->error('参数传输错误');
   	}
	   	$list =M('bankuai')->where(array('id'=>I('id')))->find();
	   	$this->assign('list',$list);
    	$this->display();
   }
	//进行修改轮播图的操作
   public function runedit(){
   	if(!IS_AJAX){
	   		$this->error('提交方式不正确');
	   	}
			
	    	$date = array(
	    		'id'				=> I('id'),
	    		'pid'				=> I('pid'),
	    		'ban_name' 			=> I('ban_name'),
	    		'ban_info'			=> I('ban_info'),
	    		'order' 			=> I('order'),
	    		'time' 				=> time(),
	    		);
	     if(M('bankuai')->save($date)){
	        $this->success('板块修改成功',U('bankuai_list'));
	    }else{
	    	$this->error('板块修改失败');
	    }
   }
   //删除轮播图
   public function del(){
        if(M('bankuai')->where(array('id'=>I('id')))->delete()){
        $this->redirect('bankuai_list');
        }
        $this->error('删除失败');
   }


    //显示状态
        public function status(){
            $id=I('x');
            $status=M('bankuai')->where(array('id'=>$id))->getField('status');//判断当前状态情况
            if($status==1){
                $statedata = array('status'=>0);
                $auth_group=M('bankuai')->where(array('id'=>$id))->setField($statedata);
                $this->success('状态禁止',1,1);
            }else{
                $statedata = array('status'=>1);
                $auth_group=M('bankuai')->where(array('id'=>$id))->setField($statedata);
                $this->success('状态开启',1,1);
            }
        }
}