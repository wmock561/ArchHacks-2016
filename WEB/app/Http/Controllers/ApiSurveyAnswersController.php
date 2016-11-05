<?php

namespace App\Http\Controllers;

use App\Survey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ApiSurveyAnswersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return $request->user->surveys->all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //$answers = new Survey($request->all());
       //$request->user->surveys()->save($answers);
       $surveyData = $request->input('surveyData');
       $survey = new Survey();
       $request->user->surveys()->save($survey);
       for($i = 0; $i<count($surveyData); $i++){
            $question = $surveyData[$i];
            $array = array();
            for($j = 0; $j<count($question); $j++){
                $className = "App\Question" . $i . "Answers";
                $survey->{"question" . $i . "_answers"}()->save(new $className(['answer' => $question[$j]]));
            }
       }
       //Log::info($request->all());
       return response('',200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
