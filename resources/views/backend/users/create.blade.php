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
                        {!! Form::label('name', 'Name: <span class="required">*</span>',['class' => 'col-sm-2 col-form-label'],false); !!}
                        <br>
                        <div class="col-sm-10">
                            {!! Form::text('name', '', ['oninput'=>'makeSlug()', 'class'=>'form-control', 'placeholder'=>'Enter name']); !!}
                            @error('name')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                    </div>
                    <div class="form-group row">
                        {!! Form::label('age','Age: <span class="required">*</span>',['class' => 'col-sm-2 col-form-label'],false); !!}

                        <div class="col-sm-10">
                            {!! Form::number('age','', [ 'class'=>'form-control', 'placeholder'=>'Enter your age '] ); !!}
                            @error('age')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
            
                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('bio','Bio: <span class="required">*</span>',['class' => 'col-sm-2 col-form-label'],false); !!}

                        <div class="col-sm-10">
                            {!! Form::text('bio','', [ 'class'=>'form-control', 'placeholder'=>'Enter Bio '] ); !!}
                            @error('bio')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
            
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="image">Image</label>

                        <div class="col-sm-10">
                            <input type="file"  name="image_file" id="image_file" class="form-control" >
                            {{-- @error('image')
                            <p class="text-danger">{{$message}}</p>
                            @enderror --}}
            
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
@section('scripts')
    <script>

        function makeSlug() {
            var name = document.getElementById('name').value;
            var slug = document.getElementById('slug');
            slug.value = string_to_slug(name);
        }
        function string_to_slug(str) {
            str = str.replace(/^\s+|\s+$/g, ''); // trim
            str = str.toLowerCase();

            // remove accents, swap ñ for n, etc
            var from = "ãàáäâẽèéëêìíïîõòóöôùúüûñç·/_,:;";
            var to   = "aaaaaeeeeeiiiiooooouuuunc------";
            for (var i = 0, l = from.length; i < l; i++) {
                str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
            }

            str = str.replace(/\s+/g, '-') // collapse whitespace and replace by -
                .replace(/\?/g, '-')
                .replace(/-+/g, '-'); // collapse dashes

            return str;
        };

    </script>
@endsection
@section('csss')
    <style>
        .required{
            color: red;
        }
    </style>
@endsection

