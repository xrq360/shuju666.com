<?php
namespace World\Controller;
use Think\Controller;
class IncController extends Controller {

	//验证码
	public function verify(){
        $Verify =     new \Think\Verify();
        $Verify->entry(1);
    }

    //显示模块
    public function nav(){
        $this->display();
    }

    //注册模块
    public function reg(){

    	//格式验证
        if(!IS_POST){
          $this->error('Invalid method!');  
        }
      	$email=I('post.email','','htmlspecialchars');
        $username=I('post.username','','htmlspecialchars');
      	$password=I('post.password','','htmlspecialchars');
        //$invitecode=I('post.invitecode','','htmlspecialchars');
      	//$vcode=I('post.vcode');
        $getip = get_client_ip();
        $Ip = new \Org\Net\IpLocation('UTFWry.dat'); // 实例化类 参数表示IP地址库文件
        $area = $Ip->getlocation($getip); // 获取某个IP地址所在的位置
        $ipinfo =  $area['country'].$area['area'];
      	if(!$email){
      		$this->error('Email is invalid!');
      	}
        if(!$username){
          $this->error('Username is invalid!');
        }
        if(!$password){
          $this->error('Password is invalid!');
        }
        $map['uemail']=array('eq',$email);
      	$ckemail=M('User')->where($map)->find();
        
      	if($ckemail){
       		$this->error('Email has been registered!');}



       	//写数据库
        $salt=salt();
       	$reg=M('User');
       	$reg->create();
       	$data['uemail']=$email;
        $data['uname']=$username;
       	$data['upwd']=md5(md5($password).$salt);
       	$data['usalt']=$salt;
       	$data['uregtime']= time();
        $data['uregcity']= $ipinfo;
        $data['urank']=0;
        $data['uvip']=0;
        //$data['urank']= $ckinvite['pi_count'];
       	$flag = $reg->add($data);
       	if ($flag){
       		$map['uemail']=array('eq',$email);  
       		$getid=M('User')->where($map)->find();
       		$uid=$getid['uid'];

          //设置cookie和session
          $cmd5=get_cookie($email,$salt);
          $cookie_value='PID'.$uid.'PSS'.$cmd5;
       		cookie('PanleID',$cookie_value);
       		session('PID',$uid,array('httponly' => true));
        	$this->redirect('Profile/index',1);  
        }
        else{  
          $this->error('Register Failed!');  
        }
    }

  public function cklogin(){
      if(!IS_POST){
          $this->error('Invalid method!');
      }

      $email=I('post.email','','htmlspecialchars');
      $password=I('post.password','','htmlspecialchars');

      if(!$email){
          $this->error('Email is invalid!');
      }
      if(!$password){
          $this->error('Password is invalid!');
      }

      $map['uemail']=array('eq',$email);
      $user=M('User')->where($map)->find();
      $salt=$user['usalt'];
      $password1=md5(md5($password).$salt);

      if(!$user){
        $this->error('Password is invalid!');}
      elseif ($user['upwd']!=$password1) {
        $this->error('Password is invalid!');}
      else{
        $is_login=1;
        session('PID',$user['uid'],array('httponly' => true));
        $this->redirect('Profile/index',1);  
      }
  }

  public function feedback(){
      if(!IS_POST){
          $this->error('Invalid method!');
      }
      $fb_name=I('post.fb_name','','htmlspecialchars');
      $fb_content=I('post.fb_content','','htmlspecialchars');

      if(!$fb_name){
          $fb_name="anony";
      }
      if(!$fb_content){
          $this->error('Invalid feedback contents.');
      }

      $feedback=M('Feedback');
      $feedback->create();
      $data['pf_username']=$fb_name;
      $data['pf_content']=$fb_content;
      $data['pf_time']= date("Y-m-d H:i",time());
      $flag = $feedback->add($data);
      if($flag){
        $this->success('Success, thank you!');
      }
  }


  public function logout(){
      session('PID',null);
      $this->redirect('Index/index',1);
  }

  public function help(){
    $this->display();
  }



}
