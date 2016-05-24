<div id="textbox">
    <form method="post" action="{{action('QuestionController@search')}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <input class="box" type="text" id="text" name="search"/>
        <input type="submit" name="submit" class="buttonDesign" id="buttonDesign"/>
    </form>
   <a href="{{URL::to('question/create')}}"><button type="button" class="buttonDesign" id="post_question"> Post new Question </button> </a>
</div>
<div id='ya-left-rail' class='leftrail'>
    <div style="margin-top:40px; margin-left:10px">
        <ul>
            @foreach($categories as $category)
            <li class="category">
                <a href="{{URL::to('category/'.$category->id)}}" title="">{{$category->title}}</a>
            </li>
            @endforeach
        </ul>
    </div>
</div>