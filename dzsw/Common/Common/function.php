<?php
function judgeCookie(){
    $value = cookie('user');
	// 判断用户是否登陆
	if($value){
    	return $value;
    }else{
    	return false;
    }
}