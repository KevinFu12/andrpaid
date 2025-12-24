<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CollaboratorController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->query('q');

        $collaborators = User::when($q, function ($query) use ($q) {
                $query->where('name', 'like', "%{$q}%")
                      ->orWhere('academic_title', 'like', "%{$q}%");
            })
            ->where('id', '!=', auth()->id())
            ->get();

        return view('collaborators.index', compact('collaborators'));
    }
}
