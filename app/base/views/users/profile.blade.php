@extends('layouts.default')
@section('content')
    <h2>My Profile</h2>
    <hr>

    <table class="table table-striped table-bordered">
        <tr>
            <th width="200px" class="text-right">First Name :</th>
            <td>{{$user->first_name}} {{$user->last_name}}</td>
        </tr>
        <tr>
            <th width="200px" class="text-right">Username :</th>
            <td>{{$user->username}}</td>
        </tr>
        <tr>
            <th width="200px" class="text-right">Email :</th>
            <td>{{$user->email}}</td>
        </tr>
        <tr>
            <th width="200px" class="text-right">Status :</th>
            <td>{{$user->status()}}</td>
        </tr>
        <tr>
            <th width="200px" class="text-right">Roles :</th>
            <td>
                <ul class="list-unstyled">
                    @foreach ($user->roles as $role)
                        <li>{{$role->name}}</li>
                    @endforeach
                </ul>
            </td>
        </tr>
    </table>

    <div class="well">
        <a href="{{action('UsersController@getChangePassword')}}" class="btn btn-default">Change My Password</a>
    </div>
@stop
