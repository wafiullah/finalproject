<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactInquiry;

class PagesController extends Controller
{
    //

    public function storeContactInquiry(Request $request)
    {

        $validated = $request->validate([
            'name' => ['required'],
            'subject' => ['required'],
            'message' => ['required'],
            'email' => ['required', 'email'],
        ]);

        ContactInquiry::create($validated);

        return response()->json(['status' => true, 'message' => 'Contact Inquiry has been sent successfully.']);

    }
}
