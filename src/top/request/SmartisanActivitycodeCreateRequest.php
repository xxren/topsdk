<?php
/**
 * TOP API: taobao.smartisan.activitycode.create request
 * 
 * @author auto create
 * @since 1.0, 2015.04.15
 */
class SmartisanActivitycodeCreateRequest
{
	/** 
	 * 活动所对应的appkey
	 **/
	private $appkey;
	
	/** 
	 * code对应的活动id
	 **/
	private $bizId;
	
	/** 
	 * code过期时长
	 **/
	private $expireDays;
	
	/** 
	 * 用户nick
	 **/
	private $nick;
	
	private $apiParas = array();
	
	public function setAppkey($appkey)
	{
		$this->appkey = $appkey;
		$this->apiParas["appkey"] = $appkey;
	}

	public function getAppkey()
	{
		return $this->appkey;
	}

	public function setBizId($bizId)
	{
		$this->bizId = $bizId;
		$this->apiParas["biz_id"] = $bizId;
	}

	public function getBizId()
	{
		return $this->bizId;
	}

	public function setExpireDays($expireDays)
	{
		$this->expireDays = $expireDays;
		$this->apiParas["expire_days"] = $expireDays;
	}

	public function getExpireDays()
	{
		return $this->expireDays;
	}

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function getApiMethodName()
	{
		return "taobao.smartisan.activitycode.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appkey,"appkey");
		RequestCheckUtil::checkNotNull($this->bizId,"bizId");
		RequestCheckUtil::checkNotNull($this->nick,"nick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
