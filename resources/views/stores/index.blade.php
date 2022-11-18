@extends('base')

@section('content')
    <style>
        #container {
            overflow:hidden;
            position:relative;
            margin-top: 70px;
        }

        #hideMe {
        -moz-animation: cssAnimation 1s ease-in 2s forwards;
        /* Firefox */
        -webkit-animation: cssAnimation 1s ease-in 2s forwards;
        /* Safari and Chrome */
        -o-animation: cssAnimation 1s ease-in 2s forwards;
        /* Opera */
        animation: cssAnimation 1s ease-in 2s forwards;
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
        }
        @keyframes cssAnimation {
            to {
                width:0;
                height:0;
                overflow:hidden;
            }
        }
        @-webkit-keyframes cssAnimation {
            to {
                width:0;
                height:0;
                visibility:hidden;
            }
        }
    </style>

        <div id='container'>
            <div id='hideMe'>
            @if($info = Session::get('info'))

            <div class="card mb-3">
                <div class="card-body bg-success text-white rounded">
                    {{$info}}
                </div>
            </div>    

            @endif

            </div>
        </div>
        <div class="d-flex justify-content-between text-center">
            <div class="float-left">
            <h2>Stores</h2>
            </div>
            <div class="float-right">
            <a class="text-decoration-none text-dark fw-bolder" href="/stores/create" role="button">
            <i class="fa fa-plus" aria-hidden="true"></i> &nbsp;Create Store</a>
            </div>
        </div>

        <div>

        <table class="table table-striped table-light shadow p-3 mb-5 rounded text-center">
        <thead class="bg-opacity-10 border-bottom border-dark">
            <tr>
                <th>#</th>
                <th>Store Name</th>
                <th>Location</th>
                <th>Store Owner</th>
                <th>Net Worth</th>
                <th>...</th>
            </tr>
        </thead>

        <tbody>
            @foreach($stores as $s)

            <tr>
                <td>{{$s->id}}</td>
                <td>{{$s->name}}</td>
                <td>{{$s->location}}</td>
                <td>{{$s->owner}}</td>
                <td>{{$s->net_worth}}</td>
                <td class="text-center">
                    <div class="container">
                    <a href="{{url('/stores/' . $s->id)}}" class="text-decoration-none text-dark">
                    <i class="fa fa-pencil" aria-hidden="true"></i></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>



    <div class="modal fade" id="delModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Warning!</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    Are you sure you want to delete this store?
                </div>
                <form action="{{url('/stores/' . $s->id)}}" method="POST">
                    @csrf
                    @method('post')

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Proceed</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@stop