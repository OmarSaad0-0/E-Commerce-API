<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Mail;
use App\Mail\MailNotify;
class MailController extends Controller
{
    //
    public function ProductOutOfStock($Product){
       $mailData=[
        'title'=>'Product out of stock',
        'body'=>'The product'.$Product->Title.' as variant '.$Product->title.' is out of stock.',
       ];
       Mail::to('osaad4899@gmail.com')->send(new MailNotify($mailData));

    }
}
