@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                 <h1>Editer le profile {{$client->name}}</h1>
                <div class="form">
                    <form action="/modifier/{{$client->id}}" method="POST">
                        @method('PATCH')
                        @include('includes.form')
                       <div class="form-group">
                            <button type="submit" class="btn btn-dark">Modifier</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
