<?php

namespace App\Http\Controllers;

use App\Models\Org;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Session;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::orderby('id', 'DESC')->get();
        return view('events.index', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    //Method no own route
    public function store(Request $request)
    {
        $event = new Event();
        $event->title = $request->title;
        $event->description = $request->description;
        $event->start = $request->start;
        $event->end = $request->end;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('image', $filename);
            $event->image = $filename;
        } else {
            return $request;
            $event->image = '';
            echo "Error";
        }
        $event->save();
        return redirect('/event-index')->with('event', $event);

    }

    public function show($id)
    {
        $event = Event::where('id', $id)->first();
        return view('events.show', compact('event'));
    }

    public function edit($id)
    {
        $event = Event::find($id);
        return view('events.edit')->with('event', $event);
    }

    public function update(Request $request)
    {
        $event = Event::find($request->id);
        $event->title = $request->title;
        $event->description = $request->description;
        $event->start = $request->start;
        $event->end = $request->end;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('image', $filename);
            $event->image = $filename;
        } else {
            return $request;
            $add->image = '';
            echo "Error";
        }
        $event->save();

        return redirect('/event-index')->with('event', $event);
    }

    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect('event-index')->with('event', $event);
    }

    public function indexForUser()
    {
        $events = Event::all();
        return view('home.event', compact('events'));
    }

}
