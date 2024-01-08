<?php

namespace App\Http\Controllers;

use App\Mail\InvoiceMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function send(Request $request)
    {
        $sendMail = 'moshiulislam42@gmail.com';
        Mail::to($sendMail)->send(new InvoiceMail());
        return 'success';
    }
}
