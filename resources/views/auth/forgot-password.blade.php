@extends('layouts.app')
@section('title', 'Forgot your password')
@section('page-heading','Forgot your password')
@push('styles')
<style>
  
</style>
@endpush
@section('content')
 <main>   
    <div class="px-3">  
        <div class="theme-container">  
            <div class="row center-xs middle-xs my-5"> 
                <div class="mdc-card p-3 p-relative mw-500px">
                    <div class="column center-xs middle-xs text-center">  
                        <!-- <h1 class="uppercase">Sign In</h1> -->
                        <p class="accent-color normal w-100">
                            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                        </p>  
                    </div>
                    <!-- Session Status -->
			        <x-auth-session-status class="mb-4" :status="session('status')" />

			        <!-- Validation Errors -->
			        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form action="{{ route('password.email') }}" method="POST" autocomplete="off"> 
                    @csrf 
                    <input type="hidden" name="domain" value="fgrealestate">
                    <input type="hidden" name="status" value="1">
                        <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon w-100 mt-3 custom-field ">
                            <i class="material-icons mdc-text-field__icon text-muted">person</i>
                            <input class="mdc-text-field__input" name="email" type="email" value="{{old('email')}}" autofocus required>
                            <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                    <label class="mdc-floating-label">Email</label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                            </div>
                        </div> 
                        <div class="text-center mt-2"> 
                            <button class="mdc-button mdc-button--raised bg-accent" type="submit">
                                <span class="mdc-button__ripple"></span>
                                <span class="mdc-button__label">{{ __('Email Password Reset Link') }}</span> 
                            </button>
                        </div>  
                    </form>
                </div>                    
            </div>  
        </div>  
    </div> 
</main> 
@endsection
@push('scripts')
@endpush