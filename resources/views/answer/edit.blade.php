@extends('layout/app')
@section('title')
    <h4>Edit Your Answer</h4>
@endsection
@section('content')
<div class="site-section">
    <div class="container">
          <div class="tutorial-item">
                <h4>Update your answer!</h4>
              <form action="{{route('answer.update',[$question->id,$answer->id])}}" method="POST">
                @csrf
                @method('PATCH')
                  <div class="form-group">
                  <textarea name="description" class="form-control" rows="6" placeholder="Type your Answer here!">{{$answer->description}}</textarea>
                  </div>
                  <div class="d-flex">
                    <input type="submit" class="btn btn-primary ml-auto" value="Edit">
                  </div>
                </form>
    </div>
    </div>
    
</div>
   
@endsection