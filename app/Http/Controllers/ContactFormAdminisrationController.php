<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormAdminisrationController extends Controller
{
    public function showForm()
    {
        return view('contact-form');
    }

    public function sendContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'privacy_policy' => 'accepted',
        ]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        Mail::send([], [], function ($message) use ($details) {
            $message->to('admin@example.com')
                ->subject('Новое сообщение с контактной формы: ' . $details['subject'])
                ->setBody('
                        <p><strong>Имя:</strong> ' . $details['name'] . '</p>
                        <p><strong>Email:</strong> ' . $details['email'] . '</p>
                        <p><strong>Сообщение:</strong><br>' . nl2br($details['message']) . '</p>
                    ', 'text/html');
        });

        return back()->with('success', 'Ваше сообщение отправлено!');
    }
}
