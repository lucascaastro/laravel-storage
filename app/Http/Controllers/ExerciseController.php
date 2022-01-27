<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    //

    public function photo(Request $request)
    {
        $request->file->storeAs('public/documents', 'file.pdf');

        return 'Deu certo';
    }
}