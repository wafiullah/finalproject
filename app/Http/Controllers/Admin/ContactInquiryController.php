<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactInquiry;
use Illuminate\Http\Request;

class ContactInquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact_inquiries = ContactInquiry::latest()->get();
        return view('admin.contact-inquiries.index', compact('contact_inquiries'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactInquiry  $contactInquiry
     * @return \Illuminate\Http\Response
     */
    public function show(ContactInquiry $contactInquiry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactInquiry  $contactInquiry
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactInquiry $contactInquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactInquiry  $contactInquiry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactInquiry $contactInquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactInquiry  $contactInquiry
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactInquiry $contactInquiry)
    {
        //
        $contactInquiry->delete();
        return redirect()->route('admin.contact-inquiries.index')->with('success', 'Contact Inquiry successfully deleted.');

    }
}
