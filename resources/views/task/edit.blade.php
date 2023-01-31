@extends('layouts.app')
@section('main') 
<div class="mt-5 mx-auto" style="width: 380px">
    <div class="card">
        <div class="card-body">
            <form action="{{url("/tasks/$task->id")}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <label for="" class="form-label">User</label>
                    <input type="text" class="form-control" name="user" value="{{$task->user}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Task</label>
                    <textarea class="form-control" id="" rows="3" name="task">{{$task->task}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
</div>
@endsection