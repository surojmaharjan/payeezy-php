<?php

class Payeezy_CreditCardTest extends BaseTest
{
    private function getPrimaryTxPayload(){
      $args = [
        "merchant_ref" => "Astonishing-Sale",
        "amount" => "1299",
        "currency_code" => "USD",
        "credit_card" => array(
          "type" => "visa",
          "cardholder_name" => "John Smith",
          "card_number" => "4788250000028291",
          "exp_date" => "1020",
          "cvv" => "123"
        )
      ];
    
      return $args;
    }

    public function testAuthorize()
    {
      $transaction = new Payeezy_CreditCard(self::$client);
      $response = $transaction->authorize(self::getPrimaryTxPayload());
      $this->assertEquals($response->transaction_status, "approved");
    }
    
    public function testPurchase()
    {
      $transaction = new Payeezy_CreditCard(self::$client);
      $response = $transaction->purchase(self::getPrimaryTxPayload());
      $this->assertEquals($response->transaction_status, "approved");
    }
    
    public function testCapture()
    {
      $authorize_card_transaction = new Payeezy_CreditCard(self::$client);
      $authorize_response = $authorize_card_transaction->authorize(self::getPrimaryTxPayload());
      
      $capture_card_transaction = new Payeezy_CreditCard(self::$client);
      $capture_response = $capture_card_transaction->capture(
        $authorize_response->transaction_id,
        array(
            "amount"=> "1200",
            "transaction_tag" => $authorize_response->transaction_tag,
            "merchant_ref" => "Astonishing-Sale",
            "currency_code" => "USD",
        )
      );
      $this->assertEquals($capture_response->transaction_status, "approved");
    }
}
