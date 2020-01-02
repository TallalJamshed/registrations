<?php

namespace App\Http\Controllers;

use App\NewsEvent;
use Illuminate\Http\Request;

class NewsEventController extends Controller
{

    public function showNewsPage()
    {
        return view('news-events.news');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(NewsEvent $newsEvent)
    {
        //
    }

    public function edit(NewsEvent $newsEvent)
    {
        //
    }

    public function update(Request $request, NewsEvent $newsEvent)
    {
        //
    }

    public function destroy(NewsEvent $newsEvent)
    {
        //
    }
}
