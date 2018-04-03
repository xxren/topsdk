<?php
/**
 * TOP API: alibaba.interact.sensor.gutil request
 * 
 * @author auto create
 * @since 1.0, 2014.10.14
 */
class AlibabaInteractSensorGutilRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.interact.sensor.gutil";
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
