<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    public function index(Request $request)
    {
        return 'get' .$request ;
    }

    public function store(Request $request)
    {
//        $userId = Auth::user();

        $newTest = new Test();
        $newTest->user_id = $userId;
        $newTest->product_id = $request->product_id;
        $newTest->facial_expresion = json_encode($request->facial_expresion);
        $newTest->save();

        return responder()->success($request)->respond();
    }

    public function destroy($id)
    {

    }
}
