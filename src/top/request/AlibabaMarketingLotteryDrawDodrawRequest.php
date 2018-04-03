<?php
/**
 * TOP API: alibaba.marketing.lottery.draw.dodraw request
 * 
 * @author auto create
 * @since 1.0, 2017.05.11
 */
class AlibabaMarketingLotteryDrawDodrawRequest
{
	/** 
	 * 抽奖请求对象
	 **/
	private $lotteryDrawQuery;
	
	private $apiParas = array();
	
	public function setLotteryDrawQuery($lotteryDrawQuery)
	{
		$this->lotteryDrawQuery = $lotteryDrawQuery;
		$this->apiParas["lottery_draw_query"] = $lotteryDrawQuery;
	}

	public function getLotteryDrawQuery()
	{
		return $this->lotteryDrawQuery;
	}

	public function getApiMethodName()
	{
		return "alibaba.marketing.lottery.draw.dodraw";
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
