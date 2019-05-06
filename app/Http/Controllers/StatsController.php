<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Question;
use App\UserResponse;

class StatsController extends Controller
{
    public function index(){
        $userResponses = UserResponse::all();
        $questions = Question::all();

        $totalAnswers = count($userResponses);
        $truePos = DB::table('user_responses')->where('RightAnswer', "Yes")
        ->where('GivenAnswer', 'Yes')
        ->get();

        $falsePos = DB::table('user_responses')->where('RightAnswer', 'No')
        ->where('GivenAnswer', 'Yes')
        ->get();

        $trueNeg = DB::table('user_responses')->where('RightAnswer', 'No')
        ->where('GivenAnswer', 'No')
        ->get();

        $falseNeg = DB::table('user_responses')->where('RightAnswer', 'Yes')
        ->where('GivenAnswer', 'No')
        ->get();

        $conP = DB::table('user_responses')->where('RightAnswer', 'Yes')
        ->get();

        $conN = DB::table('user_responses')->where('RightAnswer', 'No')
        ->get();

        $sensitivity = count($truePos)/count($conP);
        $specifity = count($trueNeg)/count($conN);
        $ppv = count($truePos)/(count($truePos)+count($falsePos));
        $npv = count($trueNeg)/(count($trueNeg)+count($falseNeg));
        $fnr = count($falseNeg)/count($conP);
        $fpr = count($falsePos)/count($conN);
        $fdr = 1-$ppv;
        $for = 1-$npv;



        //dd(count($truePos), count($falsePos), count($trueNeg), count($falseNeg), count($userResponses));

        return view('stats.index', compact('userResponses', 'truePos', 'trueNeg', 'falsePos', 'falseNeg',
        'sensitivity', 'specifity', 'ppv', 'npv', 'fnr', 'fpr', 'fdr', 'for'));

    }
}
