<?php
/**
 * TOP API: alibaba.interact.activity.pushtoalicom request
 * 
 * @author auto create
 * @since 1.0, 2015.07.03
 */
class AlibabaInteractActivityPushtoalicomRequest
{
	/** 
	 * 推送到流量聚乐部的banner图
	 **/
	private $bannerUrl;
	
	/** 
	 * 推送到流量聚乐部的活动bizid
	 **/
	private $bizId;
	
	private $apiParas = array();
	
	public function setBannerUrl($bannerUrl)
	{
		$this->bannerUrl = $bannerUrl;
		$this->apiParas["banner_url"] = $bannerUrl;
	}

	public function getBannerUrl()
	{
		return $this->bannerUrl;
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

	public function getApiMethodName()
	{
		return "alibaba.interact.activity.pushtoalicom";
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
