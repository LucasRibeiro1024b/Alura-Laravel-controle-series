<?php

namespace App\Http\Controllers;


class SeriesController extends Controller {
    public function index(Request $request) {
        $series = [
            'Invicible',
            'Samurai Champloo',
            'La Casa de Papel'
        ];

        $html = "<ul>";
        foreach ($series as $serie) {
            $html .= "<li>$serie</li>";
        }
        $html .= "</ul>";

        return $html;
    }
}
