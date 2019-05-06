<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Question;
use App\UserResponse;
class ChallengesController extends Controller
{
    public function textTextIndex($id){
        $challenges = DB::table('questions')->where('QuestionType', "1")
            ->get();
            //echo($challenges);
            $userResponses = UserResponse::all();
            if ($id < 0){
                $id = 0;
            }
            return view('challenges.index', compact('challenges', 'id', 'userResponses'));
    }
    public function textImageIndex($id){
        $challenges = DB::table('questions')->where('QuestionType', "2")
            ->get();
            $userResponses = UserResponse::all();
            if ($id < 0){
                $id = 0;
            }
            return view('challenges.index', compact('challenges', 'id', 'userResponses'));
    }
    public function imageImageIndex($id){
        $challenges = DB::table('questions')->where('QuestionType', "3")
            ->get();
            $userResponses = UserResponse::all();
            if ($id < 0){
                $id = 0;
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
            ->get();
        $questionID = $challenges[request('challenge_id')]->id;        
        $right = $challenges[request('challenge_id')]->Answer;
        UserResponse::create([
            'UserID' => request('user_id'),
            'GivenAnswer' => request('option'),
            'RightAnswer' => $right,
            'QuestionID' => $questionID
        ]);
        $newChallenge = ((int) request('challenge_id') + 1);
        return redirect('/texttext/' . $newChallenge);
    }
    public function storeTextImage(){
        $this->validate(request(), [
            'option' => 'required',
            'user_id' => 'required',
            'challenge_id' => 'required'
        ]);
        $challenges = DB::table('questions')->where('QuestionType', "2")
            ->get();
        $questionID = $challenges[request('challenge_id')]->id;        
        $right = $challenges[request('challenge_id')]->Answer;
        UserResponse::create([
            'UserID' => request('user_id'),
            'GivenAnswer' => request('option'),
            'RightAnswer' => $right,
            'QuestionID' => $questionID
        ]);
        $newChallenge = ((int) request('challenge_id') + 1);
        return redirect('/textimage/' . $newChallenge);
    }
    public function storeImageImage(){
        $this->validate(request(), [
            'option' => 'required',
            'user_id' => 'required',
            'challenge_id' => 'required'
        ]);
        $challenges = DB::table('questions')->where('QuestionType', "3")
            ->get();
        $questionID = $challenges[request('challenge_id')]->id;        
        $right = $challenges[request('challenge_id')]->Answer;
        UserResponse::create([
            'UserID' => request('user_id'),
            'GivenAnswer' => request('option'),
            'RightAnswer' => $right,
            'QuestionID' => $questionID
        ]);
        $newChallenge = ((int) request('challenge_id') + 1);
        return redirect('/imageimage/' . $newChallenge);
    }
}