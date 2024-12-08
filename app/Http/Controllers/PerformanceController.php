<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerformanceController extends Controller
{
    public function feboCount(Request $request) {
        $number = $request->input('febo');
        $febos = [0, 1];

        for ($i = 2; $i <= $number; $i++) {
            $febos[] = $febos[$i - 1] + $febos[$i - 2];
        }

        return view('show', ['febos' => $febos]);
    }
}
