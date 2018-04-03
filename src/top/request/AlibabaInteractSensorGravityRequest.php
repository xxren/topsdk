<?php
/**
 * TOP API: alibaba.interact.sensor.gravity request
 * 
 * @author auto create
 * @since 1.0, 2014.09.24
 */
class AlibabaInteractSensorGravityRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.interact.sensor.gravity";
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
