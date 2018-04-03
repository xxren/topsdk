<?php
/**
 * TOP API: alibaba.interact.isvdata.savescore request
 * 
 * @author auto create
 * @since 1.0, 2015.02.12
 */
class AlibabaInteractIsvdataSavescoreRequest
{
	/** 
	 * 互动实例ID
	 **/
	private $interactId;
	
	/** 
	 * 用户分数
	 **/
	private $score;
	
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

	public function setScore($score)
	{
		$this->score = $score;
		$this->apiParas["score"] = $score;
	}

	public function getScore()
	{
		return $this->score;
	}

	public function getApiMethodName()
	{
		return "alibaba.interact.isvdata.savescore";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->interactId,"interactId");
		RequestCheckUtil::checkNotNull($this->score,"score");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
