<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helps;

class helpController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $email = str_replace('"', '', $request->get('email'));
        $msg = str_replace('"', '', $request->get('message'));
        $newHelp = new Helps;
        $newHelp->email = $email;
        $newHelp->help_content = $msg;
        if($newHelp->save()){
            // return data:{} json_encode("I'll come to you in my earliest, thanks."); 
            return response()->json(['response' => 'I will come to in my earliest', 'status' => 'success']);   
        }else{
            return response()->json(['response' => 'Sorry your message missed, please try again.', 'status' => 'warning']);
        }
    
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