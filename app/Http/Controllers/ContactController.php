<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Here you would typically send an email or save to a database
        // Example: Mail::to('your@email.com')->send(new ContactFormMail($validated));

        // For demonstration, we'll just return a success message
        return response()->json([
            'message' => 'Thanks for your message! I\'ll get back to you soon.'
        ]);
    }
}
