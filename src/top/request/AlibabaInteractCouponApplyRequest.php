<?php
/**
 * TOP API: alibaba.interact.coupon.apply request
 * 
 * @author auto create
 * @since 1.0, 2015.12.30
 */
class AlibabaInteractCouponApplyRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.interact.coupon.apply";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
