<?php
/**
 * TOP API: alibaba.interact.tida.onecode.issue request
 * 
 * @author auto create
 * @since 1.0, 2016.05.16
 */
class AlibabaInteractTidaOnecodeIssueRequest
{
	/** 
	 * 支持onecode的接口，令牌对应接口
	 **/
	private $api;
	
	/** 
	 * 透传参数
	 **/
	private $bizExtString;
	
	/** 
	 * 手淘登陆用户混淆nick
	 **/
	private $mixUserNick;
	
	/** 
	 * 安全过滤结果，是否安全。
	 **/
	private $safety;
	
	/** 
	 * 支持onecode的接口单次调用令牌
	 **/
	private $ticket;
	
	/** 
	 * 唯一。单次请求调试信息，可作为请求记录ID
	 **/
	private $traceId;
	
	private $apiParas = array();
	
	public function setApi($api)
	{
		$this->api = $api;
		$this->apiParas["api"] = $api;
	}

	public function getApi()
	{
		return $this->api;
	}

	public function setBizExtString($bizExtString)
	{
		$this->bizExtString = $bizExtString;
		$this->apiParas["biz_ext_string"] = $bizExtString;
	}

	public function getBizExtString()
	{
		return $this->bizExtString;
	}

	public function setMixUserNick($mixUserNick)
	{
		$this->mixUserNick = $mixUserNick;
		$this->apiParas["mix_user_nick"] = $mixUserNick;
	}

	public function getMixUserNick()
	{
		return $this->mixUserNick;
	}

	public function setSafety($safety)
	{
		$this->safety = $safety;
		$this->apiParas["safety"] = $safety;
	}

	public function getSafety()
	{
		return $this->safety;
	}

	public function setTicket($ticket)
	{
		$this->ticket = $ticket;
		$this->apiParas["ticket"] = $ticket;
	}

	public function getTicket()
	{
		return $this->ticket;
	}

	public function setTraceId($traceId)
	{
		$this->traceId = $traceId;
		$this->apiParas["trace_id"] = $traceId;
	}

	public function getTraceId()
	{
		return $this->traceId;
	}

	public function getApiMethodName()
	{
		return "alibaba.interact.tida.onecode.issue";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->api,"api");
		RequestCheckUtil::checkNotNull($this->mixUserNick,"mixUserNick");
		RequestCheckUtil::checkNotNull($this->ticket,"ticket");
		RequestCheckUtil::checkNotNull($this->traceId,"traceId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
