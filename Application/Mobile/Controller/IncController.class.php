<?php
namespace Mobile\Controller;
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
	
	public function login(){
        $this->display();
    }
	
	public function reg(){
        $this->display();
    }
	
	public function footer(){
        $this->display();
    }

	
	
    //注册模块
    public function ckreg(){

    	//格式验证
        if(!IS_POST){
          $this->error('非法提交方式！');  
        }
      	$email=I('post.email','','htmlspecialchars');
        $username=I('post.username','','htmlspecialchars');
      	$password=I('post.password','','htmlspecialchars');
        $getip = get_client_ip();
        $Ip = new \Org\Net\IpLocation('UTFWry.dat'); // 实例化类 参数表示IP地址库文件
        $area = $Ip->getlocation($getip); // 获取某个IP地址所在的位置
        $ipinfo =  $area['country'].$area['area'];
      	if(!$email){
      		$this->error('亲，邮件地址不能为空喔！');
      	}

      	$user=M('User')->where("uemail='$email'")->find();
      	if($user){
       		$this->error('邮件已经注册,请使用其他邮件！');}
        if(!$username){
          $this->error('亲，用户名不能为空哦！');
        }
       	if(!$password){
       		$this->error('亲，密码不能为空喔！');
       	}

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
       	$flag = $reg->add($data);
       	if ($flag){
       		$map['uemail']=array('eq',$email);  
       		$getid=M('User')->where($map)->find();
       		$uid=$getid['uid'];

          //设置cookie和session
          $cmd5=get_cookie($email,$salt);
          $cookie_value='PID'.$uid.'PSS'.$cmd5;
       		cookie('PanleID',$cookie_value);
       		session('PID',$uid);
        	$this->redirect('Profile/index',1);
        }
        else{  
          $this->error('请稍后重试！');  
        }
    }

  public function cklogin(){
      if(!IS_POST){
          $this->error('非法提交方式！');
      }

      $email=I('post.email');
      $password=I('post.password');

      if(!$email){
          $this->error('请填写登陆邮箱！');
      }
      if(!$password){
          $this->error('请填写登陆密码！');
      }

      $map['uemail']=array('eq',$email);
      $user=M('User')->where($map)->find();
      $salt=$user['usalt'];
      $password1=md5(md5($password).$salt);

      if(!$user){
        $this->error('账号或密码不正确！');}
      elseif ($user['upwd']!=$password1) {
        $this->error('账号或密码不正确！');}
      else{
        $is_login=1;
        session('PID',$user['uid']);
        $this->redirect('Profile/index',1);
		}
      
  }

  public function logout(){
      session('PID',null);
      $this->redirect('Index/index',1);
  }

  public function help(){
    $this->display();
  }

  public function gift(){
    $this->display();
  }


}