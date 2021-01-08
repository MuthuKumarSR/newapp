@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Profile</div>

                <div class="panel-body">
                    <div class="col-md-12">
                        Name : {{Auth::user()->name}}
                    </div>
                    <div class="col-md-12">
                        Email : {{Auth::user()->email}}
                    </div>
                    <div class="col-md-12">
                        Mobile Number : {{Auth::user()->phone}}
                    </div>  
                    <div class="col-md-12">
                        Account Open at : {{Auth::user()->created_at}}
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
