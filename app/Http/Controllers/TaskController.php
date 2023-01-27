<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{

    public function index(Request $request) {
        if ($request->search) {
            $task = DB::table('tasks')->where('task', 'LIKE', "%$request->search%")->get();
        }
        return $task;
    }

    public function show($id) {
        $task = DB::table('tasks')->where('id', $id)->get();
        return $task;
    }

    public function store(Request $request) {
        // $this->taskList[$request->key] = $request->task;
        // return $this->taskList;
        DB::table('tasks')->insert([
            'task' => $request->task,
            'user' => $request->user
        ]);
        return 'Sukses';
    }

    public function update(Request $request,$id){
        $task = DB::table('tasks')->where('id', $id)->update([
            'task' => $request->task,
            'user' => $request->user
        ]);
        return 'sukses';
    }

    public function delete($id){
        $task = DB::table('tasks')->where('id', $id)->delete();
        return 'sukses';
    }

};
