<?php
namespace Mobile\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
	}
	
	
	public  function search(){
        $basekey=I('post.keyword','','htmlspecialchars');

        $basekey=keyword_check($basekey);
        if($basekey==""){
            $this->redirect('Index/index',1); 
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
        $index['size'] = 20;  
        $index['from'] = 0; 
        $result= $elasticsearch->search ( $index );
        $decoded = json_decode($result); 
        $results = $decoded->hits->hits;
        
        $array_res=array();
        $array_banlist=array('ssa.gov','nhi.gov.tw');
        //$array_banlist=array('');
        $array_viplist=array('homeinns.com');
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
		$this->assign('kword',$keyword);
        $this->display();
    }
    



}