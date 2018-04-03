<?php
/**
 * TOP API: alibaba.interact.benefit.idraw request
 * 
 * @author auto create
 * @since 1.0, 2017.03.15
 */
class AlibabaInteractBenefitIdrawRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.interact.benefit.idraw";
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
