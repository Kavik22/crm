<?php

namespace App\Http\Controllers\State;

use App\Http\Controllers\Controller;
use App\Models\State;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(State $state)
    {
        return view('state.show', compact('state'));
    }
}
