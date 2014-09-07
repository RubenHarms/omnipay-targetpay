<?php

namespace Omnipay\TargetPay\Message;

class IdealCompletePurchaseResponse extends CompletePurchaseResponse
{

    public function getBankAccountNumber()
    {
       $d = explode("|",$this->data);
       if (empty($d[1]))
       {
           return null;
       }
       return $d[1];
    }
    
    public function getBankAccountHolder()
    {
       $d = explode("|",$this->data);
       if (empty($d[2]))
       {
           return null;
       }
       return $d[2];
    }
    
    public function getBankAccountLocation()
    {
       $d = explode("|",$this->data);
       if (empty($d[3]))
       {
           return null;
       }
       return $d[3];
    }
}
