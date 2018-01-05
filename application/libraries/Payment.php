<?php
use Omnipay\Omnipay;
require 'paymentlib/autoload.php';
class payment
{
  function makepayment(){
      $gateway = Omnipay::create('CCAvenue');
      $gateway->setProfileId('32408-2340328');
      $gateway->setSecretKey('903724092323');
      $gateway->setAccessKey('0947923047932');
      $gateway->setTestMode('true');
      $params = [
          'currency' => 'INR',
          'redirect_url' => base_url('success.php'),
          'cancel_url' => base_url('error.php'),
          'language' => 'en',
          'tid' => uniqid(),
          'order_id' => uniqid(),
          'amount' => '10.00',
      ];
      $response=$gateway->purchase($params)->send();
      if ($response->isRedirect()) {
          // redirect to offsite payment gateway
          $response->redirect();
      } elseif ($response->isSuccessful()) {
          // payment was successful: update database
          print_r($response);
      } else {
          // payment failed: display message to customer
          echo $response->getMessage();
      }

  }
}
