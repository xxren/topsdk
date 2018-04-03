<?php
/**
 * TOP API: alibaba.interact.sensor.shake request
 * 
 * @author auto create
 * @since 1.0, 2014.09.15
 */
class AlibabaInteractSensorShakeRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.interact.sensor.shake";
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
