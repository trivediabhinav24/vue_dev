@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">All Qestions</div>

                <div class="card-body">
                   
                    @foreach($questions as $question)
                        <div class="media" style="margin-bottom: 10px;">
                            <div class="media-body">
                                <h3 class="mt-0"><a href="{{ route('questions.show', $question->id) }}">
                                    {{ $question->title}}</a> </h3>
                                    <p class="lead">
                                        Asked by
                                        <a href="{{ $question->user->url }}">{{ $question->user->name }}</a>
                                        <small class="text-muted">{{ $question->created_date }}</small>
                                    </p> 
                                    {{ $question->body}}
                            </div>
                        </div>
                    @endforeach
                    <div class="mx-auto">
                    {{ $questions->links()}}
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
