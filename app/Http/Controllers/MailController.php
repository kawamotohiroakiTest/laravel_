<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotification;

class MailController extends Controller
{
  public function MailNotification($name, $text, $to)
  {
    $name = $name;
    $text = $text.'をご購入いただきありがとうございます！これからもよろしくお願いいたします。';
    // $to = 'kagoshimasyusyoku@gmail.com';
    Mail::to($to)->send(new MailNotification($name, $text, $to));
  }
}