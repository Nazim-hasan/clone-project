<?php

namespace App\Http\Controllers;

use App\Models\Bug;
use App\Http\Requests\StoreBugRequest;
use App\Http\Requests\UpdateBugRequest;
use Illuminate\Http\Request;
use App\Models\Comment;

class BugController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreBugRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBugRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bug  $bug
     * @return \Illuminate\Http\Response
     */
    public function show(Bug $bug)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bug  $bug
     * @return \Illuminate\Http\Response
     */
    public function edit(Bug $bug)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBugRequest  $request
     * @param  \App\Models\Bug  $bug
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBugRequest $request, Bug $bug)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bug  $bug
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bug $bug)
    {
        //
    }
    public function bugSolution(){
        $bugs = Bug::all();
        // $comment = Comment::where('commentsId',$commentID)->first();


        return view('Dashboard.Developers.bugSolution')->with('bugs',$bugs);
    }
    public function bugSolutionComment(Request $request){
        $nameFromSession = Session()->get('user');
        $comment = new Comment();
        $comment->userName = $nameFromSession;
        $comment->comment = $request->comment;
        $comment->bugId  = $request->bugId;
        $comment->save();



        $Bug = Bug::find(1);
        $Bug->comment =  $request->comment;
        $Bug->save();
        $bugs = Bug::all();
        return view('Dashboard.Developers.bugSolution')->with('bugs',$bugs);
    }

}
