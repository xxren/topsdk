<?php
/**
 * TOP API: alibaba.aliqin.flow.wallet.send.flow request
 * 
 * @author auto create
 * @since 1.0, 2017.11.13
 */
class AlibabaAliqinFlowWalletSendFlowRequest
{
	/** 
	 * 设置true为始终发送成功
	 **/
	private $always;
	
	/** 
	 * 混淆用户名
	 **/
	private $buyerNick;
	
	/** 
	 * 流量
	 **/
	private $flow;
	
	/** 
	 * 真实用户名称，如果填写这个字段，buyer_nick失效
	 **/
	private $realNick;
	
	/** 
	 * 购物送
	 **/
	private $reason;
	
	/** 
	 * 唯一流水号，字母+数字组合
	 **/
	private $serial;
	
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

	public function setBuyerNick($buyerNick)
	{
		$this->buyerNick = $buyerNick;
		$this->apiParas["buyer_nick"] = $buyerNick;
	}

	public function getBuyerNick()
	{
		return $this->buyerNick;
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

	public function setRealNick($realNick)
	{
		$this->realNick = $realNick;
		$this->apiParas["real_nick"] = $realNick;
	}

	public function getRealNick()
	{
		return $this->realNick;
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

	public function getApiMethodName()
	{
		return "alibaba.aliqin.flow.wallet.send.flow";
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
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
