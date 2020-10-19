<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Contracts\View\View;

class DataController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        return view('web.data', [
            'data' => Data::all(),
        ]);
    }
}
