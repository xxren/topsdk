<?php

/**
 * 抽奖请求对象
 * @author auto create
 */
class LotteryDrawQueryDto
{
	
	/** 
	 * 抽奖CODE
	 **/
	public $raffle_code;
	
	/** 
	 * 前台appKey
	 **/
	public $raffle_identity;
	
	/** 
	 * 关联ID
	 **/
	public $relation_id;
	
	/** 
	 * 方案ID
	 **/
	public $schema_id;
	
	/** 
	 * 抽奖参数
	 **/
	public $wua;	
}
?>