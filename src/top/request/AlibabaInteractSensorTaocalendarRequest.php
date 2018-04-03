<?php
/**
 * TOP API: alibaba.interact.sensor.taocalendar request
 * 
 * @author auto create
 * @since 1.0, 2015.03.16
 */
class AlibabaInteractSensorTaocalendarRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.interact.sensor.taocalendar";
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
