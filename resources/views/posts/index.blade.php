@extends('layouts.admin')

@section('content')
<div class="container">
   <table class="table">
      <thead class="thead-dark">
         <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Created At</th>
            <th scope="col">Last Updated</th>
            <th scope="col">Actions</th>
         </tr>
      </thead>
      <tbody>
         @if (count($posts)>0)
            @foreach ($posts as $post)
               <tr>
                  <th scope="row">{{$post->id}}</th>
                  <td>{{$post->title}}</td>
                  <td>{{$post->author}}</td>
                  <td>{{$post->created_at}}</td>
                  <td>TBD</td>
                  <td>
                     <button class="btn btn-secondary btn-sm" type="button">Edit</button>
                     <button class="btn btn-danger btn-sm" type="button" action="{{">Delete</button>
                  </td>
               </tr>   
            @endforeach
         @else 
               <p>You don't have any posts yet.</p>
         @endif
         
      </tbody>
   </table>
</div><!-- end container -->
@endsection