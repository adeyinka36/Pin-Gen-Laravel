<?php

namespace PinGenerator;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PinGeneratorController extends Controller
{
    public function generate()
    {
        $start  = Storage::get('number.txt') &&  (int) Storage::get('number.txt') > 999 ? ((int) Storage::get('number.txt')) + 1 : 1000;
        $handler = new PinGeneratorHandler();

        $number = $handler->increament($start) ;
        while(!$number){
            if($start >= 9999){
                $start = 1000;
            }
            $number =  $handler->increament($start++);
        }

        Storage::disk('local')->put('number.txt', $number);
        return view('PinGenerator::home', compact('number'));
    }
}
