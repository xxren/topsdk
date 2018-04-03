<?php
/**
 * TOP API: alibaba.interact.isvlottery.isvdraw request
 * 
 * @author auto create
 * @since 1.0, 2016.09.19
 */
class AlibabaInteractIsvlotteryIsvdrawRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.interact.isvlottery.isvdraw";
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
