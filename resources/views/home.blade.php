@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <a href="{{ route('homepage') }}">
                    <button type="button" class="btn btn-outline-secondary" style="float: right;">Homepage</button>
                    </a>
                    <br><br><br>
                    <div class="text-center">
                    <div class="border">
                    <div class="border">
                    <h1>News and Updates</h1>
                    </div>
                    <p><strong>NEWS</strong> If you want to know about this website you can visit the<a href="{{ route('information') }}"> information page</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection