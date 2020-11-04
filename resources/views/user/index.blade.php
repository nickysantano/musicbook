{{--@extends('layout.main')--}}
@extends('layouts.app')

@section('judul', 'HOME')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">List Data</h1>
        </div>
        @auth()
        <div class="row">
            <div class="col-md-2 offset-md-10">
                <a href="{{route('music.create')}}" class="btn btn-primary btn-block" role="button" aria-pressed="true">ADD</a>
            </div>
        </div>
        @endauth
        <div class="row" style="margin-top: 30px;">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Music List</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            @foreach($user->music as $music)
                                <li>{{$music->title}}</li>
                            @endforeach
                        </td>

{{--                        @auth()--}}
{{--                            <td>--}}
{{--                                <form action="{{ route('music.destroy', $music) }}" method="POST">--}}
{{--                                    @csrf--}}
{{--                                    <input type="hidden" name="_method" value="DELETE">--}}
{{--                                    <button class="btn btn-danger" type="submit">DELETE</button>--}}
{{--                                </form>--}}
{{--                            </td>--}}
{{--                        @endauth--}}
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
