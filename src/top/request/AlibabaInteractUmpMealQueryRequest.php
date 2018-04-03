<?php
/**
 * TOP API: alibaba.interact.ump.meal.query request
 * 
 * @author auto create
 * @since 1.0, 2015.05.19
 */
class AlibabaInteractUmpMealQueryRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.interact.ump.meal.query";
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
