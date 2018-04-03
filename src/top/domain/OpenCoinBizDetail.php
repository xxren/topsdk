<?php

/**
 * 开放的卖家淘金币明细
 * @author auto create
 */
class OpenCoinBizDetail
{
	
	/** 
	 * 活动名称
	 **/
	public $activity_title;
	
	/** 
	 * 发生的金币数，正数表示收入，负数表示支出。
	 **/
	public $amount;
	
	/** 
	 * 外部扩展属性
	 **/
	public $attributes;
	
	/** 
	 * 备注
	 **/
	public $comments;
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 主键ID
	 **/
	public $id;
	
	/** 
	 * 匿名方式NICK
	 **/
	public $nick;
	
	/** 
	 * 明细关联的外键ID
	 **/
	public $out_id;
	
	/** 
	 * 淘金币平台活动ID
	 **/
	public $tb_activity_id;	
}
?>