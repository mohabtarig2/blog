@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                 <?php

        if(Auth::user()->roles->name =='consulte'){
            echo 'consulte';
        }elseif(Auth::user()->roles->name =='admin'){
            echo 'admin';
        }
        ?>
                    {{ __('You are logged i consulte!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
