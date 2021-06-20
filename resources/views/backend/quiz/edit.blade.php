@extends('backend.layouts.master')
    @section('title', 'update-quiz')
    @section('content')


<form action="{{ route('quiz.update',[$quiz->id]) }}" method="post">
    @csrf
    {{method_field('PUT')}}
    <div class="span9">
        <div class="content">

            @if (Session::has('message'))
                <div class="alert alert-success">{{Session::get('message')}}</div>
            @endif



            <div class="module">
                <div class="module-head">
                    <h3>Create Quiz</h3>
                </div>

                {{-- Module body --}}
                <div class="module-body">
                    <div class="control-group">
                        <label for="quiz-name" class="control-label">Quiz name</label>


                        {{-- Name of the Quiz --}}
                        <div class="controls">
                            <input type="text" class="span8" name="name" placeholder="name of the quiz" value="{{ $quiz->name }}">
                            {{-- Error Messages --}} <br>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                             @enderror
                            {{-- Error Messages --}}
                        </div>
                        {{-- Name of the Quiz --}}


                        {{-- Quiz Description --}}
                        <div class="controls">
                            <label for="quiz-description" class="control-label">Quiz description</label>
                            <textarea name="description"  class="span8" placeholder="Quiz description">{{$quiz->description}}</textarea>
                            {{-- Error Messages --}} <br>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                             @enderror
                            {{-- Error Messages --}}
                        </div>
                        {{-- Quiz Description --}}



                        {{-- Duration --}}
                        {{-- <div class="controls">
                            <label for="quiz-duration" class="control-label">Quiz duration</label>
                            <input type="text" class="span8" name="minutes" placeholder="minutes" value="{{ $quiz->minutes }}"> --}}
                            {{-- Error Messages --}}
                            {{-- @error('minutes')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                             @enderror --}}
                            {{-- Error Messages --}}
                        {{-- </div> --}}
                        {{-- Duration --}}



                        {{-- Submit Button --}}
                        <div class="controls">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                        {{-- Submit Button --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


@endsection




