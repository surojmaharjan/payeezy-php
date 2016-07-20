<?php

class Payeezy_TokenTest extends BaseTest
{
  public function testAuthorize()
  {
    $transaction = new Payeezy_Token(parent::$client);
    $response = $transaction->authorize(
        [
        "merchant_ref" => "Astonishing-Sale",
        "transaction_type" => "authorize",
        "method" => "token",
        "amount" => "200",
        "currency_code" => "USD",
        "token" => array(
        "token_type" => "FDToken",
        "token_data" => array(
        "type" => "visa",
        "value" => "2537446225198291",
        "cardholder_name" => "JohnSmith",
        "exp_date" => "1030"
        )
        )
        ]
    );
    $this->assertEquals($response->validation_status, "success");
  }
}
