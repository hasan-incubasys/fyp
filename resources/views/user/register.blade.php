<html>
@include('includes.head')
<body>
<div class="MainContainer">
    <div class="HeaderContainer">
        <div class="HeaderTop">
            <div class="LogoSet">
            </div>
            <div class="AccAdLinks">
            </div>
        </div>
    </div>
    <div class="BodyContainerSignUp">
        <h5>Sign up</h5>
        <div class="CreateAccountFormSet">
            {{ Form::open(array('url' => 'user/register', 'class'=>'form-horizontal', 'method'=>'post')) }}
                <div class="FirstSet">
                    <h6>Email<span>*</span></h6>
                    <input type="text" name="email">
                </div>
                <div class="SecondSet">
                    <h6>Password<span>*</span></h6>
                    <input type="password" name="password">
                </div>
                <div class="ThirdSet">
                    <h6>Repeat Password<span>*</span></h6>
                    <input type="password" name="confirm_password">
                </div>
                <div class="SignUpButton">
                    <input type="submit" value="Create">
                </div>
            {{Form::close()}}
        </div>
    </div>
</div>
</body>
</html>