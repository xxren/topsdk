<?php
/**
 * TOP API: alibaba.interact.activity.addcomment request
 * 
 * @author auto create
 * @since 1.0, 2015.10.12
 */
class AlibabaInteractActivityAddcommentRequest
{
	/** 
	 * 发评论的业务id
	 **/
	private $bizId;
	
	/** 
	 * 该字段为评论内容
	 **/
	private $content;
	
	/** 
	 * 评论feedid
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

	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
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
		return "alibaba.interact.activity.addcomment";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizId,"bizId");
		RequestCheckUtil::checkNotNull($this->content,"content");
		RequestCheckUtil::checkNotNull($this->feedId,"feedId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
