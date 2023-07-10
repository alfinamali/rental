<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $message = Message::latest()->get();

        return view('admin.message.index', compact('message'));
    }

    public function destroy(Message $message)
    {
        $message->delete();

        return redirect()->back()->with([
            'message' => 'Data berhasil dihapus',
            'alert-type' => 'danger'
        ]);
    }
}
