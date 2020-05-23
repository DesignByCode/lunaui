
@extends('layouts.app')

@section('title', 'Verify')

@section('content')
<div class="wrapper">

    <div class="row pt-6 ">
        <div class="md-col-6 md-offset-3">
            <div class="panel shadow--1">
                <div class="panel__header">{{ __('Verify Your Email Address') }}</div>
                <div class="panel__body">
                    @if (session('resent'))
                        <div class="notify notify--success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif
                        <p>
                            {{ __('Before proceeding, please check your email for a verification link.') }}
                            {{ __('If you did not receive the email') }}
                        </p>

                        <form class="form__group" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn--primary">{{ __('click here to request another') }}</button>.
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
