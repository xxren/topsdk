<?php
/**
 * TOP API: alibaba.interact.isvdata.queryscore request
 * 
 * @author auto create
 * @since 1.0, 2015.02.12
 */
class AlibabaInteractIsvdataQueryscoreRequest
{
	/** 
	 * 互动实例ID ISV通过绑定互动奖池并且生成互动实例接口 获取该ID
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
		return "alibaba.interact.isvdata.queryscore";
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
