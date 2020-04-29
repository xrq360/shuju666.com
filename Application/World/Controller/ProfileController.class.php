<?php
namespace World\Controller;
use Think\Controller;
class ProfileController extends Controller {
    public function index(){
        import('ORG.Util.Date');
    	$uid=session('PID');
    	if(empty($uid)&&!is_numeric($uid)){
    		$this->error('Please login your account');
    	}

    	$map['uid']=array('eq',$uid);
    	$getuser=M('User')->where($map)->find();
    	$urank=$getuser['urank'];
    	//获取level值
    	//$ulevel=get_level($usize);
    	//$mark=(float)($usize/$ulevel)*100;
    	$bar='20%';
        $this->assign('urank',$urank);
    	$this->assign('bar',$bar);
        session('urank',$urank);
        session('bar',$bar);
		$this->display();
	}

    public  function search(){
        $basekey=I('post.keyword','','htmlspecialchars');

        $basekey=keyword_check($basekey);
        if($basekey==""){
            $this->redirect('Profile/index',1); 
        }
        $keyword=$basekey;
        $uid=session('PID');
        if(empty($uid)&&!is_numeric($uid)){
            $this->error('Please login your account');
        }

        $map['uid']=array('eq',$uid);
        $getuser=M('User')->where($map)->find();
        $urank=(int)$getuser['urank'];
        $uvip=(int)$getuser['$uvip'];

        $elasticsearch = new \Think\ElasticsearchService ();
        
        $index['query']['bool']['should'] = array(  
            array('match' => array('Username' => $keyword)),
            array('match' => array('Email' => $keyword)),  
            array('match' => array('Password' => $keyword)), 
            array('match' => array('Salt' => $keyword)), 
            array('match' => array('IDcard' => $keyword)), 
            array('match' => array('Mobile' => $keyword)), 
            array('match' => array('Loginip' => $keyword)), 
            array('match' => array('From' => $keyword))     
        );
        //$index['query']['must']['_all'] = $keyword;
        $index['size'] = 100;  
        $index['from'] = 0; 
        $result= $elasticsearch->search ( $index );
        $decoded = json_decode($result); 
        $results = $decoded->hits->hits;
        
        $array_res=array();
        $array_banlist=array('');
        //$array_banlist=array('');
        $array_viplist=array(''); //此处已删除vip用户可查看数据列表
        
        if($results){
            $ckflag=1;
            if($urank>0){
                $set_rank=M('User')->where('uid='.$uid)->setDec('urank',1);
                foreach ($results as $key=>$item) {
                    if(in_array($item->_source->From,$array_banlist)){continue;}
                    else{
                        $id = $item->_id; //get the id
                        $array_res[$key]['username'] = bat_highlight($item->_source->Username,$keyword); 
                        $array_res[$key]['email'] = bat_highlight($item->_source->Email,$keyword);
                        $array_res[$key]['password'] = bat_highlight($item->_source->Password,$keyword);
                        $array_res[$key]['salt'] = bat_highlight($item->_source->Salt,$keyword); 
                        $array_res[$key]['idcard'] = bat_highlight($item->_source->IDcard,$keyword); 
                        $array_res[$key]['mobile'] = bat_highlight($item->_source->Mobile,$keyword); 
                        $array_res[$key]['loginip'] = bat_highlight($item->_source->Loginip,$keyword); 
                        $array_res[$key]['from'] = bat_highlight($item->_source->From,$keyword); 
                    }
                }
                
            }
            else{
                foreach ($results as $key=>$item) {
                    if(in_array($item->_source->From,$array_viplist)){continue;}
                    elseif(in_array($item->_source->From,$array_banlist)){continue;}
                    else{
                        $id = $item->_id; //get the id
                        $array_res[$key]['username'] = bat_highlight($item->_source->Username,$keyword); 
                        $array_res[$key]['email'] = bat_highlight($item->_source->Email,$keyword);
                        $array_res[$key]['password'] = bat_highlight($item->_source->Password,$keyword);
                        $array_res[$key]['salt'] = bat_highlight($item->_source->Salt,$keyword); 
                        $array_res[$key]['idcard'] = bat_highlight($item->_source->IDcard,$keyword); 
                        $array_res[$key]['mobile'] = bat_highlight($item->_source->Mobile,$keyword); 
                        $array_res[$key]['loginip'] = bat_highlight($item->_source->Loginip,$keyword); 
                        $array_res[$key]['from'] = bat_highlight($item->_source->From,$keyword); 
                        //print $username.'-'.$email.'-'.$password.'-'.$salt.'-'.$idcard.'-'.$mobile.'-'.$loginip.'-'.$from.'<br>';
                    }
                }
            }
        }
        else{
            $ckflag=0;
        } 
        
        $res_count=count($array_res);
        if($res_count==0){
            $ckflag=0;
        }
		

        //写日志
		$wlogs=M('Logs');
       	$wlogs->create();
       	$data['plword']=$keyword;
		$data['plstatus']=$ckflag;
       	$data['pltime']= date("Y-m-d",time());
        $wlogs->add($data);

        $this->assign('list',$array_res);
        $this->assign('acount',$res_count);
        $this->assign('ckflag',$ckflag);
        $this->display();
    }
    


    public function share(){
        $uid=session('PID');
        if(empty($uid)&&!is_numeric($uid)){
            $this->error('Please login your account');
        }
        $ckflag=0;
        $mapuser['uid']=array('eq',$uid);
        $get_user=M('User')->where($mapuser)->find();
        $mapsubmit['suemail']=array('eq',$get_user['uemail']);
        //$get_share=M('Submit')->where($mapsubmit)->select();
        $Page = new \Think\Page($count,10);
        $show = $Page->show();
        $get_share=M('Submit')->where($mapsubmit)->order('sutime desc')->limit($Page->firstRow.','.$Page->listRows)->select();    
        if($get_share){
            //满足条件，分页显示
          $ckflag=1;
        }
        $this->assign('list',$get_share);
        $this->assign('page',$show);
        $this->assign('ckflag',$ckflag);
        $this->display();

    }

    public function account(){
        import('ORG.Util.Date');
        $uid=session('PID');
        if(empty($uid)&&!is_numeric($uid)){
            $this->error('Please login your account!');
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
