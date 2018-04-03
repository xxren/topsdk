<?php
/**
 * TOP API: alibaba.interact.sensor.audio request
 * 
 * @author auto create
 * @since 1.0, 2014.09.24
 */
class AlibabaInteractSensorAudioRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.interact.sensor.audio";
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
