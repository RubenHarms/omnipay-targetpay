<?php

namespace Omnipay\TargetPay\Message;

class IdealCompletePurchaseRequest extends CompletePurchaseRequest
{
    /**
     * {@inheritdoc}
     */
    public function getEndpoint()
    {
        return 'https://www.targetpay.com/ideal/check';
    }
    
    /**
     * {@inheritdoc}
     */
    public function sendData($data)
    {
        $httpResponse = $this->httpClient->get(
            $this->getEndpoint().'?'.http_build_query($data)
        )->send();
    
        return $this->response = new IdealCompletePurchaseResponse($this, $httpResponse->getBody(true));
    }
}
