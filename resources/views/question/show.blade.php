<!doctype html>
<html>
@include('includes.head')
<body>
@include('includes.header')
<div id="main">
@include('includes.sidebar')
    <div  id="ya-center-rail"  style="margin-left:200px;margin-right:191px;margin-top:-460px;">
        <h2>Q. {{$question->title}} ?</h2>
        {!! $question->description !!}
        <hr>
        <h3>Post your Answer</h3>
        <form id="post_answer" method="post" action="{{action('QuestionController@post_answer')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <textarea name="answer" id="answer"></textarea>
            <input type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id}}"/>
            <input type="hidden" id="question_id"name="question_id" value="{{$question->id}}"/>
            <input type="submit" value="submit" class="submit_answer buttonDesign" />
        </form>

        <ul>
            @foreach($question->answers as $key=>$answer)
                <li class="answer_list">
                    <div class="Bfc">
                        <div >
                            <p><strong>Ans.</strong> {!! $answer->description !!}</p>
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