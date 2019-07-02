<?php
/**
 * Created by PhpStorm.
 * User: israe
 * Date: 01/07/2019
 * Time: 23:05
 */

namespace App\Http\Controllers;


class SeriesController
{
    public function index()
    {
        return [
            "Grey's anatomy",
            "Lost"
        ];

    }

}