<html>
@include('includes.head')
<body>
<div class="MainContainer">

    <div class="BodyContainerSignIn">
        <h5>Sign In</h5>
        <div class="LogInFormSet">
            {{ Form::open(array('url' => 'user/login', 'class'=>'form-horizontal', 'method'=>'post')) }}
                <div class="FirstSet">
                    <h6>Email address</h6>
                    <input type="text" name="email">
                </div>
                <div class="SecondSet">
                    <h6>Password</h6>
                    <input type="password" name="password">
                </div>
                {{--<div class="CheckBoxSetting">
                    <input type="checkbox" name="Remember">
                    <p>Stay signed in</p>
                </div>--}}
                <div class="SignInButton">
                    <input type="submit" value="Log In">
                </div>
                <div class="FormLinks">
                    <a class="ForgotPassword" href="#ForgotPassword">Forgot Password?</a>
                    <a class="NewUser" href="{{URL::to('user/register')}}">Sign up</a>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                </div>
            {{Form::close()}}
        </div>
    </div>
</div>
</body>
</html>