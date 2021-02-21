<?php

namespace App\Http\Controllers\Concepts;

use App\Http\Controllers\Controller;
use App\Models\ChatBaseModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatBase extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        // $request->validate([
        //     'chat_id'=>'required',
        //     'username'=> 'required',
        //     'massage' => 'required'
        // ]);

        // $chat_massage = new ChatBaseModel([
        //     'first_name' => $request->get('chat_id'),
        //     'last_name'=> $request->get('username'),
        //     'address'=> $request->get('massage')
        // ]);

        // $chat_massage = new ChatBaseModel([
        //     'chat_id' => 'test',
        //     'username'=> 'test',
        //     'address'=> 'test'
        // ]);

        // $chat_massage->save();
        // return redirect('/student')->with('success', 'Student has been added');

        // dd(DB::connection('mongodb')->collection('chat_concept')
        // ->push('chatroom0014120', [
        //     'timestamp' => '023050',
        //     'message' => 'Hi Wie gehts',
        //     true
        // ]));


    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChatBaseModel  $chatBaseModel
     * @return \Illuminate\Http\Response
     */
    public function show(ChatBaseModel $chatBaseModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChatBaseModel  $chatBaseModel
     * @return \Illuminate\Http\Response
     */
    public function edit(ChatBaseModel $chatBaseModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ChatBaseModel  $chatBaseModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChatBaseModel $chatBaseModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChatBaseModel  $chatBaseModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChatBaseModel $chatBaseModel)
    {
        //
    }
}
