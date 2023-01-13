@extends("layout")

@section("body")
  
<div class="d-flex flex-column">
    <h1>{{ $quiz->title }} 
        <a href="{{ route('quiz.update', ['quiz' => $quiz, 'question' => $quiz->questions]) }}" class="btn btn-primary">Edit Quiz</a>
    </h1>
    <p>{{ $quiz->description }}</p>
    <img src="{{ $quiz->image }}" >
</div>

<form action="{{route('quiz.score', ['quiz' => $quiz, 'totalQuestions' => $quiz->questions->count() ]) }}" method="post"> 
    @csrf

    @foreach ($questions as $question)
    <h2>{{ $question->title }}</h2>
    <span style="font-weight: bold;">Current question - {{ $question->position }}/{{ $quiz->questions->count() }}</span>
    
    <div>
        <label style="display: block;">
            <input type="radio" name="answers[{{ $question->title }}]" value="1" onchange="showResult(this, {{ $question->correctAnswer }});" answered='false'>
            {{ $question->answer_2 }}
        </label>

        <label style="display: block;">
            <input type="radio" name="answers[{{ $question->title }}]" value="2" onchange="showResult(this, {{ $question->correctAnswer }});" answered='false'>
            {{ $question->answer_3 }}
        </label>

        <label style="display: block;">
            <input type="radio" name="answers[{{ $question->title }}]" value="3" onchange="showResult(this, {{ $question->correctAnswer }});" answered='false'>
            {{ $question->answer_1 }}
        </label>

        <label style="display: block; margin-bottom: 30px;">
            <input type="radio" name="answers[{{ $question->title }}]" value="4" onchange="showResult(this, {{ $question->correctAnswer }});" answered='false'>
            {{ $question->answer_4 }}
        </label>
    </div>
    @endforeach
<form>

@endsection

