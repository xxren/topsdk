<?php
/**
 * TOP API: alibaba.aliqin.flow.query.flow request
 * 
 * @author auto create
 * @since 1.0, 2015.03.18
 */
class AlibabaAliqinFlowQueryFlowRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.aliqin.flow.query.flow";
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
