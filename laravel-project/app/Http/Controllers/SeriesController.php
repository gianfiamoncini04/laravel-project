<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function listarSeries(Request $request)
    {
        $series = [
            'Punisher',
            'Lost',
            'Peaky Blinders'
        ];

        $html = '<ul>';
        foreach ($series as $serie) {
            $html .= "<li>$serie<li>";
        }
        $html .= '</ul>';

        echo $html;
    }
}
