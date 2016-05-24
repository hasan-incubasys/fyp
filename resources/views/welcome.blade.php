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
                        <span>Best answer:</span> John Goodman only said that he respected and looked up to her as an
                        actress, which is why he felt awkward interrupting her conversation at the afterparty. That
                        doesn&#039;t mean she&#039;s an A-lister, she&#039;s just a talented comedienne from SNL that
                        also acts in some of Lorne Michaels productions. Goodman has hosted SNL tons of times, so it
                        probably comes from that connection.
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