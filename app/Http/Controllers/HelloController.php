<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\http\Response;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index(){

        return <<<EOF
<html>
<style>
body {font-size:16pt; color:#999;}
</style>
<body>
<h1>問題集</h1>
メニュー画面です<br>
<a href="/hello/index3/1/1/1" >第1章</a>
<a href="/hello/index3/2/1/1" >第2章</a>
<a href="/hello/index3/3/1/1" >第3章</a>
<a href="/hello/index3/4/1/1" >第4章</a>
</body>
</html>
EOF;
    }

    public function requ(Request $request, Response $response){
        return <<<EOF
        <html>
        <h1>requestの中身はこれだ</h1>
        {$request}
        <h1>responseの中身はこれだ</h1>
        {$response}
        </html>

        EOF;

    }

    public function index3(Request $request){
        $data=[
            'msg'=>'bladeだよ',
            'chapter'=>$request->chapter,
            'section'=>$request->section,
            'number'=>$request->number,
            'myanswer'=>$request->myanswer
        ];
        $param=[
            'id'=> $request->id
        ];
        $items = DB::select('select * from question');
        return view('hello.index3',compact('data', 'items'));
    }

    public function index4(Request $request){
        $data2=[
            ['name'=>'aaa','mail'=>'aaa@aaa'],
            ['name'=>'bbb','mail'=>'bbb@bbb'],

        ];
        return view('hello.index4',['data2'=>$data2]);
    }

    public function post(Request $request){
        $data=[
            'msg'=>'bladeだよ',
            'chapter'=>$request->chapter,
            'section'=>$request->section,
            'number'=>$request->number,
            'myanswer'=>$request->myanswer
        ];
        $items = DB::select('select * from question');
        return view('hello.answer',compact('data','items'));
    }
}
