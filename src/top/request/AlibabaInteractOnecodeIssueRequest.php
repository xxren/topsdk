<?php
/**
 * TOP API: alibaba.interact.onecode.issue request
 * 
 * @author auto create
 * @since 1.0, 2015.07.01
 */
class AlibabaInteractOnecodeIssueRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.interact.onecode.issue";
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
