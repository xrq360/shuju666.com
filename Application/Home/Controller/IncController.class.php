<?php
namespace Home\Controller;
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
          $this->error('非法提交方式！');  
        }
      	$email=I('post.email','','htmlspecialchars');
        $username=I('post.username','','htmlspecialchars');
      	$password=I('post.password','','htmlspecialchars');
        //$invitecode=I('post.invitecode','','htmlspecialchars');
      	//$vcode=I('post.vcode');
        //$getip = get_client_ip();
		$getip = isset($_SERVER['HTTP_CF_CONNECTING_IP']) ? $_SERVER['HTTP_CF_CONNECTING_IP'] : $_SERVER['HTTP_CLIENT_IP'];
        $Ip = new \Org\Net\IpLocation('UTFWry.dat'); // 实例化类 参数表示IP地址库文件
        $area = $Ip->getlocation($getip); // 获取某个IP地址所在的位置
        $ipinfo =  $area['country'].$area['area'];
      	if(!$email){
      		$this->error('Email不能为空!');
      	}
        if(!$username){
          $this->error('请填写用户名!');
        }
        if(!$password){
          $this->error('请填写密码!');
        }
        $map['uemail']=array('eq',$email);
      	$ckemail=M('User')->where($map)->find();
        
      	if($ckemail){
       		$this->error('Email已经注册,请使用其他邮件!');}

        //if($invitecode!="dickdig.com"){
          //$this->error('邀请码不正确,请仔细核对!');}


       
        /* 需要验证码
        $ckinvite=M('Invite')->where($map)->find();
        if(!$ckinvite){
          $this->error('该Email尚未获得邀请码!');
        }
        if($ckinvite['pi_code']!=$invitecode){
          $this->error('请填写正确的邀请码');
        }
        */


       	//写数据库
        $salt=salt();
       	$reg=M('User');
       	$reg->create();
       	$data['uemail']=$email;
        $data['uname']=$username;
       	$data['upwd']=md5(md5($password).$salt);
       	$data['usalt']=$salt;
       	$data['uregtime']= date("Y-m-d H:i",time());
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
       		//cookie('PanleID',$cookie_value);
       		session('PID',$uid,array('httponly' => true));
        	$this->redirect('Profile/index',1);  
        }
        else{  
          $this->error('注册失败，请稍后重试！');  
        }
    }

  public function cklogin(){
      if(!IS_POST){
          $this->error('非法提交方式！');
      }

      $email=I('post.email','','htmlspecialchars');
      $password=I('post.password','','htmlspecialchars');

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
        session('PID',$user['uid'],array('httponly' => true));
        $this->redirect('Profile/index',1);  
      }
  }

  public function feedback(){
      if(!IS_POST){
          $this->error('非法提交方式!');
      }
      $fb_name=I('post.fb_name','','htmlspecialchars');
      $fb_content=I('post.fb_content','','htmlspecialchars');

      if(!$fb_name){
          $fb_name="匿名";
      }
      if(!$fb_content){
          $this->error('既然来了,为什么不说两句?');
      }

      $feedback=M('Feedback');
      $feedback->create();
      $data['pf_username']=$fb_name;
      $data['pf_content']=$fb_content;
      $data['pf_time']= date("Y-m-d H:i",time());
      $flag = $feedback->add($data);
      if($flag){
        $this->success('反馈成功,感谢您的支持!');
      }
  }


  public function logout(){
      session('PID',null);
      $this->redirect('Index/index',1);
  }

  public function help(){
    $this->display();
  }

  public function sitemap_gen() {
			$limitnum=I('get.limit');
			if(empty($limitnum)&&!is_numeric($limitnum)){
				$this->error('limit is null.');
			}
			$mapsite['plstatus']=array('eq',1);
            $list = M('Logs')->group('plword')->where($mapsite)->order('plid desc')->limit($limitnum)->select();
            $sitemap = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\r\n<?xml-stylesheet type=\"text/xsl\" href=\"http://www.shuju666.com/Public/css/sitemap.xsl\"?>\r\n<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\r\n";
			$sitemap .= "<url>\r\n"."<loc>"."http://www.shuju666.com/Home/Archive/"."</loc>\r\n"."<priority>1.0</priority>\r\n<lastmod>".date("Y-m-d H:i:s",time())."</lastmod>\r\n<changefreq>Daily</changefreq>\r\n</url>\r\n"; 
            foreach($list as $k=>$v){
                $sitemap .= "<url>\r\n"."<loc>"."http://www.shuju666.com/Home/Archive/leaked/history/".$v['plword'].".html"."</loc>\r\n"."<priority>0.8</priority>\r\n<lastmod>".$v['pltime']."</lastmod>\r\n<changefreq>Monthly</changefreq>\r\n</url>\r\n";
        
            }
            
            $sitemap .= '</urlset>';
            
            $file = fopen("/home/wwwroot/default/sitemap_new.xml","w");
            fwrite($file,$sitemap);
            fclose($file);
            echo 'success';
        
    }


}
