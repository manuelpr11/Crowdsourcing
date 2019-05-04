<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Option;
use App\QuestionOption;
use App\Question;

class OptionsController extends Controller
{
    public function index(){
        $options = Option::all();
        return view('options.index', compact('options'));

    }
    public function create(){
        $questions = Question::all();
        return view('options.create', compact('questions'));
    }

    public function edit(Option $option){
        $options = Option::all();
        $questions = Question::all();
        return view('options.edit', compact('option', 'questions'));
    }

    public function update(Option $option){
        $this->validate(request(), [
            'ImgLocation' => 'required',
            'Correct' => 'required'
        ]);

        $option->Correct = request('Correct');
        $option->ImgLocation = request('ImgLocation');
        $option->save();

        return redirect('/options');


    }

    public function store(){
        $this->validate(request(), [
            'Correct1' => 'required',
            'Correct2' => 'required',
            'ImgLocation1' => 'required',
            'ImgLocation2' => 'required', 
            'QuestionID' => 'required'
        ]);
        Option::create([
            'Correct' => request('Correct1'),
            'ImgLocation' => request('ImgLocation1'),
            'QuestionID' => request('QuestionID')
        ]);

        Option::create([
            'Correct' => request('Correct2'),
            'ImgLocation' => request('ImgLocation2'),
            'QuestionID' => request('QuestionID'),
        ]);

        return redirect('/options');
    }

    public function delete(Option $option){
        $option->delete();
        return redirect('/options');
    }
}
