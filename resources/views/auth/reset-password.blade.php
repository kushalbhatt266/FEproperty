@extends('layouts.app')
@section('title', 'Login')
@section('page-heading','Login')
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
                        <h1 class="uppercase">Reset your password</h1>
                    </div>

			        <!-- Validation Errors -->
			        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form action="{{ route('password.update') }}" method="POST" autocomplete="off"> 
                    @csrf 
                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                    <input type="hidden" name="domain" value="fgrealestate">
                    <input type="hidden" name="status" value="1">
                        <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon w-100 mt-3 custom-field ">
                            <i class="material-icons mdc-text-field__icon text-muted">person</i>
                            <input class="mdc-text-field__input" name="email" type="email" value="{{old('email', $request->email)}}" readonly required>
                            <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                    <label class="mdc-floating-label">Username</label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                            </div>
                        </div>  
                        <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon mdc-text-field--with-trailing-icon w-100 custom-field mt-4 custom-field">
                            <i class="material-icons mdc-text-field__icon text-muted">lock</i>
                            <i class="material-icons mdc-text-field__icon text-muted" tabindex="1" id="password-toggle">visibility_off</i>
                            <input class="mdc-text-field__input" type="password" name="password" required>
                            <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                    <label class="mdc-floating-label">Password</label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                            </div>
                        </div>
                        <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon mdc-text-field--with-trailing-icon w-100 custom-field mt-4 custom-field">
                            <i class="material-icons mdc-text-field__icon text-muted">lock</i>
                            <i class="material-icons mdc-text-field__icon text-muted password-toggle" tabindex="1">visibility_off</i>
                            <input class="mdc-text-field__input" type="password" name="password_confirmation">
                            <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                    <label class="mdc-floating-label">Confirm Password</label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                            </div>
                        </div>
                        <div class="text-center mt-2"> 
                            <button class="mdc-button mdc-button--raised bg-accent" type="submit">
                                <span class="mdc-button__ripple"></span>
                                <span class="mdc-button__label">{{ __('Reset Password') }}</span> 
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