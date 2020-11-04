{{--@extends('layout.main')--}}
@extends('layouts.app')

@section('judul', 'MUSIC')
@section('content')

    <div class="container">
        <div class="title">
            <h1>Add the Producer</h1>
        </div>

        <div class="daftar">
            <form class="daftarform" method="POST" action="{{ route('user.store') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <h2>Name:</h2>
                    <input class="form-control" type="text" placeholder="name here..." name="name"><br>
                </div>

                <div class="form-group">
                    <h2>Email:</h2>
                    <textarea class="form-control" type="text" placeholder="email@example.com" name="email"></textarea><br>
                </div>

                <div class="form-group">
                    <h2>Password:</h2>
                    <input class="form-control" type="password" placeholder="password..." name="password"><br>
                </div>

                <input class="btnSubmit" type="submit" name="submit" value="submit">
            </form>
        </div>
    </div>

@endsection
