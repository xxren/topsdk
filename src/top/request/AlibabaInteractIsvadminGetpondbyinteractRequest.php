<?php
/**
 * TOP API: alibaba.interact.isvadmin.getpondbyinteract request
 * 
 * @author auto create
 * @since 1.0, 2015.02.12
 */
class AlibabaInteractIsvadminGetpondbyinteractRequest
{
	/** 
	 * 互动实例ID
	 **/
	private $interactId;
	
	private $apiParas = array();
	
	public function setInteractId($interactId)
	{
		$this->interactId = $interactId;
		$this->apiParas["interact_id"] = $interactId;
	}

	public function getInteractId()
	{
		return $this->interactId;
	}

	public function getApiMethodName()
	{
		return "alibaba.interact.isvadmin.getpondbyinteract";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->interactId,"interactId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
