@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Answer</div>
                    <div class="card-body">
                        {{$answer->body}}
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-primary float-right" href="{{ route('answers.edit',['question_id'=> $question, 'answer_id'=> $answer->id])}}">
                            Edit
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection