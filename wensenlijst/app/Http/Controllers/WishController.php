<?php

namespace App\Http\Controllers;

use App\Models\Wish;
use Illuminate\Http\Request;

class WishController extends Controller
{
    public function index()
    {
        $wishes = auth()->user()->wishes;
        return view('wishes.index', compact('wishes'));
    }
    
    public function allWishes()
{
    $wishes = Wish::all();
    return view('dashboard', compact('wishes'));
}


    public function create()
    {
        return view('wishes.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric',
    ]);

    auth()->user()->wishes()->create($request->all());

    return redirect()->route('wishes.index')->with('success', 'Wish created successfully.');
}


    public function show(Wish $wish)
    {
        return view('wishes.show', compact('wish'));
    }

    public function edit(Wish $wish)
    {
        return view('wishes.edit', compact('wish'));
    }

    public function update(Request $request, Wish $wish)
    {
        if ($wish->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }
    
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);
    
        $wish->update($request->all());
    
        return redirect()->route('wishes.index')->with('success', 'Wish updated successfully.');
    }
    
    public function destroy(Wish $wish)
    {
        if ($wish->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }
    
        $wish->delete();
    
        return redirect()->route('wishes.index')->with('success', 'Wish deleted successfully.');
    }
    
}
