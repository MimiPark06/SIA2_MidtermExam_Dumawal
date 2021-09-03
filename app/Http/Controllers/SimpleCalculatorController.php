<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleCalculatorController extends Controller
{
    public function calculator(Request $request){
        $value1 = $request->input('value1');
        $value2 = $request->input('value2');
        $value3 = $request->input('value3');
        $formula = $request->input('formula');
        $answer = 0;
    
        if($formula == 'Perimeter'){
            $answer = 2 * ($value1 + $value2);
        }else if($formula == 'Volume'){
            $answer = $value1 * $value2 * $value3;
        }else if($formula == 'Area'){
            $answer = $value1 * $value1;
        }else{
            $answer =0;
        }

            
        // echo $result;
        return redirect ('/')->with('message', 'The answer is:'.$answer);
}
}
