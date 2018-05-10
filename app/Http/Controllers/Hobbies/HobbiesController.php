<?php

namespace App\Http\Controllers\Hobbies;

use App\Hobby;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class HobbiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hobbies = Hobby::all();
        
        return view('pages.hobbies',compact('hobbies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modal.hobbies');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());
        $hobby = new Hobby();
        $hobby->content = $request->content;
        $hobby->save();
        return $hobby;
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

    public function view($id){
        $hobby = Hobby::find($id);
        return view('modal.view',compact('hobby','id'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hobby = Hobby::find($id);

        return view('modal.edit',compact('hobby','id'));
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
        $hobby = Hobby::find($id);

        $hobby->content=$request->content;
        $hobby->save();
        return $hobby;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($id){
        $hobby = Hobby::find($id);
        return view('modal.delete', compact('hobby','id'));
    }
    public function destroy($id)
    {
        $hobby = Hobby::find($id)->delete();
        return "true";
    }
}
