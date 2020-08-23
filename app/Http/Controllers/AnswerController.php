<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Testing\Assert;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($question)
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($question)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$question)
    {
        $question = Question::find($question);
        $question -> answers()->create([
            'description'=>$request->description,
            'user_id'=>Auth::user()->id


        ]);
        return redirect(route('question.show',$question->id))->with('message','Your answer has been submited Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show($question, $answer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question,Answer $answer)
    {
         $this->authorize('update',$answer);

        return view('answer/edit',compact('question','answer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$question,Answer  $answer)
    {
        $this->authorize('update',$answer);


        $answer->update([
            'description'=>$request->description
        ]);
        return redirect(route('question.show',$question))->with('message','Your answer has been Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy($question, Answer $answer)
    {


            $this->authorize('delete',$answer);
            $answer->delete();
          return redirect(route('question.show',$question))->with('message','Your answer has been deleted Successfully');
    }
}
