<?php

class Payeezy_Error extends Exception
{
  public function __construct($errorResponse)
  {
    
    $this->httpStatus = 200;
    $httpBodyArray = array();
    foreach ($errorResponse->messages as $message) {
      $httpBodyArray[] = $message->description;
    }
    $this->httpBody = implode(", ", $httpBodyArray);
    ;
    parent::__construct($message = $this->httpBody);
  }

  public function getHttpStatus()
  {
    return $this->httpStatus;
  }

  public function getHttpBody()
  {
    return $this->httpBody;
  }
}
