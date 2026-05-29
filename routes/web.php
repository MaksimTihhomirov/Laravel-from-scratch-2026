<?php

use App\Models\Idea;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/ideas');
});

Route::get('/ideas', function () {
    $ideas = Idea::latest()->get();

    return view('ideas', [
        'ideas' => $ideas,
    ]);
});

Route::post('/ideas', function () {
    Idea::create([
        'description' => request('description'),
        'state' => 'pending',
    ]);

    return redirect('/ideas');
});

Route::get('/ideas/{idea}', function (Idea $idea) {
    return view('show', [
        'idea' => $idea,
    ]);
});

Route::get('/ideas/{idea}/edit', function (Idea $idea) {
    return view('edit', [
        'idea' => $idea,
    ]);
});

Route::patch('/ideas/{idea}', function (Idea $idea) {
    $idea->update([
        'description' => request('description'),
    ]);

    return redirect('/ideas');
});

Route::delete('/ideas/{idea}', function (Idea $idea) {
    $idea->delete();

    return redirect('/ideas');
});