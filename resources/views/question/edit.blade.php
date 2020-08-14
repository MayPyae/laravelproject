@extends('layout/app')
@section('title')
     <h1>
         Ask your Questions
     </h1>
@endsection
@section('content')
    <div class="row justify-content-center">
          <div class="col-lg-8 mb-5" >
              <h4>Edit  your mind!</h4>
          <form action="{{route('question.update',$question->id)}}" method="post">

            @csrf
            @method('PATCH')
              <div class="form-group row">
                <div class="col-md-12">
                <input type="text" class="form-control"value="{{$question->title}}" name="title"placeholder="Enter your Title Here " required>
                </div>
              </div>
                <div class="form-group row">
                <div class="col-md-12">
                    <label>Category</label><br>

                        @foreach ($categories as $category)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input"{{$question->categories->contains($category) ? 'checked':''}} name="category[]"type="checkbox" id="category-{{$category->id}}" value="{{$category->id}}">
                                <label class="form-check-label" for="category-{{$category->id}}">{{$category->name}}</label>
                            </div>
                        @endforeach
                    </select>
                </div>
             </div>

              <div class="form-group row">
                <div class="col-md-12">
                <textarea name="description" id="" class="form-control" placeholder="Explain your question here" cols="30" rows="10" required>{{$question->description}}</textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-4 ml-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-2 px-5" value="Edit Question" required>
                </div>
              </div>
            </form>
          </div>

        </div>
@endsection
