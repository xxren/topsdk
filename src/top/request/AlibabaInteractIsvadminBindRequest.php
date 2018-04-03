<?php
/**
 * TOP API: alibaba.interact.isvadmin.bind request
 * 
 * @author auto create
 * @since 1.0, 2015.03.04
 */
class AlibabaInteractIsvadminBindRequest
{
	/** 
	 * 互动结束时间
	 **/
	private $endTime;
	
	/** 
	 * 互动实例名称
	 **/
	private $instanceName;
	
	/** 
	 * 描述信息
	 **/
	private $interactDescription;
	
	/** 
	 * 奖池ID
	 **/
	private $lotteryCode;
	
	/** 
	 * 互动开始时间
	 **/
	private $startTime;
	
	private $apiParas = array();
	
	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setInstanceName($instanceName)
	{
		$this->instanceName = $instanceName;
		$this->apiParas["instance_name"] = $instanceName;
	}

	public function getInstanceName()
	{
		return $this->instanceName;
	}

	public function setInteractDescription($interactDescription)
	{
		$this->interactDescription = $interactDescription;
		$this->apiParas["interact_description"] = $interactDescription;
	}

	public function getInteractDescription()
	{
		return $this->interactDescription;
	}

	public function setLotteryCode($lotteryCode)
	{
		$this->lotteryCode = $lotteryCode;
		$this->apiParas["lottery_code"] = $lotteryCode;
	}

	public function getLotteryCode()
	{
		return $this->lotteryCode;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function getApiMethodName()
	{
		return "alibaba.interact.isvadmin.bind";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->instanceName,"instanceName");
		RequestCheckUtil::checkNotNull($this->interactDescription,"interactDescription");
		RequestCheckUtil::checkNotNull($this->lotteryCode,"lotteryCode");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
