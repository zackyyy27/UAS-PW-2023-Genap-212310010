<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\support\Str;
use App\Models\Product;
use App\Models\Feedback;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashbord()
    {
        $feedbacks = Feedback::where('isshow', '1')->orderBy('id', 'desc')->take(4)->get();
        return view('user.dashbord')->with('feedbacks', $feedbacks);
    }

    public function home()
    {
        $feedbacks = Feedback::where('isshow', '1')->orderBy('id', 'desc')->take(4)->get();
        return view('user.dashbord')->with('feedbacks', $feedbacks);
    }
    public function about()
    {
        return view('user.about');
    }
    public function menu()
    {
        return view('User.View_menu.menu', [
            "product" => Product::all()
        ]);
    }
    public function outlets()
    {
        return view('user.outlet');
    }
    public function contact()
    {
        return view('user.contact');
    }

    public function store(Request $request): RedirectResponse
    {
        $validate = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'pesan' => 'required',
        ]);

        // $validate['exceprt'] = Str::limit($request->pesan, 100, '...');

        Feedback::create($validate);

        return redirect()->intended('/dashbord');
    }
}
