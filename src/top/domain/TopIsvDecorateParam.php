<?php

/**
 * 入参
 * @author auto create
 */
class TopIsvDecorateParam
{
	
	/** 
	 * 活动id，调用alibaba.interact.activity.register传入的bizid
	 **/
	public $biz_id;
	
	/** 
	 * 目前必须填0，代表店铺
	 **/
	public $biz_type;
	
	/** 
	 * {"action":"update","image_url":"http://xx.cdn","click_url":"http://xxx.play.m.jaeapp.com"}，action为update，代表新增(image_url以及click_url必传)。action=get，代表获得商家设置的活动，image_url以及click_url不用填写。action＝del,代表将活动从资源位撤下
	 **/
	public $business_params;
	
	/** 
	 * 不用传
	 **/
	public $position;
	
	/** 
	 * 目前必须填0，代表店铺中宝箱资源位
	 **/
	public $sub_biz_type;	
}
?>