@extends("layout")

@section("body")
    <h1>All Quizzes</h1>

    <a href="{{ route('quiz.create') }}" class="btn btn-primary" style="margin-bottom: 50px;">Create new Quiz</a>

    @foreach($quiz as $quiz)
    <div>
        <div>
            <h2>{{$quiz->title}}</h2>
            <img src="{{ $quiz->image }}" style="height: 200px; width: 200px;">
        </div>

        <div>
            <a class="btn btn-secondary" href="{{ route('quiz.display', $quiz->id) }}">Start Quiz</a>
            <a class="btn btn-danger" href="{{ route('quiz.delete', ['quiz' => $quiz->id]) }}">Delete</a>
            <p>Questions - {{ $quiz->question->count() }}</p>
        </div>
    </div>
    @endforeach
    
@endsection