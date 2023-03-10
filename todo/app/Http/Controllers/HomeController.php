<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $tasks = Task::orderBy('id', 'DESC')->get()->take(4);
        $authUser = Auth::user();
        return view('home', ['tasks' => $tasks, 'authUser' => $authUser]);
    }
}
