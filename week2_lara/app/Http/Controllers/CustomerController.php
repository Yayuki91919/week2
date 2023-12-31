<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       
        $title="Special Title Treatment";
        $message="This is message";
        return view('customer.index',['title'=>$title,"message"=>$message]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'address'=>'required'
        ],[
            'name.required'=>'Please fill name',
            'email.required'=>'You have to fill email',
            'address.required'=>"Please add your address"
        ]);
        //data retrieve
        //dd($request->all());
    //    echo $request->input('name');
    //    echo $request->input('email');
     // dd($request->except('_token'));
    //  dd($request->only(['name','email']));
    //   echo $request->path();
    //   echo $request->url();
    //   echo $request->method();
    //   echo $request->is('/customer/*');
    //   echo $request->routeIs('customer.*');

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
