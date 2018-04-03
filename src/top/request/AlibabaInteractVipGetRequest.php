<?php
/**
 * TOP API: alibaba.interact.vip.get request
 * 
 * @author auto create
 * @since 1.0, 2017.04.20
 */
class AlibabaInteractVipGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.interact.vip.get";
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
