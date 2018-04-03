<?php
/**
 * TOP API: alibaba.interact.lotteryactivity.register request
 * 
 * @author auto create
 * @since 1.0, 2016.01.04
 */
class AlibabaInteractLotteryactivityRegisterRequest
{
	/** 
	 * 入参
	 **/
	private $paramTopUpdateActivityLotteryInfoParam;
	
	private $apiParas = array();
	
	public function setParamTopUpdateActivityLotteryInfoParam($paramTopUpdateActivityLotteryInfoParam)
	{
		$this->paramTopUpdateActivityLotteryInfoParam = $paramTopUpdateActivityLotteryInfoParam;
		$this->apiParas["param_top_update_activity_lottery_info_param"] = $paramTopUpdateActivityLotteryInfoParam;
	}

	public function getParamTopUpdateActivityLotteryInfoParam()
	{
		return $this->paramTopUpdateActivityLotteryInfoParam;
	}

	public function getApiMethodName()
	{
		return "alibaba.interact.lotteryactivity.register";
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
