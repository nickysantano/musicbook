@extends('layout.main')
{{--@extends('layouts.app')--}}

@section('judul', 'MUSIC')
@section('content')
{{--    {{ dd($users) }}--}}
    <div class="container">
        <div class="title">
            <h1>Edit Music</h1>
        </div>

        <div class="daftar">
            <form class="daftarform" method="POST" action="{{ route('music.update', $music) }}">
                {{ csrf_field() }}

                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <h2>Title:</h2>
                    <input class="form-control" type="text" placeholder="title here..." name="title" value="{{ $music->title }}"><br>
                </div>

                <div class="form-group">
                    <h2>Description:</h2>
                    <textarea class="form-control" type="text" placeholder="description..." name="description">{{ $music->description }}</textarea><br>
                </div>

                <select name="created_by" class="custom-select">
                    @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>

                <div class="form-group">
                    <h2>Date Event:</h2>
                    <input type="date" placeholder="dd/mm/yyyy" name="music_date" value="{{ $music->music_date }}"><br>
                </div>

                <input class="btnSubmit" type="submit" name="submit" value="submit">
            </form>
        </div>
    </div>

@endsection
