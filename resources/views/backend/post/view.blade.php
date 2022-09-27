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
                    <td>Title</td>
                    <td>{{$data['row']->title}}</td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td>{{$data['row']->description}}</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>
                    
                    @if($data['row']->status ==1)
         
         <p>Active</p>
         
         @else{
           <p>De-active</p>
         }
         @endif
                </tr>
                <tr>
                    <td>Image</td>
                    <td><img src="{{asset('uploads/images/post/'.$data['row']->image)}}" class="image2" alt="" style="height: 100px; width: 100px; border: 15px solid white" ></td>
                </tr>
            </table>
        </div>
    </div>
@endsection
