<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.index');
    }

    public function aboutUs() 
    {
        return view('dashboard.about_us');
    }
    
    public function booking() 
    {
        return view('dashboard.booking');
    }

    public function gallery() 
    {
        return view('dashboard.gallery');
    }

    public function contactUs() 
    {
        return view('dashboard.contact_us');
    }
}
