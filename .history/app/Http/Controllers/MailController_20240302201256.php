<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Mail;
use App\Mail\MailNotify;
class MailController extends Controller
{
    //
    public function ProductOutOfStock($Products){
       $mailData=[
        
        'title'=>'Product out of stock',
     
        'body'=>'',
       
       ];

       foreach($Products as $Product){
        $titles=$Product->Title.' which have default variant '.$Product->default_variant;
        
       }

       $mailData['body']=$titles;
       Mail::to('osaad4899@gmail.com')->send(new MailNotify($mailData));

    }
}
