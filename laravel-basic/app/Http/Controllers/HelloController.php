<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index() {
        $name = '侍 太郎';
        $languages = ['HTML', 'CSS', 'JavaScript', 'PHP'];
 
        // 変数$nameをindex.blade.phpファイルに渡す
        // 変数$name、$languagesをindex.blade.phpファイルに渡す
        return view('index', compact('name', 'languages'));  
    }
}
