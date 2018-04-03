<?php
/**
 * TOP API: alibaba.interact.current.mixusernick request
 * 
 * @author auto create
 * @since 1.0, 2015.06.12
 */
class AlibabaInteractCurrentMixusernickRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.interact.current.mixusernick";
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
