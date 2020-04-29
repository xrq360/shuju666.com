<?php
namespace Home\Controller;
use Think\Controller;
class ArchiveController extends Controller {
    public function index(){
        $ckflag=0;
        //$mapuser['uid']=array('eq',$uid);
        //$get_user=M('User')->where($mapuser)->find();
        //$mapsubmit['suemail']=array('eq',$get_user['uemail']);
        //$get_share=M('Submit')->where($mapsubmit)->select();
		$maplogs['plstatus']=array('eq',1);
		$count=M('Logs')->where($maplogs)->count('distinct(plword)');
        $Page = new \Think\Page($count,15);
        $show = $Page->show();
        $get_share=M('Logs')->group('plword')->where($maplogs)->order('plid desc')->limit($Page->firstRow.','.$Page->listRows)->select();    
        if($get_share){
            //满足条件，分页显示
          $ckflag=1;
        }
        $this->assign('list',$get_share);
        $this->assign('page',$show);
        $this->assign('ckflag',$ckflag);
        $this->display();
	}
	
    public function pymonitor(){
        //$ckflag=0;
		$maplogs['plstatus']=array('eq',1);
		$count=M('Logs')->where($maplogs)->count('distinct(plword)');
		echo $count;	
	}
	
    public function bymonth(){
        $ckflag=0;
		$bym=I('get.m','','htmlspecialchars');
		$mapmonth['pltime']=array('like',$bym."%");
		$mapmonth['plstatus']=array('eq',1);
		$get_month=M('Logs')->distinct(true)->field('pltime')->where($mapmonth)->select();
        if($get_month){
          $ckflag=1;
        }
        $this->assign('list',$get_month);
		$this->assign('month',$bym);
        $this->assign('ckflag',$ckflag);
        $this->display();
	}
	
	public function byday(){
        $ckflag=0;
		$byd=I('get.d','','htmlspecialchars');
		$mapday['pltime']=array('like',$byd);
		$mapday['plstatus']=array('eq',1);
		$count=M('Logs')->where($mapday)->count();
        $Page = new \Think\Page($count,15);
        $show = $Page->show();
        $get_day=M('Logs')->distinct(true)->field('plword')->where($mapday)->order('plid desc')->limit($Page->firstRow.','.$Page->listRows)->select();    
        if($get_day){
          $ckflag=1;
        }
        $this->assign('list',$get_day);
		$this->assign('day',$byd);
		$this->assign('page',$show);
        $this->assign('ckflag',$ckflag);
        $this->display();
	}

    public  function leaked(){
        $basekey=I('get.history');
        //$basekey=keyword_check($basekey);
        if($basekey==""){
            $this->redirect('Archive/index',1); 
        }
        $keyword=$basekey;

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
        $array_banlist=array('ssa.gov','nhi.gov.tw');
        //$array_banlist=array('');
        $array_viplist=array('');
		$urank=1;
        
        if($results){
            $ckflag=1;
            if($urank>0){
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

        $this->assign('list',$array_res);
		$this->assign('lword',$keyword);
        $this->assign('acount',$res_count);
        $this->assign('ckflag',$ckflag);
        $this->display();
    }
    





}