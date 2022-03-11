<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;

class WebsiteController extends Controller
{
    public function home()
    {
        return view('website.index');
    }
    public function about()
    {
        return view('website.aboutus');
    }
    public function service()
    {
        return view('website.services');
    }
    public function ourteam()
    {
        return view('website.ourteam');
    }

    public function casestudies()
    {
        return view('website.casestudies');
    }

    public function blog()
    {
        return view('website.blog');
    }

    public function contactus()
    {
        return view('website.contact');
    }

    public function newsletter(Request $request)
    {
        $this->validate($request, [
            'ns_email' => 'required|email'
        ]);
        $slug = uniqid();
        $insert = Newsletter::create([
            'ns_email' => $request['ns_email'],
            'ns_slug' => $slug,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        if ($insert) {
            Session::flash('success', 'Successfully Subscribe');
            return redirect()->back();
        } else {
            Session::flash('error', 'Subscribe Failed!');
            return redirect()->back();
        }
    }

    public function contact_submit(Request $request)
    {
        $this->validate($request, [
            'cm_name' => 'required',
            'cm_email' => 'required|email'
        ], [
            'cm_name.required' => 'Enter You Name',
            'cm_email.required' => 'Enter You Email',
        ]);

        $slug = 'CM' . uniqid();
        $insert = ContactMessage::insertGetId([
            'cm_name' => $request['cm_name'],
            'cm_email' => $request['cm_email'],
            'cm_phone' => $request['cm_phone'],
            'cm_subject' => $request['cm_subject'],
            'cm_message' => $request['cm_message'],
            'cm_slug' => $slug,
            'cm_status' => 1,
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        if ($insert) {
            Session::flash('success', 'Message successfully Sent');
            return back();
        } else {
            Session::flash('error', 'Message Sent Failed');
            return back();
        }
    }

    public function casestudies_single()
    {
        return view('website.casestudies_single');
    }

    public function ourteam_single()
    {
        return view('website.single-team');
    }
}
