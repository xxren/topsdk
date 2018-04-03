<?php
/**
 * TOP API: taobao.weitao.feed.synchronize.new request
 * 
 * @author auto create
 * @since 1.0, 2015.09.18
 */
class WeitaoFeedSynchronizeNewRequest
{
	/** 
	 * feed点击跳转的活动地址
	 **/
	private $detailUrl;
	
	/** 
	 * feed展示结束时间
	 **/
	private $endTime;
	
	/** 
	 * 广播类型：粉丝猜价格461、投票有礼462、粉丝抢红包463、盖楼有礼464、加购有礼465
	 **/
	private $feedType;
	
	/** 
	 * 宝贝列表，用于card展示，0~2个宝贝ID
	 **/
	private $itemIds;
	
	/** 
	 * 活动ID
	 **/
	private $sbizId;
	
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

	public function setFeedType($feedType)
	{
		$this->feedType = $feedType;
		$this->apiParas["feed_type"] = $feedType;
	}

	public function getFeedType()
	{
		return $this->feedType;
	}

	public function setItemIds($itemIds)
	{
		$this->itemIds = $itemIds;
		$this->apiParas["item_ids"] = $itemIds;
	}

	public function getItemIds()
	{
		return $this->itemIds;
	}

	public function setSbizId($sbizId)
	{
		$this->sbizId = $sbizId;
		$this->apiParas["sbiz_id"] = $sbizId;
	}

	public function getSbizId()
	{
		return $this->sbizId;
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
		return "taobao.weitao.feed.synchronize.new";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->detailUrl,"detailUrl");
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->feedType,"feedType");
		RequestCheckUtil::checkMaxListSize($this->itemIds,20,"itemIds");
		RequestCheckUtil::checkNotNull($this->sbizId,"sbizId");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
		RequestCheckUtil::checkNotNull($this->summary,"summary");
		RequestCheckUtil::checkNotNull($this->title,"title");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
