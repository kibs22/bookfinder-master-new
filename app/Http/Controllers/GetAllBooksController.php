<?php

namespace App\Http\Controllers;

use App\PostedBook;
use Illuminate\Http\Request;

class GetAllBooksController extends Controller
{
    public function __invoke()
    {

    	return response()->json(['posts' => PostedBook::with(['postedCategory','getCategory','postedBy'])->get()]);
    }
}
