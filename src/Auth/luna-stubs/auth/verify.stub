
@extends('layouts.app')

@section('title', 'Verify')

@section('content')
<div class="wrapper">
    <br>
    <div class="row ">
        <div class="md-col-8 md-offset-2">
            <div class="panel panel--default">
                <div class="panel__header">{{ __('Verify Your Email Address') }}</div>
                <div class="panel__body">
                    @if (session('resent'))
                        <div class="notify notify--success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif
                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
