{{--@extends('layout.main')--}}
@extends('layouts.app')

@section('judul', 'CONTACT')
@section('content')

    <div id="contents"></div>
    <div class="contact-clean">
        <form method="post">
            <h2 class="text-center">Contact us</h2>
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
            <div class="form-group"><input class="form-control is-invalid" type="email" name="email" placeholder="Email"><small class="form-text text-danger">Please enter a correct email address.</small></div>
            <div class="form-group"><textarea class="form-control" name="message" placeholder="Message" rows="14"></textarea></div>
            <div class="form-group"><button class="btn btn-primary" id="btn-contact_submit" type="submit">send </button></div>
        </form>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

@endsection
