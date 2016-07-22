<?php

class BaseTest extends PHPUnit_Framework_TestCase
{
  public static $client;
    
  public static function setUpBeforeClass()
  {
    self::$client = new Payeezy_Client();
    self::$client->setApiKey("y2sdDUJ0gGnxTyQFUGqDrutPHQ7LbeCS");
    self::$client->setApiSecret("3472aaf343dce18899ed72af1c9f98f5c8b0912c0bfe3defe97cf2d158c0f96f");
    self::$client->setMerchantToken("fdoa-0e8a514fecf2a834e0613becce6e98b30e8a514fecf2a834");
    self::$client->setUrl("https://api-qa.payeezy.com/v1/transactions");
  }
}
