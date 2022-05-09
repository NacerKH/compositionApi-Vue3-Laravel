<?php

namespace App\Http\Controllers;

use App\Events\StreamAnswer;
use App\Events\StreamOffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebrtcStreamingController extends Controller
{
    public function index()
    {
        return view('dashboard', ['type' => 'broadcaster', 'id' => Auth::id()]);
    }


}
