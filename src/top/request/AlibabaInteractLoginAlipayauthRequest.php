<?php
/**
 * TOP API: alibaba.interact.login.alipayauth request
 * 
 * @author auto create
 * @since 1.0, 2015.10.20
 */
class AlibabaInteractLoginAlipayauthRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.interact.login.alipayauth";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
