<?php
/**
 * TOP API: taobao.weitao.feed.synchronize request
 * 
 * @author auto create
 * @since 1.0, 2015.07.30
 */
class WeitaoFeedSynchronizeRequest
{
	/** 
	 * 活动id
	 **/
	private $bizId;
	
	/** 
	 * feed封面图片url
	 **/
	private $coverPath;
	
	/** 
	 * feed点击跳转的活动地址
	 **/
	private $detailUrl;
	
	/** 
	 * feed展示结束时间
	 **/
	private $endTime;
	
	/** 
	 * feed展示开始时间
	 **/
	private $startTime;
	
	/** 
	 * feed描述
	 **/
	private $summary;
	
	/** 
	 * feed标题
	 **/
	private $title;
	
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

	public function setCoverPath($coverPath)
	{
		$this->coverPath = $coverPath;
		$this->apiParas["cover_path"] = $coverPath;
	}

	public function getCoverPath()
	{
		return $this->coverPath;
	}

	public function setDetailUrl($detailUrl)
	{
		$this->detailUrl = $detailUrl;
		$this->apiParas["detail_url"] = $detailUrl;
	}

	public function getDetailUrl()
	{
		return $this->detailUrl;
	}

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function setSummary($summary)
	{
		$this->summary = $summary;
		$this->apiParas["summary"] = $summary;
	}

	public function getSummary()
	{
		return $this->summary;
	}

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function getApiMethodName()
	{
		return "taobao.weitao.feed.synchronize";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizId,"bizId");
		RequestCheckUtil::checkNotNull($this->coverPath,"coverPath");
		RequestCheckUtil::checkNotNull($this->detailUrl,"detailUrl");
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
		RequestCheckUtil::checkNotNull($this->summary,"summary");
		RequestCheckUtil::checkNotNull($this->title,"title");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
