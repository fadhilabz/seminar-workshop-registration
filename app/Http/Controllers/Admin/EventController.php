<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::with('category')->orderBy('date', 'desc')->paginate(10);
        return view('admin.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.events.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string',
            'date' => 'required',
            'location' => 'nullable|string|max:255',
            'quota' => 'nullable|integer|min:1',
            'price' => 'nullable|numeric|min:0',
            'category_id' => 'nullable|exists:categories,id',
            'status' => 'required|string',
            'image' => 'nullable|string|max:500',
        ]);

        $validated['slug'] = Str::slug($validated['title']) . '-' . time();
        $validated['quota'] = $validated['quota'] ?? 100;

        Event::create($validated);

        return redirect()->route('admin.events.index')->with('success', 'Acara baru telah berhasil dipublikasikan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        $categories = Category::all();
        return view('admin.events.edit', compact('event', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string',
            'date' => 'required',
            'location' => 'nullable|string|max:255',
            'quota' => 'nullable|integer|min:1',
            'price' => 'nullable|numeric|min:0',
            'category_id' => 'nullable|exists:categories,id',
            'status' => 'required|string',
            'image' => 'nullable|string|max:500',
        ]);

        if ($event->title !== $validated['title']) {
            $validated['slug'] = Str::slug($validated['title']) . '-' . time();
        }

        $event->update($validated);

        return redirect()->route('admin.events.index')->with('success', 'Acara berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->route('admin.events.index')->with('success', 'Acara berhasil dihapus.');
    }
}
