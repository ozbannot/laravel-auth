<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Test;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    //
    public function index()
    {
        //$values = Test::all();

        $cosme = DB::table('cosme')->get();
        //dd($cosme);
        //Log::setDefaultDriver('sql');
        Log::info('ログ出力'.$cosme);
        Log::channel('sql')->info($cosme);
        //Log::channel('sql')->debug($cosme);
        return view('tests.test', compact('cosme'));
    }
}
