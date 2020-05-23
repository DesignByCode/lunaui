@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="wrapper">
    <div class="row pt-6">
        <div class="md-col-6 md-offset-3">
            <div class="panel shadow--1">
                <div class="panel__header">{{ __('Reset Password') }}</div>
                <div class="panel__body">
                    @if (session('status'))
                        <div class="form__group">
                            <div class="notify notify--success" role="alert">
                                {{ session('status') }}
                            </div>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
                         @csrf
                         <div class="form__group {{ $errors->has('email') ? ' has__danger' : '' }} ">
                             <label for="email" class="form__lable">{{ __('E-Mail Address') }}</label>
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
                         <div class="form__group">
                             <button type="submit" class="btn btn--primary">
                                 {{ __('Send Password Reset Link') }}
                             </button>
                         </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
