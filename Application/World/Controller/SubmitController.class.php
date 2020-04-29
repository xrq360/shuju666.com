<?php
namespace World\Controller;
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
    		$this->error('Invalid data source!');
    	}
    	if(!$alink){
    		$this->error('Invalid data link!');
    	}
    	if(!$aemail){
    		$this->error('Invalid email address!');
    	}

    	$ismem=0;
		$addsub=M('Submit');
		$addsub->create();
		$data['suname']=$aname;
		$data['sulink']=$alink;
		$data['suemail']=$aemail;
		$data['sutime']=time();
		$data['suverify']=$ismem;
		$comflag=$addsub->add($data);
		if(!$comflag){
			$this->error('Failed,please try later!');
		}
		$this->success('Success,please wait for verification!');
	}

}