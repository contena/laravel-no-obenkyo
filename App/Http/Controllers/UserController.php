<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * 新しいユーザーを保存
     *
     *
     */
    public function store(Request $request)
    {
        $name = $request->input('test');
        return view('unko', ['message' => $name]);
        // return $name;
        //
    }
}
