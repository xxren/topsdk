<?php
/**
 * TOP API: alibaba.interact.sensor.login request
 * 
 * @author auto create
 * @since 1.0, 2014.09.15
 */
class AlibabaInteractSensorLoginRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.interact.sensor.login";
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
