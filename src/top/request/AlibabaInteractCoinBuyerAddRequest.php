<?php
/**
 * TOP API: alibaba.interact.coin.buyer.add request
 * 
 * @author auto create
 * @since 1.0, 2015.06.02
 */
class AlibabaInteractCoinBuyerAddRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.interact.coin.buyer.add";
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
