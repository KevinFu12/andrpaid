<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class DashboardController extends Controller
{
    public function index()
    {
        $projects = Project::whereHas('members', function ($q) {
            $q->where('user_id', auth()->id());
        })->latest()->get();

        return view('dashboard', compact('projects'));
    }
}