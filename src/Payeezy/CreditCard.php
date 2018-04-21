<?php

class Payeezy_CreditCard extends Payeezy_TransactionType
{

  public function __construct(Payeezy_Client $client)
  {
    parent::__construct('credit_card', $client);
  }
}
