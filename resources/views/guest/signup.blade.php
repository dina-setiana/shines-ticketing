@extends('master')

@section('title', 'Sign Up')

@section('navbar')
    @include('guest.navbar')
@endsection

@section('content')
    <div class="ui centered grid">
        <div class="thirteen wide mobile eleven wide tablet five wide computer five wide large screen column">
            <form action="/signup" method="POST"
                  class="ui form center aligned padded segment @if(sizeof($errors->all()) > 0)) error @endif">

                <h1 class="ui teal center aligned header">SIGN UP</h1>
                <div class="ui clearing divider"></div>
                <p>Already have an account?? <a href="login">Log In</a></p>

                {{ csrf_field() }}

                @include('layout.errors')

                <div class="two fields">
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="user icon"></i>
                            <input type="text" name="first_name" placeholder="First Name"
                                   value="{{ old('first_name') }}">
                        </div>
                    </div>
                    <div class="field">
                        <input type="text" name="last_name" placeholder="Last Name"
                               value="{{ old('last_name') }}">
                    </div>
                </div>

                <div class="field">
                    <div class="ui left icon input">
                        <i class="mail icon"></i>
                        <input type="text" name="email" placeholder="E-mail address" value="{{ old('email') }}">
                    </div>
                </div>

                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="password" placeholder="Password">
                    </div>
                </div>

                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="password_confirmation" placeholder="Confirm password">
                    </div>
                </div>

                <button class="ui fluid blue basic button">Sign Up</button>
                <p>By signing up, you agree to our <a href="#">User Agreement and Privacy Notice</a></p>
            </form>
        </div>
    </div>
@endsection