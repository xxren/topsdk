<?php
/**
 * TOP API: taobao.coin.token.get request
 * 
 * @author auto create
 * @since 1.0, 2015.01.15
 */
class CoinTokenGetRequest
{
	/** 
	 * 买家nick, 使用top混淆nick
	 **/
	private $buyerNick;
	
	/** 
	 * 需要二次验证时，用户识别的验证码字符串
	 **/
	private $checkCode;
	
	/** 
	 * 原请求头部信息
	 **/
	private $header;
	
	/** 
	 * 客户端IP
	 **/
	private $remoteIp;
	
	/** 
	 * 原请求头部信息
	 **/
	private $userAgent;
	
	/** 
	 * 原请求头部信息
	 **/
	private $xForwardedFor;
	
	private $apiParas = array();
	
	public function setBuyerNick($buyerNick)
	{
		$this->buyerNick = $buyerNick;
		$this->apiParas["buyer_nick"] = $buyerNick;
	}

	public function getBuyerNick()
	{
		return $this->buyerNick;
	}

	public function setCheckCode($checkCode)
	{
		$this->checkCode = $checkCode;
		$this->apiParas["check_code"] = $checkCode;
	}

	public function getCheckCode()
	{
		return $this->checkCode;
	}

	public function setHeader($header)
	{
		$this->header = $header;
		$this->apiParas["header"] = $header;
	}

	public function getHeader()
	{
		return $this->header;
	}

	public function setRemoteIp($remoteIp)
	{
		$this->remoteIp = $remoteIp;
		$this->apiParas["remote_ip"] = $remoteIp;
	}

	public function getRemoteIp()
	{
		return $this->remoteIp;
	}

	public function setUserAgent($userAgent)
	{
		$this->userAgent = $userAgent;
		$this->apiParas["user_agent"] = $userAgent;
	}

	public function getUserAgent()
	{
		return $this->userAgent;
	}

	public function setxForwardedFor($xForwardedFor)
	{
		$this->xForwardedFor = $xForwardedFor;
		$this->apiParas["x_forwarded_for"] = $xForwardedFor;
	}

	public function getxForwardedFor()
	{
		return $this->xForwardedFor;
	}

	public function getApiMethodName()
	{
		return "taobao.coin.token.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buyerNick,"buyerNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
