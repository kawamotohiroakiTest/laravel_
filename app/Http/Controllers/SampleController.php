<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\SampleNotification;

class SampleController extends Controller
{
  public function SampleNotification()
  {
    $name = 'ご購入いただき';
    $text = 'これからもよろしくお願いいたします。';
    $to = 'kagoshimasyusyoku@gmail.com';
    Mail::to($to)->send(new SampleNotification($name, $text));
  }
}