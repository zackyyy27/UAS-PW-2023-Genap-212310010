<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin.overview');
    }
    public function feedback()
    {
        return view('Admin.Feedback', [
            'feedbacks' => Feedback::all()
        ]);
    }
    public function dashboard()
    {
        return view('User.dashbord', [
            'feedbacks' => Feedback::all()
        ]);
    }
}
