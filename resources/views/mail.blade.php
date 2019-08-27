@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard                

                

                    <h1>Hi, {{ $name }}</h1>
                    <p>Sending Mail from Laravel.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
