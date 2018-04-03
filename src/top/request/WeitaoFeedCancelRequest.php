<?php
/**
 * TOP API: taobao.weitao.feed.cancel request
 * 
 * @author auto create
 * @since 1.0, 2015.09.16
 */
class WeitaoFeedCancelRequest
{
	/** 
	 * 三方活动ID
	 **/
	private $bizId;
	
	/** 
	 * 是否彻底删除（店铺动态不可见，等同卖家广播后台删除），默认false
	 **/
	private $delete;
	
	/** 
	 * 广播id
	 **/
	private $feedId;
	
	private $apiParas = array();
	
	public function setBizId($bizId)
	{
		$this->bizId = $bizId;
		$this->apiParas["biz_id"] = $bizId;
	}

	public function getBizId()
	{
		return $this->bizId;
	}

	public function setDelete($delete)
	{
		$this->delete = $delete;
		$this->apiParas["delete"] = $delete;
	}

	public function getDelete()
	{
		return $this->delete;
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

	public function getApiMethodName()
	{
		return "taobao.weitao.feed.cancel";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizId,"bizId");
		RequestCheckUtil::checkNotNull($this->feedId,"feedId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
