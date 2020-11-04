{{--@extends('layout.main')--}}
@extends('layouts.app')

@section('judul', 'MUSIC')
@section('content')
    <div class="container">
        <div class="title">
            <h1>Music List</h1>
        </div>
        <div class="row">
            @auth()
            <div class="col-md-2 offset-md-10">
                <a href="{{ route('music.create') }}" class="btn btn-primary btn-block" role="button"
                   aria-pressed="true">ADD</a>
            </div>
            @endauth
        </div>
        <hr>

        <div id="contents">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr class="table-headings">
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Owned By</th>
                        <th scope="col">Views</th>
                        <th scope="col">Updated At</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr id="table-body">
                        @foreach($musics as $music)
                            <td><a @auth() href="{{ route('music.edit', $music) }}@endauth">{{ $music->title }}</a></td>
                            <td>{{ $music->description }}</td>
                            <td>{{ $music->creator->name }}</td>
                            <td>{{ $music->views }}</td>
                            <td>{{ $music->updated_at }}</td>
                            <td>{{ $music->created_at }}</td>
                            @auth()
                                <td>
                                    <form action="{{ route('music.destroy', $music) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger" type="submit">DELETE</button>
                                    </form>
                                </td>
                            @endauth
                    </tr>
                    @endforeach
                    <tr></tr>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
@endsection
