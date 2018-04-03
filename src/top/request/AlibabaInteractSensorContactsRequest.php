<?php
/**
 * TOP API: alibaba.interact.sensor.contacts request
 * 
 * @author auto create
 * @since 1.0, 2014.10.10
 */
class AlibabaInteractSensorContactsRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.interact.sensor.contacts";
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
