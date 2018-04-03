<?php
/**
 * TOP API: alibaba.interact.sensor.networkstatus request
 * 
 * @author auto create
 * @since 1.0, 2014.09.15
 */
class AlibabaInteractSensorNetworkstatusRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.interact.sensor.networkstatus";
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
