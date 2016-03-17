<!doctype html>
<html>
@include('includes.head')
<body>

<header id="header">
    <div class="top-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-xs-12">
                    <a class="navbar-brand" href="#">
                        <img src="logo.png" width="92" height="67" alt="g">
                        <span>Answers.com</span>
                    </a>
                </div>
                <div class="col-sm-7 col-xs-12">
                    <ul class="client-area text-right list-unstyled list-inline">
                        <li><a href="{{URL::to('user/login')}}" data-toggle="modal" data-target="#login-model"
                               class="btn-popup login">Login</a></li>
                        <li><a href="{{URL::to('user/register')}}" data-toggle="modal" data-target="#login-model"
                               class="btn-popup signup">Signup</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="main">
    <div id="textbox"><input class="box" type="text" id="text"/>
        <button type="button" id="buttonDesign">Ask Question</button>
    </div>

    <div id='ya-left-rail' class='leftrail'>

        <div style="margin-top:40px; margin-left:10px">
            <ul>
                @foreach($categories as $category)
                <li class="category">
                    <a href="{{URL::to('sub_category/'.$category->id)}}" title="">{{$category->title}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>


    <div id="ya-center-rail" style="margin-left:200px;margin-right:191px;margin-top:-171px;">


        <div>
            <p class='topresult'>Top Results</p>
        </div>


        <ul style="border-style:solid;border-width:3px;border-color:orange;">

            @foreach($questions as $question)
            <li>
                <div>
                    <a href="#">

                    </a>
                </div>
                <div class="Bfc">
                    <h3><a>{{$question->title}}</a></h3>
                    <div>
                        <span>Best answer:</span> John Goodman only said that he respected and looked up to her as an
                        actress, which is why he felt awkward interrupting her conversation at the afterparty. That
                        doesn&#039;t mean she&#039;s an A-lister, she&#039;s just a talented comedienne from SNL that
                        also acts in some of Lorne Michaels productions. Goodman has hosted SNL tons of times, so it
                        probably comes from that connection.
                    </div>
                    <div class="Clr-888 Fz-12 Lh-18">
                        51 answers

                        <a href="#">Celebrities</a>
                        2 days ago
                    </div>
                </div>
            </li>
            @endforeach
            <hr>
            {{--<li>--}}
                {{--<div>--}}
                    {{--<a href="#">--}}

                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="Bfc">--}}
                    {{--<h3><a>Who is Kristen Wiig?</a></h3>--}}

                    {{--<div>--}}
                        {{--<span>Best answer:</span> John Goodman only said that he respected and looked up to her as an--}}
                        {{--actress, which is why he felt awkward interrupting her conversation at the afterparty. That--}}
                        {{--doesn&#039;t mean she&#039;s an A-lister, she&#039;s just a talented comedienne from SNL that--}}
                        {{--also acts in some of Lorne Michaels productions. Goodman has hosted SNL tons of times, so it--}}
                        {{--probably comes from that connection.--}}

                    {{--</div>--}}
                    {{--<div class="Clr-888 Fz-12 Lh-18">--}}
                        {{--51 answers--}}

                        {{--<a href="#">Celebrities</a>--}}

                        {{--2 days ago--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<hr>--}}


    </div>


</div>

</div>
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <a href="#" class="navbar-brand">
                    <img src="logo.png" width="92" height="67" alt="g">
                    <span>Answers.com</span>
                </a>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ul class="nav navbar-default quick-links list-inline">
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Footer Links here</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Page Links also</a></li>
                </ul>

            </div>
        </div>
    </div>
</footer>
</div>

</body>


</html>