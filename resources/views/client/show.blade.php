@extends('layouts.master')

@section('content')
     <table class="table">
         <tr>
             <td>{{$client->name}}</td>
             <td>{{$client->status}}</td>
             <td>{{$client->Telephone}}</td>
             <td>{{$client->email}}</td>
             <td>{{$client->entreprise['name']}}</td>
         </tr>
     </table>
     <a href="/affiches/{{$client->id}}/edit" class="btn btn-primary">Modifier</a>
@endsection
