<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($newsid){
        $name = 'Anik Sen';
        $email = 'aniksen.cuet09@gmail.com';
        $departments = [['name'=>'CSE','code'=>01],
                        ['name'=>'EEE','code'=>02],
                        ['name'=>'Math','code'=>03]];
        return view('news',['my_news'=>$newsid, 
                    'name'=>$name,'email'=>$email, 'departments'=>$departments]);
    }
}
