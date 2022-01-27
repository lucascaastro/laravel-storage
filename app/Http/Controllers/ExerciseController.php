<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    //

    public function photo(Request $request)
    {
        $request->image1->storeAs('public/images', 'file1.jpg');
        $request->image2->storeAs('public/images', 'file2.jpg');

        return 'Deu certo';
    }
}