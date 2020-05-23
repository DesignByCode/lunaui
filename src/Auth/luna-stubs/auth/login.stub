@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="wrapper">

    <div class="row pt-6">
        <div class="md-col-6 md-offset-3">
            <div class="panel shadow--1">
                <div class="panel__header">{{ __('Login') }}</div>
                <div class="panel__body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf
                        <div class="form__group {{ $errors->has('email') ? ' has__danger' : '' }} ">
                            <label for="email" class="form__label font--bold">{{ __('E-Mail Address') }}</label>
                            <div class="form__wrap">
                                <i class="lunacon lunacon-mail-envelope"></i>
                                <input type="email" name="email" id="email" class="form__item" value="{{ old('email') }}">
                            </div>
                            @if ($errors->has('email'))
                                <strong class="form__helper">
                                    {{ $errors->first('email') }}
                                </strong>
                            @endif
                        </div>
                        <div class="form__group {{ $errors->has('password') ? ' has__danger' : '' }} ">
                            <label for="password" class="form__label font--bold">{{ __('Password')  }}</label>
                            <div class="form__wrap">
                                <i class="lunacon lunacon-shield-lock-solid"></i>
                                <input type="password" name="password" id="password" class="form__item">
                            </div>
                            @if ($errors->has('password'))
                                <strong class="form__helper">
                                    {{ $errors->first('password') }}
                                </strong>
                            @endif
                        </div>
                        <div class="form__group">
                            <div class="form__group__checkbox flex">
                               <input type="checkbox" class="form__checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                               <label for="remember" class="from__label__checkbox font--bold"> {{ __('Remember Me') }}</label>
                            </div>
                        </div>
                        <div class="form__group">
                            <div class="btn__group">
                                <button type="submit" class="btn btn--primary">
                                    {{ __('Login') }}
                                </button>
                                <a class="btn btn-default" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
