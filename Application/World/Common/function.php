<?php

function check_verify($code, $id = 1){
	$verify = new \Think\Verify();
	return $verify->check($code, $id);
}


function get_uname_byuid($id){
	$map['uid']=array('eq',$id);
	$get_userinfo=M('User')->where($map)->find();
	$uname=$get_userinfo['uname'];
	return $uname;
}




//生成加密salt
function salt() {  
	$length = 8;
	$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';  
	$psalt = '';  
	for ( $i = 0; $i < $length; $i++ )  {    
		$psalt .= $chars[ mt_rand(0, strlen($chars) - 1) ];  
	}  
	return $psalt; 
	}

//产生cookie
function get_cookie($e,$s){
	$length = 8;
	$chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';  
	$csalt = '';  
	for ( $i = 0; $i < $length; $i++ )  {    
		$csalt .= $chars[ mt_rand(0, strlen($chars) - 1) ];  
	}
	$cookie_md5=$csalt.strtoupper(md5(md5($e.$s)));
	return $cookie_md5;
}

//判断登陆
function is_login(){
    $id = session('PID');
    if (empty($id)) {
        return 0;
    } else {
        return 1;
    }
}


function is_vip(){
	$id = session('PID');
	$map['uid']=array('eq',$id);
	$get_uservip=M('User')->where($map)->find();
	$uvip=$get_uservip['uvip'];
	if($uvip==1){
		return 1;
	}
	else{
		return 0;
	}
}


//
function get_rank_byuid($uid){
	if(empty($uid)){
		return '';
	}
	$map['uid']=array('eq',$uid);
	$get_userrank=M('User')->where($map)->find();
	$urank=$get_userrank['urank'];
	$uvip=$get_userrank['uvip'];
	if($uvip==1){
		$rerank="Honor-".(string)$urank;
	}
	else{
		$rerank="Normal";
	}
	return $rerank;
}


function keyword_check($keyword){
	$invalid_list=array("test","fuck","123456","1111","111111","8888","1234","admin","12345","123123","000000");
	if(strlen($keyword)<4){
		$retword="";
	}
	elseif(in_array($keyword,$invalid_list)){
		$retword="";
	}
	else{
		$retword=$keyword;
	}
	return $retword;
}

//
function keyword_explode($keyword){
	$at_dep="@";
	$mail_list=array("126.com","163.com","yeah.net","vip.163.com","vip.126.com","263.net","qq.com","139.com","yahoo.com.cn","21cn.com",
					"sina.com","sohu.com","tom.com","188.com","gmail.com","hotmail.com","yahoo.com","live.com","outlook.com",
					"yahoo.com.hk","yahoo.com.tw","aol.com","msn.com","mail.com","netvigator.com","pchome.com.tw","mail.ru",
					"hknet.com");
	if(strpos($keyword, $at_dep)){
		$domain = strtolower(strstr($keyword, $at_dep));
		$domain=str_replace($at_dep,"",$domain); 
		if(in_array($domain, $mail_list)){
			$newkey=explode($at_dep,$keyword,2);
			return $newkey[0];
		}
		else{
			return $keyword;
		}
	}
	else {
		return $keyword;
	}

}


//高亮显示

function bat_highlight($message,$words,$color = '#ff0000'){
	if(!empty($words)){
		$highlightarray = explode('+',$words);
		$sppos = strrpos($message,chr(0).chr(0).chr(0));
		if($sppos!==FALSE){
			$specialextra = substr($message,$sppos+3);
			$message = substr($message,0,$sppos);
		}
		$message = @preg_replace(array("/(^|>)([^<]+)(?=<|$)/sUe","/<highlight>(.*)<\/highlight>/siU"),array("\highlight('\\2', \$highlightarray, '\\1')","<font color=\"$color\">\\1</font>"),$message);
		if($sppos!==FALSE){
			$message = $message.chr(0).chr(0).chr(0).$specialextra;
		}
	}
	return $message;
}

function highlight($text, $words, $prepend) {
	$text = str_replace('\"', '"', $text);
	foreach($words AS $key => $replaceword) {
		$text = str_replace($replaceword, '<highlight>'.$replaceword.'</highlight>', $text);
	}
	return "$prepend$text";
}

