<?php
namespace Home\Controller;
use Think\Controller;
class SubmitController extends Controller {
    public function index(){
        $this->display();
		}

	public function addsu(){

    	$aname=I('post.name','','htmlspecialchars');
    	$alink=I('post.link','','htmlspecialchars');
    	$aemail=I('post.email','','htmlspecialchars');

    	if(!$aname){
    		$this->error('请填写资源名称!');
    	}
    	if(!$alink){
    		$this->error('请填写资源链接!');
    	}
    	if(!$aemail){
    		$this->error('请填写您的Email!');
    	}

    	$ismem=0;
		$addsub=M('Submit');
		$addsub->create();
		$data['suname']=$aname;
		$data['sulink']=$alink;
		$data['suemail']=$aemail;
		$data['sutime']=date("Y-m-d H:i",time());
		$data['suverify']=$ismem;
		$comflag=$addsub->add($data);
		if(!$comflag){
			$this->error('资源提交失败,稍后再试吧！');
		}
		$this->success('提交成功,请等待审核。');
	}

}