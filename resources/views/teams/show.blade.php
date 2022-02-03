@extends('layouts.app')

@section('content')
<div class="m-auto w-4/5 py-24">
    <div class="text-center">
        <h1 class="text-5xl uppercase bold">
            Lists
        </h1>
    </div>
    
    <div>
        <table class="table-auto">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teams as $team)
                <tr>
                    <td>{{$team['id']}}</td>
                    <td>{{$team['name']}}</td>
                    <td>{{$team['role']}}</td>
                    <td>{{$team['Phone_number']}}</td>
                    <td>{{$team['address']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection