<?php

namespace App\Http\Controllers\State;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\State;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, State $state)
    {
        $data = $request->validated();
        $state->update($data);

        return view('state.show', compact('state'));
    }
}
