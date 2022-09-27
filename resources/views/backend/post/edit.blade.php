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
            {!! Form::model($data['row'], ['route' => [$route.'update', $data['row']->id ]]) !!}
            {!! Form::hidden('_method', 'PUT') !!}
            @csrf

            <div class="card-body">
                <div class="form-group row">
                    {!! Form::label('title', 'Title *',['class' => 'col-sm-2 col-form-label']); !!}

                    <div class="col-sm-10">
                        {!! Form::text('title',null, ['oninput'=>'makeSlug()', 'class'=>'form-control', 'placeholder'=>'Enter name']); !!}
                        @error('title')
                        <p class="text-danger">{{$message}}</p>
                        @enderror

                    </div>

                </div>
                <div class="form-group row">
                    {!! Form::label('description', 'Description *',['class' => 'col-sm-2 col-form-label']); !!}

                    <div class="col-sm-10">
                        {!! Form::text('description',null, [ 'class'=>'form-control', 'placeholder'=>'email '] ); !!}
                        <!-- /.card-body -->
                    </div>
                </div>


                <div class="form-group row">
                    {!! Form::label('status', 'Status *',['class' => 'col-sm-2 col-form-label']); !!}

                    <div class="col-sm-10">
                        {!! Form::text('status',null, [ 'class'=>'form-control', 'placeholder'=>'email '] ); !!}
                        <!-- /.card-body -->
                    </div>
                </div>

                {{-- <div class="form-group row">
                    {!! Form::label('image', 'Image *',['class' => 'col-sm-2 col-form-label']); !!}

                    <div class="col-sm-10">
                        {!! Form::text('image',null, [ 'class'=>'form-control', 'placeholder'=>'email '] ); !!}
                        <!-- /.card-body -->
                    </div>
                </div> --}}
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            {!! Form::close() !!}
            {{--        </form>--}}
        </div>
    </div>
@endsection
{{--@section('scripts')--}}
{{--    --}}
{{--@endsection--}}

