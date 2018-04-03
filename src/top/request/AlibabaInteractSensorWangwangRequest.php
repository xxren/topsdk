<?php
/**
 * TOP API: alibaba.interact.sensor.wangwang request
 * 
 * @author auto create
 * @since 1.0, 2015.05.22
 */
class AlibabaInteractSensorWangwangRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.interact.sensor.wangwang";
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
