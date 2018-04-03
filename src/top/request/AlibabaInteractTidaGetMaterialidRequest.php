<?php
/**
 * TOP API: alibaba.interact.tida.get.materialid request
 * 
 * @author auto create
 * @since 1.0, 2015.06.25
 */
class AlibabaInteractTidaGetMaterialidRequest
{
	/** 
	 * itemId和skuId二元组的列表
	 **/
	private $itemidSkuids;
	
	private $apiParas = array();
	
	public function setItemidSkuids($itemidSkuids)
	{
		$this->itemidSkuids = $itemidSkuids;
		$this->apiParas["itemid_skuids"] = $itemidSkuids;
	}

	public function getItemidSkuids()
	{
		return $this->itemidSkuids;
	}

	public function getApiMethodName()
	{
		return "alibaba.interact.tida.get.materialid";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemidSkuids,"itemidSkuids");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
