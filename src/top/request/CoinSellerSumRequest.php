<?php
/**
 * TOP API: taobao.coin.seller.sum request
 * 
 * @author auto create
 * @since 1.0, 2015.01.15
 */
class CoinSellerSumRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.coin.seller.sum";
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
