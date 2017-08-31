<?php

namespace busara\Repositories;

use busara\Repositories\AfricasTalkingGateway;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;

class GeneralRepository extends BaseRepository
{
    //
    public function __construct(){}

    public function generatePhoneConfirmationCode(){

	    $i = 0; //counter
	    $pin = ""; //our default pin is blank.
	    while($i < 4){
	        //generate a random number between 0 and 9.
	        $pin .= mt_rand(0, 9);
	        $i++;
	    }
	    return $pin;

    }

    public function uploadSingleFile(){

        $file2 = $_FILES['form-register-photo-2']['tmp_name'];
        if ($file2 !='') {
            $sizey = $_FILES['form-register-photo-2']['name']." (".$_FILES["form-register-photo-2"]["size"]/1000;
            $filename = $sizey." KB)";
            $newFilePath = $_SERVER['DOCUMENT_ROOT']."/images/brands/".$_FILES['form-register-photo-2']['name'];
            $savepath = "/images/brands/".$_FILES['form-register-photo-2']['name'];
            if(move_uploaded_file($file2, $newFilePath)){

                $imported = new ImportedContact();
                $imported->user_id = $user_id;
                $imported->file_name = $filename;
                $imported->file_url = $savepath;
                if (sizeof($contactID) > 0) {
                    $imported->contacts_uploaded = implode(",", $contactID);
                }else{
                    $imported->contacts_uploaded = '0';
                }

                if (sizeof($contactExs) > 0) {
                    $imported->existing_contacts_id = implode(",", $contactExs);
                }else{
                    $imported->existing_contacts_id = '0';
                }
                $imported->save();
            }
        }

    }


    public function verifyPhoneNumber($phone, $country_code){
        $swissNumberStr = $phone;
        $phoneUtil = \libphonenumber\PhoneNumberUtil::getInstance();
        try {

            $swissNumberProto = $phoneUtil->parse($swissNumberStr, $country_code);
            // var_dump($swissNumberProto);
            if ($phoneUtil->isValidNumber($swissNumberProto)) {
                # code...
                $phones = $phoneUtil->format($swissNumberProto, \libphonenumber\PhoneNumberFormat::E164);
                //return str_replace("+","",$phone);
                return $phones;
            }else{
                return false;
            }

            //--$isValid = $phoneUtil->isValidNumber($swissNumberProto); //return boolean true
            //var_dump($isValid);
            //--$kenya = $phoneUtil->formatOutOfCountryCallingNumber($swissNumberProto, "KE"); //return 0702294148
            //var_dump($kenya);
            //--$e164 = $phoneUtil->format($swissNumberProto, \libphonenumber\PhoneNumberFormat::E164); //returns +254702294148
            //var_dump($e164);
            //--$nat = $phoneUtil->format($swissNumberProto, \libphonenumber\PhoneNumberFormat::NATIONAL); //return 0702294148
            //var_dump($nat);
            //--$inter = $phoneUtil->format($swissNumberProto, \libphonenumber\PhoneNumberFormat::INTERNATIONAL);
            //--var_dump($inter);

        } catch (\libphonenumber\NumberParseException $e) {
            //var_dump($e);
            return false;
        }
    }

    public function sendSMS($to_, $message){

    	$username   = "obicoli";
		$apikey     = "8b4cd2fc35eb45b2ae1dde9a22c95f57c0473fcc2603a87b5207e6cae67cde88";
		$recipients = $to_;
		// And of course we want our recipients to know what we really do
		$message    = $message;
		// Create a new instance of our awesome gateway class
		//$gateway    = new AfricasTalkingGateway($username, $apikey);
		$flag = 0;
		$gateway    = new AfricasTalkingGateway($username, $apikey, "sandbox");
		try
		{ 
		  // Thats it, hit send and we'll take care of the rest. 
		  $results = $gateway->sendMessage($recipients, $message);       
		  foreach($results as $result) {
		    // status is either "Success" or "error message"
		    // echo " Number: " .$result->number;
		    // echo " Status: " .$result->status;
		    // echo " MessageId: " .$result->messageId;
		    // echo " Cost: "   .$result->cost."\n";
		    $flag = $flag + 1;
		  }
		}
		catch ( AfricasTalkingGatewayException $e )
		{
		  echo "Encountered an error while sending: ".$e->getMessage();
		}

		return $flag;

    }


}