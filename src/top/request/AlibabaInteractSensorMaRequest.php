<?php
/**
 * TOP API: alibaba.interact.sensor.ma request
 * 
 * @author auto create
 * @since 1.0, 2015.04.22
 */
class AlibabaInteractSensorMaRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.interact.sensor.ma";
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
