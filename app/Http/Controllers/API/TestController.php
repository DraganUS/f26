<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function index(Request $request)
    {
        return 'get';
    }

    public function store(Request $request)
    {
//        return $request;
//        $userId = Auth::user()->id;
//        return $userId;
        $userId = 1;
	    return $userId;
        $newTest = new Test();
        $newTest->user_id = $userId;
        $newTest->product_id = $request->product_id;
        $newTest->facial_expresion = $request->facial_expresion;
        $newTest->save();

//        return responder()->success($request)->respond();


    }

    public function destroy($id)
    {

    }
}
