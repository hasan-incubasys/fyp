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
            @foreach($ans as $answer)
            <li>
                <div class="Bfc">
                    <div>
                        {{$answer->discription}}
                    </div>
                 </div>
            </li>
            @endforeach
            {{$ans->render()}}
            <hr>
        </ul>
    </div>


</div>

</div>
@include('includes.footer')
</div>
</body>
</html>