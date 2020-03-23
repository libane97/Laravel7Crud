@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="form">
                    <form action="{{route('client.store')}}" method="post">
                        @include('includes.form')
                        <div class="form-group">
                            <button type="submit" class="btn btn-dark">Ajoute</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
