<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\Task;
use Exception;
use DB;

class ActionController extends Controller
{
  public function add(Request $request) {
    Log::debug('');
    Log::debug($request);
    Task::insert([
      'content' => $request->get("add")
  ]);
  return redirect('/');
  }

  public function index(Request $request) {
    $tasks = Task::all();
    Log::debug($tasks);
    return view('welcome')->with([
        "tasks" => $tasks
    ]);
  }

  public function delete(Request $request) {
    Log::debug('delete');
    Log::debug($request);
    Task::where("id",$request->get("id"))->delete();

    return redirect('/');
    
  }
}

  