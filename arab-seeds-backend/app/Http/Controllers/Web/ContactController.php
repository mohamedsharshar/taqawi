<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $locale = app()->getLocale();
        
        $data = [
            'title' => $locale == 'ar' ? 'اتصل بنا' : 'Contact Us',
            'description' => $locale == 'ar' ? 'نسعد بتواصلكم معنا' : 'We are happy to hear from you',
        ];
        
        return view('contact', compact('data', 'locale'));
    }
    
    public function submit(Request $request)
    {
        // Handle contact form submission
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);
        
        // TODO: Send email or save to database
        
        return redirect()->route('contact')->with('success', app()->getLocale() == 'ar' ? 'تم إرسال رسالتك بنجاح' : 'Your message has been sent successfully');
    }
}
