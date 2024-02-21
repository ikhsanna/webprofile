<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailReceive_Controller extends Controller
{
    <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];

        Mail::send('emails.email_template', $data, function ($message) {
            $message->to('recipient@gmail.com', 'Recipient Name')
                    ->subject('New Email from Laravel Form');
        });

        return redirect()->back()->with('message', 'Email sent successfully!');
    }
}

}
