<?php

/**
 * 入参
 * @author auto create
 */
class TopUpdateActivityLotteryInfoParam
{
	
	/** 
	 * 商家通过isv创建的活动id
	 **/
	public $activity_biz_id;
	
	/** 
	 * isv的appkey
	 **/
	public $app_key;
	
	/** 
	 * 可随意传，目前没有用到，扩展字段
	 **/
	public $banner_url;
	
	/** 
	 * 商家创建的红包总额
	 **/
	public $benefit_amount;
	
	/** 
	 * 可随意传，目前没有用到，扩展字段
	 **/
	public $benefit_attribute;
	
	/** 
	 * 商家创建的红包面额
	 **/
	public $benefit_denomination;
	
	/** 
	 * 商家选择使用的红包权益id
	 **/
	public $benefit_id;
	
	/** 
	 * 目前填1，代表支付宝红包
	 **/
	public $benefit_type;
	
	/** 
	 * 目前必须填4，代表互动城
	 **/
	public $biz_type;
	
	/** 
	 * 商家创建的isv活动的结束时间
	 **/
	public $end_time;
	
	/** 
	 * 抽奖活动开始时间，long型
	 **/
	public $lottery_activity_end_date;
	
	/** 
	 * 抽奖活动结束时间
	 **/
	public $lottery_activity_start_date;
	
	/** 
	 * 抽奖活动名称
	 **/
	public $name;
	
	/** 
	 * 奖品扩展字段
	 **/
	public $prize_ext_attribute;
	
	/** 
	 * 1元红包
	 **/
	public $prize_name;
	
	/** 
	 * 奖品扩展字段
	 **/
	public $prize_param_attribute;
	
	/** 
	 * 奖品总数
	 **/
	public $prize_quantity;
	
	/** 
	 * 奖品总数
	 **/
	public $prize_remain_quantity;
	
	/** 
	 * 必须填1，代表红包
	 **/
	public $prize_type;
	
	/** 
	 * 0～1之间，代表奖池的概率
	 **/
	public $probability;
	
	/** 
	 * 商家创建的isv活动的开始时间
	 **/
	public $start_time;
	
	/** 
	 * 用户活动期间总共中奖次数限制
	 **/
	public $win_permission_activity_count;
	
	/** 
	 * 用户每天总共中奖次数限制
	 **/
	public $win_permission_day_count;	
}
?>