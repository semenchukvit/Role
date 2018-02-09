<?php

namespace App\Http\Controllers\Conf;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfigurationController extends Controller
{
    //
    public function show()
    {
        return view('conf.configuration');
    }
}
