<div id="textbox">
   <input class="box" type="text" id="text"/>
    <a href="#"><button  type="button" class="buttonDesign" id="buttonDesign">Ask Question</button> </a>
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