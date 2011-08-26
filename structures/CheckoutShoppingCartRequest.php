<?php
class CheckoutShoppingCartRequest {
  public $CartID; // string
  public $ClientID; // string
  public $Test; // boolean
  public $CartItems; // ArrayOfCartItem
  public $PromotionCode; // string
  public $Payments; // ArrayOfPaymentInfo
}
?>