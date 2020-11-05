{{-- --}}
@extends('layouts.app')

@section('judul', 'MUSIC')
@section('content')

    <div class="container">
        <div class="title">
            <h1>Add the Music</h1>
        </div>

        <div class="daftar">
            <form class="daftarform" method="POST" action="{{ route('music.store') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <h2>Title:</h2>
                    <input class="form-control" type="text" placeholder="title here..." name="title"><br>
                </div>

                <div class="form-group">
                    <h2>Description:</h2>
                    <textarea class="form-control" type="text" placeholder="description..." name="description"></textarea><br>
                </div>

                <div class="form-group">
                    <select name="created_by" class="custom-select">
                        @foreach($users as $user)
                            <option value="{{ $user->id }}"> {{ $user->name. '('. $user->email .')' }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <h2>Date Event:</h2>
                    <input type="date" placeholder="dd/mm/yyyy" name="music_date"><br>
                </div>

                <input class="btnSubmit" type="submit" name="submit" value="submit">
            </form>
        </div>
    </div>

@endsection
