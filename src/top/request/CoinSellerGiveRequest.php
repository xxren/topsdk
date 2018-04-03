<?php
/**
 * TOP API: taobao.coin.seller.give request
 * 
 * @author auto create
 * @since 1.0, 2015.01.15
 */
class CoinSellerGiveRequest
{
	/** 
	 * 本次发放金币数
	 **/
	private $amount;
	
	/** 
	 * APP自行扩展字段，key-value对
	 **/
	private $attributes;
	
	/** 
	 * 用户nick，使用top混淆nick
	 **/
	private $buyerNick;
	
	/** 
	 * 本次流转备注
	 **/
	private $comments;
	
	/** 
	 * 与本次金币操作关联的外键ID（app范围内唯一），如提供，作为本接口幂等校验的依据。
	 **/
	private $outId;
	
	/** 
	 * 淘金币平台活动ID
	 **/
	private $tbActivityId;
	
	/** 
	 * 淘金币令牌
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

	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		$this->apiParas["attributes"] = $attributes;
	}

	public function getAttributes()
	{
		return $this->attributes;
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

	public function setOutId($outId)
	{
		$this->outId = $outId;
		$this->apiParas["out_id"] = $outId;
	}

	public function getOutId()
	{
		return $this->outId;
	}

	public function setTbActivityId($tbActivityId)
	{
		$this->tbActivityId = $tbActivityId;
		$this->apiParas["tb_activity_id"] = $tbActivityId;
	}

	public function getTbActivityId()
	{
		return $this->tbActivityId;
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
		return "taobao.coin.seller.give";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->amount,"amount");
		RequestCheckUtil::checkNotNull($this->buyerNick,"buyerNick");
		RequestCheckUtil::checkNotNull($this->tbActivityId,"tbActivityId");
		RequestCheckUtil::checkNotNull($this->token,"token");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
