<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email',
            'message' => 'required|max:1000',
        ]);

        Mail::raw("Pesan dari: {$validated['name']} ({$validated['email']})\n\n{$validated['message']}", function ($message) {
            $message->to('kevinnardiansyahh19@gmail.com')
                    ->subject('Pesan dari website portofolio');
        });

        return redirect('/contact')->with('success', 'Pesan berhasil dikirim!');
    }
}
