@extends('base')

@section('content')
    <style>
        .form-group{
            width: 300px;
        }

        .card {
            width: 40vw;
            margin-top: 80px;
        }
        #header {
            margin-top: 25px;
            margin-left: 50px;
            font-weight: 900;
        }
        #header a{
            margin-bottom: 90px;
        }
    </style>
<div class="card shadow mx-auto">
        <div id="header">
        <a class="text-decoration-none text-dark" href="{{url('/stores')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;&nbsp;Back</a>
        <h2 class="mt-3">Edit Store</h2>
        </div>
        <div class="row mx-auto my-3 d-flex justify-content-center">
            {!! Form::model($store, ['url'=>'/edit/' . $store->id, 'method'=>'put']) !!}
                <div class="form-group">
                    {{Form::label('name', 'Store Name')}}
                    {{Form::text('name',null,['class'=>'form-control'])}}
                </div>
                <div class="text-danger rounded text-center mt-1" style="background-color: #ffabab;">{{$errors->first('name')}}</div>
                <div class="form-group">
                    {{Form::label('location')}}
                    {{Form::text('location',null,['class'=>'form-control'])}}
                </div>
                <div class="text-danger rounded text-center mt-1" style="background-color: #ffabab;">{{$errors->first('location')}}</div>
                <div class="form-group">
                    {{Form::label('owner', 'Store Owner')}}
                    {{Form::text('owner',null,['class'=>'form-control'])}}
                </div>
                <div class="text-danger rounded text-center mt-1" style="background-color: #ffabab;">{{$errors->first('owner')}}</div>
                <div class="form-group">
                    {{Form::label('net_worth', 'Net Worth')}}
                    {{Form::number('net_worth',null,['class'=>'form-control'])}}
                </div>
                <div class="text-danger rounded text-center mt-1" style="background-color: #ffabab;">{{$errors->first('net_worth')}}</div>
                <div class="form-group d-flex justify-content-between">
                    <a class="btn btn-outline-danger mt-3" data-bs-toggle="modal" data-bs-target="#delModal"><i class="fa fa-trash-o" aria-hidden="true"></i> &nbsp;Delete</a>
                    <button class="btn btn-outline-dark mt-3" type="submit">
                    <i class="fa fa-refresh" aria-hidden="true"></i> &nbsp;Update
                    </button>
                </div>
            {!! Form::close() !!}
        </div>

        <div class="modal fade" id="delModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Warning!</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    Are you sure you want to delete this store?
                </div>
                {!! Form::open(['url', '/store', 'method'=>'delete'])!!}
                {{ method_field('DELETE')}}
                {{ csrf_field()}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-outline-success">Proceed</button>
                </div>
                {!! Form::close() !!}
                </div>
            </div>
        </div>
        
    </div>
@endsection