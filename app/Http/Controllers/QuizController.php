<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;

class QuizController extends Controller
{
    public function wholeQuiz(){

        $quiz = Quiz::orderBy('created_at', 'description') -> get();

        return view('quiz.list', ['quiz' => $quiz]);

    }

    public function makeQuiz() {
        
        return view('quiz.create');

    }

    public function updateQuiz(Quiz $quiz, Request $request) {

        if ($request -> input('title')) {

            $quiz -> fill($request -> all()) -> save();

            return redirect() -> route('quiz.list');

        }
        
        return view('quiz.updated', ['quiz' => $quiz, 'question' => $quiz -> question]);
    }

    public function showQuiz($id) {
        
        $quizz = Quiz::find($id);

        return view('quiz.view', ['quizz' => $quiz, 'question' => $quiz -> question -> sortBy('position')]);
    
    }

    public function saveQuiz(Request $request) {

        Quiz::create([

            'title' => $request -> title,
            'image' => $request -> image,
            'description' => $request -> description,
            'author_ID' => auth() -> id(),

        ]);

        return redirect() -> route('quiz.list');
    }

    public function delete(Quiz $quiz){

        $quiz -> delete();
        return redirect() -> route('quiz.list');

    }
    
}
