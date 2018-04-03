<?php
/**
 * TOP API: taobao.mixnick.wetoplay request
 * 
 * @author auto create
 * @since 1.0, 2015.11.27
 */
class MixnickWetoplayRequest
{
	/** 
	 * 排查问题id
	 **/
	private $traceId;
	
	/** 
	 * 微淘混淆nick
	 **/
	private $weMixnick;
	
	private $apiParas = array();
	
	public function setTraceId($traceId)
	{
		$this->traceId = $traceId;
		$this->apiParas["trace_id"] = $traceId;
	}

	public function getTraceId()
	{
		return $this->traceId;
	}

	public function setWeMixnick($weMixnick)
	{
		$this->weMixnick = $weMixnick;
		$this->apiParas["we_mixnick"] = $weMixnick;
	}

	public function getWeMixnick()
	{
		return $this->weMixnick;
	}

	public function getApiMethodName()
	{
		return "taobao.mixnick.wetoplay";
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
