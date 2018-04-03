<?php

/**
 * 淘金币活动
 * @author auto create
 */
class ThirdActivity
{
	
	/** 
	 * 活动标题
	 **/
	public $activity_title;
	
	/** 
	 * 参与活动入口URL
	 **/
	public $activity_url;
	
	/** 
	 * AppKey
	 **/
	public $app_key;
	
	/** 
	 * 为活动冻结的金币数余额
	 **/
	public $budget_amount;
	
	/** 
	 * 活动结束时间
	 **/
	public $end_time;
	
	/** 
	 * 外部扩展属性
	 **/
	public $feature;
	
	/** 
	 * 外部活动ID
	 **/
	public $out_activity_id;
	
	/** 
	 * 卖家ID
	 **/
	public $seller_id;
	
	/** 
	 * 活动开始时间
	 **/
	public $start_time;
	
	/** 
	 * 状态，0-有效状态，-1-创建失败，-2-卖家中止, -3-系统中止, -4-到期终止
	 **/
	public $status;
	
	/** 
	 * 淘金币活动ID
	 **/
	public $tb_activity_id;	
}
?>