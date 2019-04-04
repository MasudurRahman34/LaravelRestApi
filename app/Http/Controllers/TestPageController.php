<?php

namespace App\Http\Controllers;

use App\testPage;
use Illuminate\Http\Request;
class TestPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('index');
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
         $testPage= new testPage;
        
        $testName= $request->name;
        $testIncome= $request->income;
       print_r(array_intersect_key($testIncome,$testName)); 
       /* foreach( $testName as $name){
            foreach($name as $nameKey=>$NameValue){
                
                $testPage= new testPage;
                $testPage->name=$NameValue;
                $testPage->guardianType=$nameKey;
                $testPage->income=1;

            }
            $testPage->save();
        }*/
    
     //Session()->flash('success', 'A new catagory has added succesfully');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\testPage  $testPage
     * @return \Illuminate\Http\Response
     */
    public function show(testPage $testPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\testPage  $testPage
     * @return \Illuminate\Http\Response
     */
    public function edit(testPage $testPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\testPage  $testPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, testPage $testPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\testPage  $testPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(testPage $testPage)
    {
        //
    }
}
