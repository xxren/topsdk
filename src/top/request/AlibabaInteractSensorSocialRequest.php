<?php
/**
 * TOP API: alibaba.interact.sensor.social request
 * 
 * @author auto create
 * @since 1.0, 2015.02.12
 */
class AlibabaInteractSensorSocialRequest
{
	/** 
	 * 系统自动生成
	 **/
	private $id;
	
	private $apiParas = array();
	
	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getApiMethodName()
	{
		return "alibaba.interact.sensor.social";
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
