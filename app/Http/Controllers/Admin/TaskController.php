<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
  public function index(){
    $tasks = Task::all();
    return view('tasks.admin_index', compact('tasks'));
  }
}
