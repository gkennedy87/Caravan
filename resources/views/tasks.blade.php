@extends('layouts.admin')

@section('content')
   <div id="app">
       <div class="container-fluid bg-primary" id="taskContainer">
            <div class="row">
                <h1 class="text-light">Tasks</h1>
            </div>
            <div class="row">
                <task-form />
            </div>
            <div class="row">
                <task-list />
            </div>       
       
        </div>
        
   </div>
           

@endsection