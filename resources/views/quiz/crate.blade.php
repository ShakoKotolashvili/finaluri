@extends("layout")

@section("body")
<form action="{{ route('quiz.store') }}" method="post">
        @csrf
        @method('POST')
        <div>
            <label for="title" class="form-label">Quiz Title: </label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Quiz Title: ">
        </div>

        <br>

        <div>
            <label for="image" class="form-label">Quiz Image: </label>
            <input type="text" name="image" class="form-control" id="image" placeholder="Image source: ">
        </div>
        
        <div>
            <label for="description" class="form-label">Quiz Description:</label>
            <input type="text" name="description" class="form-control" id="description" placeholder="Description: ">
        </div>

        <div>
            <input type="hidden" name="author_id" value="{{ Auth::id() }}">
        </div>

        <button type="submit" class="btn btn-primary">Add Quiz</button>

    </form>
@endsection