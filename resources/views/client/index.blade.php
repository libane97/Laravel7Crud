@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <table class="table table-hover" border="1">
                    <tr>
                        <td>Identifiant</td>
                        <td>Nom</td>
                        <td>Email</td>
                        <td>Status</td>
                        <td>Telephone</td>
                        <td>Entreprise</td>
                        <td>Action</td>
                    </tr>
                    @foreach($client as $data)
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->status}}</td>
                        <td>{{$data->Telephone}}</td>
                        <td>{{$data->entreprise['name']}}</td>
                        <td>
                            <a href="/affiches/{{$data->id}}" class="btn btn-warning">Show</a>
                        <form action="supprime/{{$data->id}}" method="POST" style="displaye:none">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Supprime</button>
                         </form>
                        </td>
                    </tr>
                    @endforeach
                    <tr></tr>
                </table>
            </div>
        </div>
    </div>
@endsection
