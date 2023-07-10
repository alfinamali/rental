<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function userHome(): View
    {
        $mobil = Mobil::latest()->get();
        return view('user.index', compact('mobil'));
    }
    public function detail(Mobil $mobil)
    {
        return view('user.detail', compact('mobil'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function editorHome()
    // {
    //     return view('home', ["msg" => "Hello! I am editor"]);
    // }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome(): View
    {
        return view('admin.index');
    }

    public function contact()
    {
        return view('user.contact');
    }
    public function contactStore(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'pesan' => 'required',
        ]);

        Message::create($data);

        return redirect()->back()->with([
            'message' => 'pesan berhasil dikirim',
            'alert-type' => 'success'
        ]);
    }
}
