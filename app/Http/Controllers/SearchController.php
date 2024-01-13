<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(SearchRequest $request): \Illuminate\Database\Eloquent\Collection
    {
        return User::search($request->get('query'))->get();
    }
}
