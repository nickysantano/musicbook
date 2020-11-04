@extends('layout.main')
{{--@extends('layouts.app')--}}

@section('judul', 'MUSIC')
@section('content')

    <div class="container">
        <div class="title">
            <h1>Edit Music</h1>
        </div>

        <div class="daftar">
            <form class="daftarform" method="POST" action="{{ route('user.update', $user) }}">
                {{ csrf_field() }}

                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <h2>Producer Name:</h2>
                    <input class="form-control" type="text" placeholder="name here..." name="name" value="{{ $user->name }}"><br>
                </div>

                <div class="form-group">
                    <h2>Email:</h2>
                    <input class="form-control" type="text" placeholder="email@example.com" name="email" value="{{ $user->email }}"><br>
                </div>

                <div class="form-group">
                    <input type="hidden" name="password" value="{{ $user->password }}">
                </div>

                <input class="btnSubmit" type="submit" name="submit" value="submit">
            </form>
        </div>
    </div>

@endsection
