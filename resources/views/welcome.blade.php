<!doctype html>
<html>
@include('includes.head')
<body>
@include('includes.header')
<div id="main">
    @include('includes.sidebar')
    <div id="ya-center-rail" style="margin-left:200px;margin-right:191px;margin-top:-460px;">
        <div>
            <p class='topresult'>Top Results</p>
        </div>
        <ul style="border-style:solid;border-width:3px;border-color:orange;">
            @foreach($questions as $question)
            <li>
                <div class="Bfc">
                    <h3><a href="{{URL::to('question/'.$question->id)}}">{{$question->title}}</a></h3>
                    <div>
                        <span>Best answer:</span>
                        @if(isset($question->best_answer($question->id)[0]))
                        {{$question->best_answer($question->id)[0]->description}}
                        @else
                        <strong>0 Upvoted Answer</strong>
                        @endif
                    </div>
                    <div class="Clr-888 Fz-12 Lh-18">
                       {{count($question->answers)}} answers
                        <a href="#">{{\App\SubCategories::find($question->sub_cat_id)->title}}</a>
                        {{time_ago($question->created_at)}}
                    </div>
                </div>
            </li>
            @endforeach
            {{$questions->render()}}
            <hr>
        </ul>
    </div>


</div>

</div>
@include('includes.footer')
</div>
</body>
</html>