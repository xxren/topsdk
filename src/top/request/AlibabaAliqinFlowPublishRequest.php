<?php
/**
 * TOP API: alibaba.aliqin.flow.publish request
 * 
 * @author auto create
 * @since 1.0, 2015.03.11
 */
class AlibabaAliqinFlowPublishRequest
{
	/** 
	 * 设置true为始终发送成功
	 **/
	private $always;
	
	/** 
	 * 流量
	 **/
	private $flow;
	
	/** 
	 * 原因
	 **/
	private $reason;
	
	/** 
	 * 唯一流水号（字母+数字）
	 **/
	private $serial;
	
	/** 
	 * 用户id
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setAlways($always)
	{
		$this->always = $always;
		$this->apiParas["always"] = $always;
	}

	public function getAlways()
	{
		return $this->always;
	}

	public function setFlow($flow)
	{
		$this->flow = $flow;
		$this->apiParas["flow"] = $flow;
	}

	public function getFlow()
	{
		return $this->flow;
	}

	public function setReason($reason)
	{
		$this->reason = $reason;
		$this->apiParas["reason"] = $reason;
	}

	public function getReason()
	{
		return $this->reason;
	}

	public function setSerial($serial)
	{
		$this->serial = $serial;
		$this->apiParas["serial"] = $serial;
	}

	public function getSerial()
	{
		return $this->serial;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "alibaba.aliqin.flow.publish";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->flow,"flow");
		RequestCheckUtil::checkNotNull($this->reason,"reason");
		RequestCheckUtil::checkNotNull($this->serial,"serial");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
