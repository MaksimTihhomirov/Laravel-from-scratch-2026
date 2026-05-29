<?php

use App\Models\Idea;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $ideas = Idea::query()
        ->when(request('state'), function ($query) {
            $query->where('state', request('state'));
        })
        ->latest()
        ->get();

    return view('ideas', [
        'ideas' => $ideas,
    ]);
});

Route::post('/ideas', function () {
    Idea::create([
        'description' => request('idea'),
        'state' => 'pending',
    ]);

    return redirect('/');
});

Route::get('/delete-ideas', function () {
    Idea::truncate();

    return redirect('/');
});
