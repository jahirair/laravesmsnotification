<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\WelcomesmsNotification;
use App\Models\User;

class SmsnotificationController extends Controller {
    public function sendsms() {
        $user = User::first();
        $user->notify( new WelcomesmsNotification( '0c007472', 'H9c5y96AkvKrLAQ4' ) );
        //api key and secret key

        dd( 'SMS Sent' );
    }
}
