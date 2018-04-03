<?php
/**
 * TOP API: alibaba.interact.tida.cart.result request
 * 
 * @author auto create
 * @since 1.0, 2015.09.25
 */
class AlibabaInteractTidaCartResultRequest
{
	/** 
	 * ISV自定义，推荐字符串，慎用json
	 **/
	private $isvExt;
	
	/** 
	 * tida加购物车接口的商品id
	 **/
	private $itemId;
	
	/** 
	 * 买家混淆nick
	 **/
	private $mixBuyerNick;
	
	/** 
	 * 卖家昵称
	 **/
	private $sellerNick;
	
	/** 
	 * tida加购物车接口的skuid
	 **/
	private $skuId;
	
	/** 
	 * 排查线索
	 **/
	private $traceId;
	
	private $apiParas = array();
	
	public function setIsvExt($isvExt)
	{
		$this->isvExt = $isvExt;
		$this->apiParas["isv_ext"] = $isvExt;
	}

	public function getIsvExt()
	{
		return $this->isvExt;
	}

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setMixBuyerNick($mixBuyerNick)
	{
		$this->mixBuyerNick = $mixBuyerNick;
		$this->apiParas["mix_buyer_nick"] = $mixBuyerNick;
	}

	public function getMixBuyerNick()
	{
		return $this->mixBuyerNick;
	}

	public function setSellerNick($sellerNick)
	{
		$this->sellerNick = $sellerNick;
		$this->apiParas["seller_nick"] = $sellerNick;
	}

	public function getSellerNick()
	{
		return $this->sellerNick;
	}

	public function setSkuId($skuId)
	{
		$this->skuId = $skuId;
		$this->apiParas["sku_id"] = $skuId;
	}

	public function getSkuId()
	{
		return $this->skuId;
	}

	public function setTraceId($traceId)
	{
		$this->traceId = $traceId;
		$this->apiParas["trace_id"] = $traceId;
	}

	public function getTraceId()
	{
		return $this->traceId;
	}

	public function getApiMethodName()
	{
		return "alibaba.interact.tida.cart.result";
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
