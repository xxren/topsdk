<?php
/**
 * TOP API: alibaba.aliqin.flow.wallet.sign request
 * 
 * @author auto create
 * @since 1.0, 2016.02.24
 */
class AlibabaAliqinFlowWalletSignRequest
{
	/** 
	 * 用户昵称
	 **/
	private $userNick;
	
	private $apiParas = array();
	
	public function setUserNick($userNick)
	{
		$this->userNick = $userNick;
		$this->apiParas["user_nick"] = $userNick;
	}

	public function getUserNick()
	{
		return $this->userNick;
	}

	public function getApiMethodName()
	{
		return "alibaba.aliqin.flow.wallet.sign";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->userNick,"userNick");
		RequestCheckUtil::checkMaxLength($this->userNick,64,"userNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
