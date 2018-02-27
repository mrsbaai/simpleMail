<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Mail\minimal;

use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
class mailingController extends Controller
{
    public function test(){

        $to = "web-4jvu8@mail-tester.com";
        $content['from'] = "fetedesdiots@orange.fr";
        $content['subject'] = "Test from laravel";
        $content['body'] = "This is a simple test from laravel.";

        return Mail::to($to)->send(new minimal($content));

    }
}
