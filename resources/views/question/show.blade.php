<!doctype html>
<html>
@include('includes.head')
<body>
@include('includes.header')
<div id="main">
@include('includes.sidebar')
    <div  id="ya-center-rail"  style="margin-left:200px;margin-right:191px;margin-top:-460px;">
        <div>
            <p class='topresult' >Top Results</p>
        </div>
        <h2>Q. {{$question->title}} ?</h2>
        {!! $question->description !!}
        <hr>
        <h3>Post your Answer</h3>
        <form id="">

        </form>

        <ul>
            @foreach($question->answers as $key=>$answer)
                <li>
                    <div class="Bfc">
                        <div >
                            <p><strong>Ans.</strong> {{$answer->description}}</p>
                        </div>
                        <div class="Clr-888 Fz-12 Lh-18">
                            <p>{{time_ago($answer->created_at)}} - {{$answer->votes}} votes</p>
                        </div>
                    </div>
                </li>
                <hr   style="border-style:solid;border-width:1px;border-color:orange;">
            @endforeach
        </ul>
    </div>
</div>

@include('includes.footer')

</body>
</html>