<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Sanctum\PersonalAccessToken;

class TokenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tokens = auth()->user()->tokens;

        return view('tokens-index', compact('tokens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tokens-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required'
        ]);

        $token = auth()->user()->createToken(request('name'));

        return redirect()->route('tokens.index')->with('success', "Your new token is: {$token->plainTextToken}");
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
    public function destroy(PersonalAccessToken $token)
    {
        $token->delete();

        return redirect()->route('tokens.index')->with('success', "Token {$token->name} has been deleted");
    }
}
