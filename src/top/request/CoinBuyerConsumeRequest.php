<?php
/**
 * TOP API: taobao.coin.buyer.consume request
 * 
 * @author auto create
 * @since 1.0, 2015.01.15
 */
class CoinBuyerConsumeRequest
{
	/** 
	 * 本次消耗的金币数
	 **/
	private $amount;
	
	/** 
	 * 买家nick，使用top混淆nick
	 **/
	private $buyerNick;
	
	/** 
	 * 备注
	 **/
	private $comments;
	
	/** 
	 * 应用扩展属性
	 **/
	private $feature;
	
	/** 
	 * 与本次金币操作关联的外键ID（app范围内唯一），如提供，作为本接口幂等校验的依据。
	 **/
	private $outId;
	
	/** 
	 * 外键父ID
	 **/
	private $outParentId;
	
	/** 
	 * 令牌
	 **/
	private $token;
	
	private $apiParas = array();
	
	public function setAmount($amount)
	{
		$this->amount = $amount;
		$this->apiParas["amount"] = $amount;
	}

	public function getAmount()
	{
		return $this->amount;
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

	public function setComments($comments)
	{
		$this->comments = $comments;
		$this->apiParas["comments"] = $comments;
	}

	public function getComments()
	{
		return $this->comments;
	}

	public function setFeature($feature)
	{
		$this->feature = $feature;
		$this->apiParas["feature"] = $feature;
	}

	public function getFeature()
	{
		return $this->feature;
	}

	public function setOutId($outId)
	{
		$this->outId = $outId;
		$this->apiParas["out_id"] = $outId;
	}

	public function getOutId()
	{
		return $this->outId;
	}

	public function setOutParentId($outParentId)
	{
		$this->outParentId = $outParentId;
		$this->apiParas["out_parent_id"] = $outParentId;
	}

	public function getOutParentId()
	{
		return $this->outParentId;
	}

	public function setToken($token)
	{
		$this->token = $token;
		$this->apiParas["token"] = $token;
	}

	public function getToken()
	{
		return $this->token;
	}

	public function getApiMethodName()
	{
		return "taobao.coin.buyer.consume";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->amount,"amount");
		RequestCheckUtil::checkNotNull($this->buyerNick,"buyerNick");
		RequestCheckUtil::checkNotNull($this->token,"token");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
