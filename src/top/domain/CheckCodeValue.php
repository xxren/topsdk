<?php

/**
 * 验证码信息
 * @author auto create
 */
class CheckCodeValue
{
	
	/** 
	 * 验证码图片URL
	 **/
	public $check_code_url;
	
	/** 
	 * 0-不需要验证码，1-验证通过，-1-需要验证码，-2-验证码错误
	 **/
	public $status;	
}
?>