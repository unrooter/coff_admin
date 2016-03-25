<?php
namespace Home\Controller;
use Think\Controller;
class PictureController extends Controller {
	//轮播图列表
   public function lunbo(){
	   	$User = M('lunbo');
	   	$list = $User->select();
	   	$this->assign('data',$list);
	   	$this->display();
   }
   //添加轮播图界面
    public function add(){
    	$this->display();
   }

   //添加轮播图操作
   public function runadd(){
	   	if(!IS_AJAX){
	   		$this->error('提交方式不正确');
	   	}
			$file = I('picture');
			$upload = new \Think\Upload();// 实例化上传类
		    $upload->maxSize   =     3145728 ;// 设置附件上传大小
		    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		    $upload->rootPath  =     './Public/Uploads/Picture/'; // 设置附件上传根目录
		    $upload->savePath  =     ''; // 设置附件上传（子）目录
		    // 上传文件 
	    	$info   =   $upload->upload();
	    if(!$info) {// 上传错误提示错误信息
	        $this->error($upload->getError());
	    }else{
	    	foreach($info as $file){
        		$img_url = '/Uploads/Picture/'.$file['savepath'].$file['savename'];
    		}
	    }
	    	$date = array(
	    		'luname' 			=> I('luname'),
	    		'img_url'			=> $img_url,
	    		'img_link' 			=> I('img_link'),
	    		'time' 				=> time(),
	    		);
	    if(M('lunbo')->add($date)){
	        $this->success('轮播图上传成功',U('lunbo'));
	    }else{
	    	$this->error('轮播图上传失败');
	    }
   }    //$upload->rootPath  =     "./Uploads/substr(basename(__FILE__),0,-20)/"; // 设置附件上传根目录

   //修改轮播图
   public function edit(){
   	if(!I('id')){
   		$this->error('参数传输错误');
   	}
	   	$list =M('lunbo')->where(array('id'=>I('id')))->find();
	   	$this->assign('data',$list);
    	$this->display();
   }
	//进行修改轮播图的操作
   public function runedit(){
   	if(!IS_AJAX){
	   		$this->error('提交方式不正确');
	   	}
			$file = I('picture');
			$upload = new \Think\Upload();// 实例化上传类
		    $upload->maxSize   =     3145728 ;// 设置附件上传大小
		    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		    $upload->rootPath  =     './Public/Uploads/Picture/'; // 设置附件上传根目录
		    $upload->savePath  =     ''; // 设置附件上传（子）目录
		    // 上传文件 
	    	$info   =   $upload->upload();
	    if(!$info) {// 上传错误提示错误信息
	        $this->error($upload->getError());
	    }else{
	    	foreach($info as $file){
        		$img_url = '/Uploads/Picture/'.$file['savepath'].$file['savename'];
    		}
	    }
	    	$date = array(
	    		'id'				=> I('id'),
	    		'luname' 			=> I('luname'),
	    		'img_url'			=> $img_url,
	    		'img_link' 			=> I('img_link'),
	    		'time' 				=> time(),
	    		);
	     if(M('lunbo')->save($date)){
	        $this->success('轮播图修改成功',U('lunbo'));
	    }else{
	    	$this->error('轮播图修改失败');
	    }
   }
   //删除轮播图
   public function del(){
   		 $m = M('lunbo')->where(array('id'=>I('id')))->field('img_url')->find();
        if(M('lunbo')->where(array('id'=>I('id')))->delete()){
            unlink('./Public'.$m['img_url']);
        }else{
            $this->error('删除失败');
        }
        $this->redirect('lunbo');
   }
}