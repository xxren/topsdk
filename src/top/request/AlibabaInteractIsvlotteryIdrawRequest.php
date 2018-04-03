<?php
/**
 * TOP API: alibaba.interact.isvlottery.idraw request
 * 
 * @author auto create
 * @since 1.0, 2016.09.20
 */
class AlibabaInteractIsvlotteryIdrawRequest
{
	/** 
	 * 抽奖ID列表 用逗号隔开
	 **/
	private $awardIds;
	
	/** 
	 * 互动实例ID
	 **/
	private $interactId;
	
	/** 
	 * 埋点参数
	 **/
	private $ua;
	
	private $apiParas = array();
	
	public function setAwardIds($awardIds)
	{
		$this->awardIds = $awardIds;
		$this->apiParas["award_ids"] = $awardIds;
	}

	public function getAwardIds()
	{
		return $this->awardIds;
	}

	public function setInteractId($interactId)
	{
		$this->interactId = $interactId;
		$this->apiParas["interact_id"] = $interactId;
	}

	public function getInteractId()
	{
		return $this->interactId;
	}

	public function setUa($ua)
	{
		$this->ua = $ua;
		$this->apiParas["ua"] = $ua;
	}

	public function getUa()
	{
		return $this->ua;
	}

	public function getApiMethodName()
	{
		return "alibaba.interact.isvlottery.idraw";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->interactId,"interactId");
		RequestCheckUtil::checkNotNull($this->ua,"ua");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
