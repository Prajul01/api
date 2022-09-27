@extends('layouts.app')
@section('title')
    User | View
@endsection
@section('content')
    <div class="col-sm-6 col-md-9 col-lg-9">
        <div class="card card-primary">

            <div class="card-header">
                <h3 class="card-title">{{$title}}
{{--                    <a href="{{route($route .'index')}}" class="btn btn-success">List</a>--}}
                </h3>
            </div>
            <table class="table-bordered">
                <tr>
                    <td>Name</td>
                    <td>{{$data['row']->name}}</td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td>{{$data['row']->age}}</td>
                </tr>
                <tr>
                    <td>Bio</td>
                    <td>{{$data['row']->bio}}</td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td><img src="{{asset('uploads/images/user/'.$data['row']t->image)}}" class="image2" alt="" style="height: 100px; width: 100px; border: 15px solid white" ></td>
                </tr>
            </table>
        </div>
    </div>
@endsection
