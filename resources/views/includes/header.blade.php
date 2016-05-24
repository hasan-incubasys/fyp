<?php
$user = Illuminate\Support\Facades\Auth::user();
?>
<header id="header">
    <div class="top-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-xs-12">
                    <a class="navbar-brand" href="{{URL::to('/')}}">
                        <img src="{{asset('images/logo.png')}}" width="92" height="67" alt="g">
                        <span>Answers.com</span>
                    </a>
                </div>
                <div class="col-sm-7 col-xs-12">
                    <ul class="client-area text-right list-unstyled list-inline">
                        @if($user)
                        <li><a href="#">{{$user->email}}</a></li>
                        @else
                        <li><a href="{{URL::to('user/login')}}" data-toggle="modal" data-target="#login-model"
                               class="btn-popup login">Login</a></li>
                        <li><a href="{{URL::to('user/register')}}" data-toggle="modal" data-target="#login-model"
                               class="btn-popup signup">Signup</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
