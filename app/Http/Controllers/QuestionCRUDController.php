<?php
/**
 * Created by PhpStorm.
 * User: DEV
 * Date: 5/10/2559
 * Time: 14:34
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Question;

class QuestionCRUDController extends Controller
{
    /**
     * Display
     */

    public function index(Request $request)
    {
        return view('main.main', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        return view('dasboard.create_tours');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $this->validate($request, [
            'radio_1_1' => 'required',
            'radio_1_2' => 'required',
            'radio_1_3' => 'required',
            'radio_1_4' => 'required',
            'radio_1_5' => 'required',
            'radio_1_6' => 'required',
            'radio_1_7' => 'required',
            'radio_1_8' => 'required',
            'radio_1_9' => 'required',
            'radio_1_10' => 'required',
            'radio_1_11' => 'required',
            'radio_1_12' => 'required',
            'radio_1_13' => 'required',
            'radio_1_14' => 'required',
            'radio_1_15' => 'required',
            'radio_1_16' => 'required',
            'radio_1_17' => 'required',
            'radio_1_18' => 'required',
            'radio_1_19' => 'required',
            'radio_1_20' => 'required',
            'radio_1_21' => 'required',
            'radio_1_22' => 'required',
            'radio_1_23' => 'required',
            'radio_1_24' => 'required',
            'radio_1_25' => 'required',
            'radio_2_1' => 'required',
            'radio_2_2' => 'required',
            'radio_2_3' => 'required',
            'radio_2_4' => 'required',
            'radio_2_5' => 'required',
            'radio_2_6' => 'required',
            'radio_2_7' => 'required',
            'radio_2_8' => 'required',
            'radio_2_9' => 'required',
            'radio_2_10' => 'required',
            'radio_2_11' => 'required',
            'radio_2_12' => 'required',
            'radio_2_13' => 'required',
            'radio_2_14' => 'required',
            'radio_2_15' => 'required',
            'radio_2_16' => 'required',
            'radio_2_17' => 'required',
            'radio_2_18' => 'required',
            'radio_2_19' => 'required',
            'radio_2_20' => 'required',
            'radio_2_21' => 'required',
            'radio_2_22' => 'required',
            'radio_2_23' => 'required',
            'radio_2_24' => 'required',
            'radio_2_25' => 'required',
            'radio_2_26' => 'required',
            'radio_2_27' => 'required',
            'radio_2_28' => 'required',
            'radio_2_29' => 'required',
            'radio_2_30' => 'required',
            'radio_2_31' => 'required',
            'radio_2_32' => 'required',
            'radio_2_33' => 'required',
            'radio_2_34' => 'required',
            'radio_2_35' => 'required',
            'radio_2_36' => 'required',
            'radio_2_37' => 'required',
            'radio_2_38' => 'required',
            'radio_2_39' => 'required',
            'radio_2_40' => 'required',
            'comment_1' => 'required',
            'comment_2' => 'required',
            'comment_3' => 'required',
            'comment_4' => 'required',

        ]);
        Question::create($request->all());
        return redirect()->route('questionCRUD.index')
            ->with('success', 'Question created successfully');
    }

    /**
     * Display the specified resource.
     */

    public function show($id)
    {
        $question = Product::find($id);
        return view('dasboard.show', compact('question'));
    }

    /**
     * Show
     */

    public function edit($id)
    {
        $question = Question::find($id);
        return view('dasboard.update_tours', compact('question'));
    }

    /**
     * Update
     */

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'radio_1_1' => 'required',
            'radio_1_2' => 'required',
        ]);
        Question::find($id)->update($request->all());
        return redirect()->route('questionCRUD.index')
            ->with('success', 'Product updated successfully');
    }

    /**
     * Remove
     */

    public function destroy($id)
    {
        Question::find($id)->delete();
        return redirect()->route('productCRUD.index')
            ->with('success', 'Product deleted successfully');
    }
}