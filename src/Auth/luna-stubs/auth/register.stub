@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="wrapper">
    <br>
    <div class="row ">
        <div class="md-col-8 md-offset-2">
            <div class="panel panel--default">
                <div class="panel__header">{{ __('Register') }}</div>
                <div class="panel__body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf
                        <div class="form__group {{ $errors->has('name') ? ' has__danger' : '' }} ">
                            <label for="name" class="form__lable">{{ __('Name') }}</label>
                            <input type="name" name="name" id="name" class="form__item" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <strong class="form__helper">
                                    {{ $errors->first('name') }}
                                </strong>
                            @endif
                        </div>
                        <div class="form__group {{ $errors->has('email') ? ' has__danger' : '' }} ">
                            <label for="email" class="form__lable">{{ __('E-Mail Address') }}</label>
                            <input type="email" name="email" id="email" class="form__item" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <strong class="form__helper">
                                    {{ $errors->first('email') }}
                                </strong>
                            @endif
                        </div>
                        <div class="form__group {{ $errors->has('password') ? ' has__danger' : '' }} ">
                            <label for="password" class="form__lable">{{ __('Password') }}</label>
                            <input type="password" name="password" id="password" class="form__item" value="{{ old('password') }}">
                            @if ($errors->has('password'))
                                <strong class="form__helper">
                                    {{ $errors->first('password') }}
                                </strong>
                            @endif
                        </div>
                        <div class="form__group">
                            <label for="password-confirm" class="form__lable">{{ __('Password Confirm') }}</label>
                            <input id="password-confirm" type="password" class="form__item" name="password_confirmation">
                        </div>
                        <div class="form__group">
                            <button type="submit" class="btn btn--primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
