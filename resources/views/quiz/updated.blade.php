@extends("layout")

@section("body")
    <form action="{{ route('quiz.list') }}" method="put">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Edit Quiz Title:</label>
            <input type="text" value="{{ $quiz->title ?? ''}}" name="title" class="form-control" id="exampleFormControlInput" placeholder="Quiz Title: ">
        </div>

        <br>
        
        <div class="mb-3">
            @foreach ($question as $question)
            <div>
                <label for="questionTitle" class="form-label">Edit Question:</label>
                <input type="text" value="{{ $question->title ?? '' }}" name="questionTitle" class="form-control" id="questionTitle" placeholder="Question: " style="margin-bottom: 10px;">
            </div>

            <label>Edit answers</label>
            <div>
                <input type="text" value="{{ $question->answer_1 ?? '' }}" name="firstAnswer" class="form-control" id="exampleFormControlInput1" placeholder="First Answer: " style="margin-bottom: 10px;">
                <input type="text" value="{{ $question->answer_2 ?? '' }}" name="secondAnswer" class="form-control" id="exampleFormControlInput2" placeholder="Second Answer: " style="margin-bottom: 10px;">
                <input type="text" value="{{ $question->answer_3 ?? '' }}" name="thirdAnswer" class="form-control" id="exampleFormControlInput3" placeholder="Third Answer: " style="margin-bottom: 10px;">
                <input type="text" value="{{ $question->answer_4 ?? '' }}" name="fourthAnswer" class="form-control" id="exampleFormControlInput4" placeholder="Fourth Answer: " style="margin-bottom: 10px;">
            </div>

            <br>
            <br>
            @endforeach
            
            
        </div>
        <button type="submit" class="btn btn-primary">Update Quiz</button>

    </form>
@endsection