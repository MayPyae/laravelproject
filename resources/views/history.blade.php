@extends('layout/app')
@section('title')
    <h1>My History</h1>
@endsection
@section('content')
    <section class="site-section">
        <div class="container">
            <h3>Question</h3>
            <div class="row">
                @foreach ($questions as $question)



                    <div class="col-lg-4 mb-4">
                        <a href="{{route('question.show',$question->id)}}">
                        <div class="testimonial-2 d-block">
                        <blockquote class="mb-4">
                        <p>{{strip_tags(Str::limit($question->description,200))}}</p>
                        </blockquote>
                        <div class="d-flex v-card align-items-center">

                            <div class="author-name">
                            <span class="d-block">{{$question->answers()->count()}} Answers</span>

                            </div>
                        </div>
                        </div>
                        </a>
                    </div>


                @endforeach

        </div>
        <hr>
         <h3>Answers</h3>
            <div class="row">
                @foreach ($answers as $answer)



                    <div class="col-lg-4 mb-4">
                        <a href="{{route('question.show',$answer->question->id)}}">
                        <div class="testimonial-2 d-block">
                        <blockquote class="mb-4">
                        <p>{{strip_tags(Str::limit($answer->description,200))}}</p>
                        </blockquote>
                        <div class="d-flex v-card align-items-center">

                            <div class="author-name">
                            <span class="d-block">{{$answer->likes()->count()}} Likes</span>

                            </div>
                        </div>
                        </div>
                        </a>
                    </div>


                @endforeach

        </div>
    </section>
@endsection
