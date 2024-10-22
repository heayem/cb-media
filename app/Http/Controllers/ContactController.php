<?php

namespace App\Http\Controllers;

use Exception;
use App\Mail\CbMediaMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\SendMailRequest;

class ContactController extends Controller
{
    public function sendEmail(SendMailRequest $request){
        try {
            $details = [
                'name'    => $request->name,
                'email'   => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ];
            $ccEmail = env('MAIL_NAME_CC');
            $userEmail = env('MAIL_USERNAME');
            Mail::to($userEmail)
                ->cc($ccEmail)
                ->send(new CbMediaMail($details));
                return response()->json(['message' => 'You send mail success.']);
        } catch (Exception $e) {
            return response()->json(['error' => 'Failed to send message. Please try again later.']);
        }
    }
}

