<?php
/**
 * TOP API: alibaba.interact.activity.apply request
 * 
 * @author auto create
 * @since 1.0, 2016.11.11
 */
class AlibabaInteractActivityApplyRequest
{
	/** 
	 * 报名参加中心化流量活动的活动id
	 **/
	private $activityBizId;
	
	/** 
	 * 报名参加的中心化流量活动的banner 地址
	 **/
	private $bannerUrl;
	
	/** 
	 * 权益总额
	 **/
	private $benefitAmount;
	
	/** 
	 * 权益属性(如红包，则为relationid)
	 **/
	private $benefitAttribute;
	
	/** 
	 * 权益对应的面额
	 **/
	private $benefitDenomination;
	
	/** 
	 * 活动发放的权益类型，1:支付宝红包2:流量包3:淘金币4:集分宝5:优惠卷
	 **/
	private $benefitType;
	
	/** 
	 * 该活动参与的中心化流量活动。1:代表每日赢宝箱2:微淘广场
	 **/
	private $bizType;
	
	private $apiParas = array();
	
	public function setActivityBizId($activityBizId)
	{
		$this->activityBizId = $activityBizId;
		$this->apiParas["activity_biz_id"] = $activityBizId;
	}

	public function getActivityBizId()
	{
		return $this->activityBizId;
	}

	public function setBannerUrl($bannerUrl)
	{
		$this->bannerUrl = $bannerUrl;
		$this->apiParas["banner_url"] = $bannerUrl;
	}

	public function getBannerUrl()
	{
		return $this->bannerUrl;
	}

	public function setBenefitAmount($benefitAmount)
	{
		$this->benefitAmount = $benefitAmount;
		$this->apiParas["benefit_amount"] = $benefitAmount;
	}

	public function getBenefitAmount()
	{
		return $this->benefitAmount;
	}

	public function setBenefitAttribute($benefitAttribute)
	{
		$this->benefitAttribute = $benefitAttribute;
		$this->apiParas["benefit_attribute"] = $benefitAttribute;
	}

	public function getBenefitAttribute()
	{
		return $this->benefitAttribute;
	}

	public function setBenefitDenomination($benefitDenomination)
	{
		$this->benefitDenomination = $benefitDenomination;
		$this->apiParas["benefit_denomination"] = $benefitDenomination;
	}

	public function getBenefitDenomination()
	{
		return $this->benefitDenomination;
	}

	public function setBenefitType($benefitType)
	{
		$this->benefitType = $benefitType;
		$this->apiParas["benefit_type"] = $benefitType;
	}

	public function getBenefitType()
	{
		return $this->benefitType;
	}

	public function setBizType($bizType)
	{
		$this->bizType = $bizType;
		$this->apiParas["biz_type"] = $bizType;
	}

	public function getBizType()
	{
		return $this->bizType;
	}

	public function getApiMethodName()
	{
		return "alibaba.interact.activity.apply";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->activityBizId,"activityBizId");
		RequestCheckUtil::checkNotNull($this->bannerUrl,"bannerUrl");
		RequestCheckUtil::checkNotNull($this->benefitAttribute,"benefitAttribute");
		RequestCheckUtil::checkNotNull($this->benefitType,"benefitType");
		RequestCheckUtil::checkNotNull($this->bizType,"bizType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
