<?php

namespace App\Traits;
use Illuminate\Http\Request;
use Mail;
use Response;
use Auth;
use Carbon\Carbon;

trait MailTrait
{
    public function customerQueryMail($data){
        Mail::send('emails.customer_query_mail', ['data' => $data], function($message) use ($data) {
            $message->to($data['email'])->subject('Query submitted [Nancy EHLEN]');
        });
    }

    public function customerWelcomeMail($data){
        Mail::send('emails.customer_welcome_mail', ['data' => $data], function($message) use ($data) {
            $message->to($data['email'])->subject('Welcome to Nancy EHLEN');
        });
    }
}
