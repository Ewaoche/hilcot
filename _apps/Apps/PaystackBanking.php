<?php
namespace Apps;

class PaystackBanking{

    public $secrete_key = NULL;
    public $headers = NULL;
    public $url = "https://api.paystack.com/";

    public function __construct($secrete_key){
        $this->secrete_key = $secrete_key;
        $this->headers = array(
            "Authorization: Bearer {$secrete_key}",
            "content-type: application/json",
            "user-agent: Paystack-Developers-Hub"
        );
    }

    public function getBanks(){
        $url = "https://api.paystack.co/bank"; 
        $ch = curl_init();    
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);   
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);
        $result = curl_exec($ch);
        return $result;
    }
    

    public function verifyBVN($bvn){
        $url = "https://api.paystack.co/bank/resolve_bvn/{$bvn}"; 
        $ch = curl_init();    
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);   
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);
        $result = curl_exec($ch);
        return $result;
    }

    public function verifyBank($account_number,$bank_code){
        $url = "https://api.paystack.co/bank/resolve?account_number={$account_number}&bank_code={$bank_code}"; 
        $ch = curl_init();    
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);   
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);
        $result = curl_exec($ch);
        return $result;
    }

    public function sendOTP($reference){
        $url = "https://api.paystack.co/transfer/transfer"; 
        $data = array("transfer_code" => $reference); 
        $data = json_encode($data);
        $ch = curl_init();    
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);   
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($ch);
        return $result;
    }
    
    public function resendOTP($reference){
        $url = "https://api.paystack.co/transfer/resend_otp";
        $data = array("transfer_code" => $reference); 
        $data = json_encode($data);
        $ch = curl_init();    
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);   
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($ch);
        return $result;
    }

    public function Transfer($amount,$receipient_code,$reason=""){
        $data = array(
            "source" => "balance",
            "amount" => $amount * 100,
            "recipient" => $receipient_code,
            "reason" => $reason
        );
        $data = json_encode($data);
    
        $url = "https://api.paystack.co/transfer"; 
        $ch = curl_init();    
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);   
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($ch);
        return $result;
    }

    public function createCustomer($email,$firstname,$lastname){
        $url = "https://api.paystack.co/transfer/resend_otp";
        $data = array("email" => $email,"firstname" => $firstname,"lastname" => $lastname); 
        $data = json_encode($data);
        $ch = curl_init();    
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);   
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($ch);
        return $result;
    }
    public function AddReceipient($bank_code,$acc_number,$acc_name,$description){
        $type = "nuban";
        $currency = "NGN";
        $url = "https://api.paystack.co/transferrecipient"; 

        $data = array(  
            "type"=>$type,
            "name"=>$acc_name,
            "description"=>$description,
            "account_number"=>$acc_number,
            "bank_code"=>$bank_code,
            "currency"=>$currency
        );
        $data = json_encode($data);

        $ch = curl_init();    
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);   
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($ch);
        return $result;
    }


    public function verifyMobile($mobile){
        $url = "https://api.paystack.co/verifications";
        $data = array(
            "phone"=>$mobile,
            "callback_url"=>"https://golojan.com/verify/truecaller",
            "verification_type"=>"truecaller"
        );
        $data = json_encode($data);
        $ch = curl_init();    
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);   
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($ch);
        return $result;
    }


}

