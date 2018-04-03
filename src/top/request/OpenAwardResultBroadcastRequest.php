<?php
/**
 * TOP API: taobao.open.award.result.broadcast request
 * 
 * @author auto create
 * @since 1.0, 2015.03.18
 */
class OpenAwardResultBroadcastRequest
{
	/** 
	 * 系统自动生成
	 **/
	private $awardAmount;
	
	/** 
	 * 系统自动生成
	 **/
	private $awardDescription;
	
	/** 
	 * 系统自动生成
	 **/
	private $awardFinished;
	
	/** 
	 * 系统自动生成
	 **/
	private $awardItemIds;
	
	/** 
	 * 系统自动生成
	 **/
	private $awardType;
	
	/** 
	 * 系统自动生成
	 **/
	private $mixUserid;
	
	private $apiParas = array();
	
	public function setAwardAmount($awardAmount)
	{
		$this->awardAmount = $awardAmount;
		$this->apiParas["award_amount"] = $awardAmount;
	}

	public function getAwardAmount()
	{
		return $this->awardAmount;
	}

	public function setAwardDescription($awardDescription)
	{
		$this->awardDescription = $awardDescription;
		$this->apiParas["award_description"] = $awardDescription;
	}

	public function getAwardDescription()
	{
		return $this->awardDescription;
	}

	public function setAwardFinished($awardFinished)
	{
		$this->awardFinished = $awardFinished;
		$this->apiParas["award_finished"] = $awardFinished;
	}

	public function getAwardFinished()
	{
		return $this->awardFinished;
	}

	public function setAwardItemIds($awardItemIds)
	{
		$this->awardItemIds = $awardItemIds;
		$this->apiParas["award_item_ids"] = $awardItemIds;
	}

	public function getAwardItemIds()
	{
		return $this->awardItemIds;
	}

	public function setAwardType($awardType)
	{
		$this->awardType = $awardType;
		$this->apiParas["award_type"] = $awardType;
	}

	public function getAwardType()
	{
		return $this->awardType;
	}

	public function setMixUserid($mixUserid)
	{
		$this->mixUserid = $mixUserid;
		$this->apiParas["mix_userid"] = $mixUserid;
	}

	public function getMixUserid()
	{
		return $this->mixUserid;
	}

	public function getApiMethodName()
	{
		return "taobao.open.award.result.broadcast";
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
