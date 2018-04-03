<?php
/**
 * TOP API: alibaba.interact.sensor.favorites request
 * 
 * @author auto create
 * @since 1.0, 2015.05.25
 */
class AlibabaInteractSensorFavoritesRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.interact.sensor.favorites";
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
