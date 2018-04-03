<?php
/**
 * TOP API: alibaba.interact.isvadmin.getinteractbysellernick request
 * 
 * @author auto create
 * @since 1.0, 2015.02.12
 */
class AlibabaInteractIsvadminGetinteractbysellernickRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.interact.isvadmin.getinteractbysellernick";
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
