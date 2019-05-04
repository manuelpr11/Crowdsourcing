<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Option;
use App\QuestionOption;
use App\Question;
use App\UserResponse;

class ChallengesController extends Controller
{

    public function textTextIndex($id){
        $challenges = DB::table('questions')->where('QuestionType', "1")
            ->join('options', 'options.QuestionId', '=', 'questions.id')
            ->get();
            //echo($challenges);
            $userResponses = UserResponse::all();

            if ($id < 0){
                $id = 0;
            }
            if ($id % 2 == 1){
                $id = $id - 1;
            }
            return view('challenges.index', compact('challenges', 'id', 'userResponses'));
    }

    public function textImageIndex($id){
        $challenges = DB::table('questions')->where('QuestionType', "2")
            ->join('options', 'options.QuestionId', '=', 'questions.id')
            ->get();
            $userResponses = UserResponse::all();

            if ($id < 0){
                $id = 0;
            }
            if ($id % 2 == 1){
                $id = $id - 1;
            }

            return view('challenges.index', compact('challenges', 'id', 'userResponses'));
    }

    public function imageImageIndex($id){
        $challenges = DB::table('questions')->where('QuestionType', "3")
            ->join('options', 'options.QuestionId', '=', 'questions.id')
            ->get();
            $userResponses = UserResponse::all();

            if ($id < 0){
                $id = 0;
            }
            if ($id % 2 == 1){
                $id = $id - 1;
            }
            return view('challenges.index', compact('challenges', 'id', 'userResponses'));
    }

    public function storeTextText(){
        $this->validate(request(), [
            'option' => 'required',
            'user_id' => 'required',
            'challenge_id' => 'required'
        ]);

        $challenges = DB::table('questions')->where('QuestionType', "1")
            ->join('options', 'options.QuestionId', '=', 'questions.id')
            ->get();

            $right = null;
            $wrong = null;
            $questionID = $challenges[request('challenge_id')]->QuestionID;
        
        if ($challenges[request('challenge_id')]->Correct == 1){
            $right = $challenges[request('challenge_id')]->ImgLocation;
            $wrong =  $challenges[request('challenge_id') + 1]->ImgLocation;
        } else{
            $right = $challenges[request('challenge_id') + 1]->ImgLocation;
            $wrong =  $challenges[request('challenge_id')]->ImgLocation;
        }

        UserResponse::create([
            'UserID' => request('user_id'),
            'GivenAnswer' => request('option'),
            'RightAnswer' => $right,
            'WrongAnswer' => $wrong,
            'QuestionID' => $questionID
        ]);
        $newChallenge = ((int) request('challenge_id') + 2);

        return redirect('/texttext/' . $newChallenge);
    }

    public function storeTextImage(){
        $this->validate(request(), [
            'option' => 'required',
            'user_id' => 'required',
            'challenge_id' => 'required'
        ]);

        $challenges = DB::table('questions')->where('QuestionType', "2")
            ->join('options', 'options.QuestionId', '=', 'questions.id')
            ->get();

            $right = null;
            $wrong = null;
            $questionID = $challenges[request('challenge_id')]->QuestionID;
        
        if ($challenges[request('challenge_id')]->Correct == 1){
            $right = $challenges[request('challenge_id')]->ImgLocation;
            $wrong =  $challenges[request('challenge_id') + 1]->ImgLocation;
        } else{
            $right = $challenges[request('challenge_id') + 1]->ImgLocation;
            $wrong =  $challenges[request('challenge_id')]->ImgLocation;
        }

        UserResponse::create([
            'UserID' => request('user_id'),
            'GivenAnswer' => request('option'),
            'RightAnswer' => $right,
            'WrongAnswer' => $wrong,
            'QuestionID' => $questionID
        ]);
        $newChallenge = ((int) request('challenge_id') + 2);

        return redirect('/textimage/' . $newChallenge);
    }

    public function storeImageImage(){
        $this->validate(request(), [
            'option' => 'required',
            'user_id' => 'required',
            'challenge_id' => 'required'
        ]);

        $challenges = DB::table('questions')->where('QuestionType', "3")
            ->join('options', 'options.QuestionId', '=', 'questions.id')
            ->get();

            $right = null;
            $wrong = null;
            $questionID = $challenges[request('challenge_id')]->QuestionID;
        
        if ($challenges[request('challenge_id')]->Correct == 1){
            $right = $challenges[request('challenge_id')]->ImgLocation;
            $wrong =  $challenges[request('challenge_id') + 1]->ImgLocation;
        } else{
            $right = $challenges[request('challenge_id') + 1]->ImgLocation;
            $wrong =  $challenges[request('challenge_id')]->ImgLocation;
        }

        UserResponse::create([
            'UserID' => request('user_id'),
            'GivenAnswer' => request('option'),
            'RightAnswer' => $right,
            'WrongAnswer' => $wrong,
            'QuestionID' => $questionID
        ]);
        $newChallenge = ((int) request('challenge_id') + 2);

        return redirect('/imageimage/' . $newChallenge);
    }

    public function create(){
        return view('challenges.create');
    }

    public function store(){
        return view('challenges.store');
    }
   public function texttext(){
    return view('texttextchallenge');
   }

   public function textimage(){
    return view('textimagechallenge');
   }

   public function imageimage(){
    return view('imageimagechallenge');
   }
}
