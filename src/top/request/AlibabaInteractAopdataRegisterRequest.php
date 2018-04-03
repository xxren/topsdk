<?php
/**
 * TOP API: alibaba.interact.aopdata.register request
 * 
 * @author auto create
 * @since 1.0, 2016.01.27
 */
class AlibabaInteractAopdataRegisterRequest
{
	/** 
	 * 入参
	 **/
	private $paramTopIsvDecorateParam;
	
	private $apiParas = array();
	
	public function setParamTopIsvDecorateParam($paramTopIsvDecorateParam)
	{
		$this->paramTopIsvDecorateParam = $paramTopIsvDecorateParam;
		$this->apiParas["param_top_isv_decorate_param"] = $paramTopIsvDecorateParam;
	}

	public function getParamTopIsvDecorateParam()
	{
		return $this->paramTopIsvDecorateParam;
	}

	public function getApiMethodName()
	{
		return "alibaba.interact.aopdata.register";
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
