<?php
/**
 * TOP API: taobao.mobile.promotion.benefit.activity.send.share request
 * 
 * @author auto create
 * @since 1.0, 2015.09.24
 */
class MobilePromotionBenefitActivitySendShareRequest
{
	/** 
	 * 权益类型    其中ALIPAY_COUPON 对应的type值是1
	 **/
	private $benefitType;
	
	/** 
	 * 权益关联的活动ID
	 **/
	private $bizId;
	
	/** 
	 * 活动详情id
	 **/
	private $detailId;
	
	/** 
	 * 广播ID
	 **/
	private $feedId;
	
	/** 
	 * 关联活动id
	 **/
	private $relationId;
	
	/** 
	 * 权益发放数量
	 **/
	private $sendCount;
	
	/** 
	 * 和bizId一起使用，标记分享链路的key。
	 **/
	private $shareKey;
	
	/** 
	 * 分享链路上的用户及用户是否发奖，u1_true,u2_true
	 **/
	private $shareUsers;
	
	/** 
	 * 调试线索
	 **/
	private $traceId;
	
	/** 
	 * 事务id
	 **/
	private $uniqueId;
	
	private $apiParas = array();
	
	public function setBenefitType($benefitType)
	{
		$this->benefitType = $benefitType;
		$this->apiParas["benefit_type"] = $benefitType;
	}

	public function getBenefitType()
	{
		return $this->benefitType;
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

	public function setDetailId($detailId)
	{
		$this->detailId = $detailId;
		$this->apiParas["detail_id"] = $detailId;
	}

	public function getDetailId()
	{
		return $this->detailId;
	}

	public function setFeedId($feedId)
	{
		$this->feedId = $feedId;
		$this->apiParas["feed_id"] = $feedId;
	}

	public function getFeedId()
	{
		return $this->feedId;
	}

	public function setRelationId($relationId)
	{
		$this->relationId = $relationId;
		$this->apiParas["relation_id"] = $relationId;
	}

	public function getRelationId()
	{
		return $this->relationId;
	}

	public function setSendCount($sendCount)
	{
		$this->sendCount = $sendCount;
		$this->apiParas["send_count"] = $sendCount;
	}

	public function getSendCount()
	{
		return $this->sendCount;
	}

	public function setShareKey($shareKey)
	{
		$this->shareKey = $shareKey;
		$this->apiParas["share_key"] = $shareKey;
	}

	public function getShareKey()
	{
		return $this->shareKey;
	}

	public function setShareUsers($shareUsers)
	{
		$this->shareUsers = $shareUsers;
		$this->apiParas["share_users"] = $shareUsers;
	}

	public function getShareUsers()
	{
		return $this->shareUsers;
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

	public function setUniqueId($uniqueId)
	{
		$this->uniqueId = $uniqueId;
		$this->apiParas["unique_id"] = $uniqueId;
	}

	public function getUniqueId()
	{
		return $this->uniqueId;
	}

	public function getApiMethodName()
	{
		return "taobao.mobile.promotion.benefit.activity.send.share";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->benefitType,"benefitType");
		RequestCheckUtil::checkNotNull($this->bizId,"bizId");
		RequestCheckUtil::checkNotNull($this->detailId,"detailId");
		RequestCheckUtil::checkNotNull($this->feedId,"feedId");
		RequestCheckUtil::checkNotNull($this->relationId,"relationId");
		RequestCheckUtil::checkNotNull($this->sendCount,"sendCount");
		RequestCheckUtil::checkNotNull($this->traceId,"traceId");
		RequestCheckUtil::checkNotNull($this->uniqueId,"uniqueId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
