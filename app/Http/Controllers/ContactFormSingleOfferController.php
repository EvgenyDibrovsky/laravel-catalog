<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormSingleOfferController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'privacy_policy' => 'accepted', // Добавлена валидация для чекбокса
        ]);

        $details = [
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'email' => $validated['email'],
            'message' => $validated['message'],
        ];

        // Отправка email с использованием замыкания
        Mail::send([], [], function ($message) use ($details) {
            $message->to('admin@example.com')
                ->subject('Новое сообщение с контактной формы')
                ->setBody('
                        <p><strong>Имя:</strong> ' . $details['name'] . '</p>
                        <p><strong>Телефон:</strong> ' . $details['phone'] . '</p>
                        <p><strong>Email:</strong> ' . $details['email'] . '</p>
                        <p><strong>Сообщение:</strong><br>' . nl2br($details['message']) . '</p>
                    ', 'text/html');
        });

        return redirect()->back()->with('success', 'Сообщение успешно отправлено!');
    }
}
