@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!<br>


                    @if(isset($posts))
                        @foreach( $posts as $post )
                           <div class="row">  
                                <div class="col-md-3">
                                    {{ $post->title }}
                                </div>
                                <div class="col-md-3">
                                    {{ $post->description }}
                                </div>
                                <div class="col-md-3">
                                    <img src="/images/{{$post->image}}" alt="{{$post->image}}" height="200" width="150">
                                </div>
                                <div class="col-md-3">
                                    <button><a href="/delete/{{$post->id}}">Delete</a></button>
                                </div>
                           </div>
                            
                            
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
