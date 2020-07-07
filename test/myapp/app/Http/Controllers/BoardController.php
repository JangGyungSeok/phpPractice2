<?php

namespace App\Http\Controllers;

use App\Board;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BoardController extends Controller
{
    public function board(){
        $data = \App\Board::all();

        Log::log('debug', 'message');

        return view('board.board',[
            "boardContents" => $data
        ]);
    }

    public function create(){
        return view("board.create");
    }

    public function insert(Request $request){

        \App\Board::create([
            "name" => $request->input('name')
        ]);

        return redirect('/board');
    }

    public function boardDetail(Board $id){
        return view('board.detail',[
            "detail" => $id
        ]);
    }
}
