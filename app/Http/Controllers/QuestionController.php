<?php
/**
 * Created by PhpStorm.
 * User: DEV
 * Date: 5/10/2559
 * Time: 14:34
 */

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Question;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{

    public function index(Request $request)
    {
        $questions = Question::with(['children'])->whereNull('parent_id')->get();

        return view('main.main')->with('questions', $questions);
    }

    public function create()
    {
        return view('dasboard.create_tours');
    }

    public function store(Request $request)
    {
        $questions = $request->get('question');

        $answer = new Answer();
        $answer->user()->associate(auth()->user());
        $answer->save();
        $answer->questions()->sync($questions);

        return view('main.questionnaire.success');
//        dd($answer);
    }

    public function show(Request $request)
    {
        return view('dasboard.dasboard');

        //  $questions= Question::orderBy('id','DESC')->paginate(5);
        //  return view('dasboard.dasboard', compact('questions')) ->with('i', ($request->input('page', 1) - 1) * 5);
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    public function dasboard(Request $request)
    {

        $total = DB::table('answers');
        $total->join('answer_question', 'answers.id', '=', 'answer_question.answer_id');
        $total->join('questions', 'answer_question.question_id', '=', 'questions.id');
        $total->addSelect('answers.id');
        $total->addSelect(DB::raw('count(case when questions.parent_id = 1 then answer_question.value end) count'));
        $total->addSelect(DB::raw('avg(case when questions.parent_id = 1 then answer_question.value end) part1'));
        $total->addSelect(DB::raw('avg(case when questions.parent_id = 2 then answer_question.value end) part2'));
        $avgTotals = $total->get();


        return view('dasboard.dasboard')
            ->with('avgTotals', $avgTotals);

    }

    public function report(Request $request)
    {
        $query = DB::table('answers');
        $query->join('answer_question', 'answers.id', '=', 'answer_question.answer_id');
        $query->join('questions', 'answer_question.question_id', '=', 'questions.id');
        $query->addSelect('answers.id');
        $query->addSelect(DB::raw('avg(case when questions.parent_id = 1 then answer_question.value end) part1'));
        $query->addSelect(DB::raw('avg(case when questions.parent_id = 2 then answer_question.value end) part2'));
        $query->groupBy('answers.id');
        $avgQuestions = $query->get();

        $questions = Question::with(['children'])->whereNull('parent_id')->get();

        return view('dasboard.report_02')
            ->with('avgQuestions', $avgQuestions)
            ->with('questions', $questions);

    }


}



