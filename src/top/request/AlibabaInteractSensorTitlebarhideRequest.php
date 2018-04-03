<?php
/**
 * TOP API: alibaba.interact.sensor.titlebarhide request
 * 
 * @author auto create
 * @since 1.0, 2014.09.15
 */
class AlibabaInteractSensorTitlebarhideRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.interact.sensor.titlebarhide";
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
