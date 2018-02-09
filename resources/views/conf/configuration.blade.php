@extends('layouts.app')

@section('top_menu')
    <li><a href="{{ route('show_dashboard')}}">Dashboard</a></li>
    <li><a href="{{ route('show_report') }}">Reports</a></li>
    <li class="active"><a href="{{ route('show_configuration') }}">Configuration</a></li>
@endsection


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                {{--<div class="panel-heading">Dashboard</div>--}}

                <div class="panel-body">
                  Configuration
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
