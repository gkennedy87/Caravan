@extends('layouts.blog')

@section('content')
    <div class="container">
        <div class="row">
        <div class="col-md-8">
        {{$posts->links()}}     
        @if (count($posts)>0)
            @foreach ($posts as $post)
            <div class="card mb-4">
                    <img class="card-img-top" src="http://placehold.it/300x100" alt="Card image cap">
                    <div class="card-body">
                      <h2 class="card-title">{{$post->title}}</h2>
                      <p class="card-text">{!! str_limit($post->body,50)!!}</p>
                      <a href="#" class="btn btn-primary">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                      {{$post->created_at}} by
                      <a href="#">{{$post->author}}</a>
                    </div>
                  </div>
          
            @endforeach
        @else 
            <h3>You don't have any posts yet.</h3>
        @endif
    </div>
    @include('inc.b-sidebar')
    {{$posts->links()}}
    </div> <!--end row -->
</div><!-- end container -->
@endsection