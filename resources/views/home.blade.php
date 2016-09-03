@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        You are logged in!

                        @foreach($a as $a_item)
                            {{ $a_item->content }}
                            {{ $a_item->user->email }}
                        @endforeach
                        <form action="{{url('/abcd')}}" method="post">
                            {!! csrf_field() !!}
                            First name: <input type="text" name="fname"><br>
                            Last name: <input type="text" name="lname"><br>
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
