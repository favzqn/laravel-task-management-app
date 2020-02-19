@extends('layouts.app')

@section('title')
    Todos List
@endsection

@section('content')
<h1 class="text-center my-5">Todos Page</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">

            <div class="card-header">
                Todos
            </div>
    
            <div class="card-body">
                <ul class="list-group">
                    @foreach ($todos as $todo)
                        <li class="list-group-item"> 
                            {{ $todo->name }}
                        
                            @if(!$todo->completed)
                            <a href="/todos/{{ $todo->id }}/complete" class="btn btn-success btn-sm float-right ml-2 mr-1">Complete</a>
                            @else
                            <button class="btn btn-default btn-sm float-right ml-1">Completed</button>
                            @endif

                            <a href="/todos/{{ $todo->id }}" class="btn btn-primary btn-sm float-right">View</a>
                        
                        </li>   
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
</div>
@endsection