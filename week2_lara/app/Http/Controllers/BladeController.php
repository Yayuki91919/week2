<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $message="Blade Template";
        $type=2;
        $role="admin";
        $active=1;
        $employees=[
            ["david","PM","Sg"],
            ["Bruce","Senior dev","Sg"],
            ["Miya","PM","Sg"],
            ["Nana","PM","Sg"],
            ["layla","PM","Sg"],
            ["laya","PM","Sg"]
        ];
        $categories=[
            ["Safety and Security","/images/safety.png"],
            ["Safety and Security","/images/safety.png"],
            ["Safety and Security","/images/safety.png"],
            ["Safety and Security","/images/safety.png"],
            ["Safety and Security","/images/safety.png"],
            ["Safety and Security","/images/safety.png"],
            ["Safety and Security","/images/safety.png"],
            ["Safety and Security","/images/safety.png"]
        ];
    
        return view('BladeTemp',["categories"=>$categories,"employees"=>$employees,"role"=>$role,"status"=>$active,"message"=>$message,"type"=>$type]);
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
        //
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
