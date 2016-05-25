<?php

namespace App\Http\Controllers;
use App\Http\Controllers\SimpleXMLElement;
use App\Answers;
use App\Categories;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Input;
use Validator;
use Illuminate\Support\Facades\Auth;
class QuestionController extends Controller
{

    public function create(){
        $categories = Categories::all();

        return view('question.create',compact('categories'));
    }

    public function store(){
        $user = Auth::user();
        $input = Input::all();
        $rules = [
            'title' => 'required',
            'description' => '',
            'sub_category' => ''
        ];
        $messages = [
            'title.required' => 'Question Title field is required',
            'sub_category.required' => 'SubCategory Field is required'
        ];
        $validator = Validator::make($input,$rules,$messages);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else{
            $question = new Question;
            $question->title = $input['title'];
            $question->description = $input['description'];
            $question->sub_cat_id = $input['sub_cat_id'];
            $question->user_id = $user->id;
            $question->save();

            return Redirect::to('question/'.$question->id);
        }
    }

    public function show($id){
        $question = Question::find($id);
        $categories = Categories::all();

        return view('question.show',compact('question','categories'));

    }
    public function post_answer(){
        $input = Input::all();
        $answer = new Answers;
        $answer->description = $input['answer'];
        $answer->user_id = $input['user_id'];
        $answer->question_id = $input['question_id'];
        $answer->save();

        return Redirect::back();
    }

    public function search(){
        $input = Input::all();
        $categories = Categories::all();
        $answers = Answers::all();

        $xml = new \SimpleXMLElement('<OrgQuestion/>');
        $question = $xml->addChild('question', $input['search']);
        foreach($answers as $answer){
            $xml->addChild('relevant',$answer['description']);
         //   $xml = "<relevant>".$answer['description']."</relevant>";
        }

        Header('Content-type: text/xml');
        print($xml->asXML());


        $file = fopen("http://localhost/fyp/prediction.txt","r");
        $array= array();
        while(! feof($file))
        {
            $data=fgets($file);
            $pieces=explode(" ",$data);
            //echo $pieces[2];
            if ($pieces[0])
            {
                $index=$pieces[2];
                //echo $index;
                $score=$pieces[4];
                $array[$index]=$score;
            }
        }
        arsort($array);
        $i=0;
        $result=array();
        foreach ($array as $key => $val) {
            $result[$i]=$key;

            if($i==4)
                break;
            $i++;
        }
        $ans = Answers::where('id', $result[0])
            ->orWhere('id', $result[1])
            ->orWhere('id', $result[2])
            ->orWhere('id', $result[3])
            ->orWhere('id', $result[4])
            ->paginate(5);

//        $questions = Question::where('title','LIKE','%'.$input['search'].'%')->paginate(5);




        return view('welcome',compact('ans','categories'));
    }
//    public function vote_answer(){
//        $data = Input::all();
//\\
//        INsert answerws table vote + 1
//        //question_id
//    }

}
