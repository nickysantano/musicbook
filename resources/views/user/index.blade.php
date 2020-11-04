{{--@extends('layout.main')--}}
@extends('layouts.app')

@section('judul', 'HOME')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">Producer Data</h1>
        </div>
        @auth()
        <div class="row">
            <div class="col-md-2 offset-md-10">
                <a href="{{route('user.create')}}" class="btn btn-primary btn-block" role="button" aria-pressed="true">ADD</a>
            </div>
        </div>
        @endauth
        <div class="row" style="margin-top: 30px;">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Producer Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Music List</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td><a @auth() href="{{ route('user.edit', $user) }}@endauth">{{$user->name}}</a></td>
                        <td>{{$user->email}}</td>
                        <td>
                            @foreach($user->music as $music)
                                <li>{{$music->title}}</li>
                            @endforeach
                        </td>

                        @auth()
                            <td>
                                <form action="{{ route('user.destroy', $user) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-danger" type="submit">DELETE</button>
                                </form>
                            </td>
                        @endauth
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
