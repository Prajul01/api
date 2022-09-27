@extends('layouts.app')
@section('title')
    User
@endsection
@section('content')

    <div class="col-sm-6 col-md-9 col-lg-9">
    <div class="card card-primary">

                <div class="card-header">
                    <h3 class="card-title">{{$title}}-Form
                        <a href="{{route($route .'index')}}" class="btn btn-success">List</a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                {!! Form::open(['route' => $route .'store' , 'method' => 'post' , 'class' => 'form-horizontal','enctype'=>'multipart/form-data']) !!}
        @csrf

                <div class="card-body">
                    <div class="form-group row">
                        {!! Form::label('title', 'Title: <span class="required">*</span>',['class' => 'col-sm-2 col-form-label'],false); !!}
                        <br>
                        <div class="col-sm-10">
                            {!! Form::text('title', '', ['oninput'=>'makeSlug()', 'class'=>'form-control', 'placeholder'=>'Enter title']); !!}
                            @error('title')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                    </div>
                    <div class="form-group row">
                        {!! Form::label('description','Desciption: <span class="required">*</span>',['class' => 'col-sm-2 col-form-label'],false); !!}

                        <div class="col-sm-10">
                            {!! Form::text('description','', [ 'class'=>'form-control', 'placeholder'=>'Desctiption '] ); !!}
                            @error('description')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
            
                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('status','Status: <span class="required">*</span>',['class' => 'col-sm-2 col-form-label'],false); !!}

                        <div class="col-sm-10">
                            {!! Form::label('active','Active',false); !!}
                            {!! Form::radio('status', '1', true);!!}
                            {!! Form::label('de-active','De-Active',false); !!}
                            {!!Form::radio('status', '0',);!!}
                            {{-- {!! Form::radio('status','', [ 'class'=>'form-control', 'placeholder'=>'Enter Bio '] ); !!} --}}
                            @error('status')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
            
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="image">Image</label>

                        <div class="col-sm-10">
                            <input type="file"  name="image_file" id="image_file" class="form-control" >
                            @error('image')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
            
                        </div>
                    </div>
                </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
{{--        </form>--}}
    </div>
    </div>
@endsection

@section('csss')
    <style>
        .required{
            color: red;
        }
    </style>
@endsection

