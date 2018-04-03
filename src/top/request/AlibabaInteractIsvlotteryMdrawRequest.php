<?php
/**
 * TOP API: alibaba.interact.isvlottery.mdraw request
 * 
 * @author auto create
 * @since 1.0, 2016.09.13
 */
class AlibabaInteractIsvlotteryMdrawRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.interact.isvlottery.mdraw";
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
