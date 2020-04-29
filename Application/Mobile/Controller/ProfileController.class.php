<?php
namespace Mobile\Controller;
use Think\Controller;
class ProfileController extends Controller {

    public function index(){
        import('ORG.Util.Date');
        $uid=session('PID');
        if(empty($uid)&&!is_numeric($uid)){
            $this->redirect('Inc/login',1);
        }

        $map['uid']=array('eq',$uid);
        $getuser=M('User')->where($map)->find();
        $uemail=$getuser['uemail'];
        $ucity=$getuser['uregcity'];
        $urank=get_rank_byuid($uid);

        $this->assign('ucity',$ucity);
        $this->assign('uemail',$uemail);
        $this->assign('urank',$urank);
        $this->display();
    }




}