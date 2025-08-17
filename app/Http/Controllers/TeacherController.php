<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function create()
    {
        return view('teachers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'wishlist_link' => 'required|url',
            'paypal_username' => 'required|string|max:255'
        ]);

        $teacher = Teacher::create($validated);

        return view('teachers.success', compact('teacher'));
    }

    public function show($slug)
    {
        $teacher = Teacher::where('unique_slug', $slug)->firstOrFail();
        return view('teachers.landing', compact('teacher'));
    }
}