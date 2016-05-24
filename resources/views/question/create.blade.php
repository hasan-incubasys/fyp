<!doctype html>
<html>
@include('includes.head')
<body>
@include('includes.header')
<div id="main">
@include('includes.sidebar')
    <div id="ya-center-rail" style="margin-left:200px;margin-right:191px;margin-top:-460px;">
<div class="post_container">
	<div class="row">
    <div class="col-md-12">
		<div class="form_main">
                <h4 class="heading">Post <strong>Question </strong> <span></span></h4>
                <div class="form">
                <form action="{{ action('QuestionController@store') }}" method="post" id="contactFrm" name="contactFrm">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <select class="cat_dropdown">
                    <option>--Select--</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                    </select>
                    <select class="sub_cat_dropdown" name="sub_cat_id">
                    </select>
                    <input type="text" required="" placeholder="Question" value="" name="title" class="txt_3" />
                	<textarea placeholder="Details (optional)" name="description" type="text" class="txt_3"></textarea>
                    <input type="submit" value="submit" name="submit" class="txt2">
                </form>
            </div>
            </div>
            </div>
	</div>
</div>
</div>
</div>
@include('includes.footer')
</body>
</html>