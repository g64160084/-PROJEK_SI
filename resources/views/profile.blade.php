@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile Page</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

            <h3><b>Nama</b></h3>
            <p>{{ Auth::user()->name }}</h3>
            <h3><b>E-mail</b></h3>
            <p>{{ Auth::user()->email }}</p><br/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
