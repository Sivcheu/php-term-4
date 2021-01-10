<?php

namespace App\Http\Controllers;

use App\Models\Org;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\DB;
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
        return redirect('/event-index');

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
            $event->image = '';
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

    public function viewVisitor($id)
    {
        $visitorDetail = DB::table('event_has_users')
            ->join('users', 'event_has_users.user_id', '=', 'users.id')
            ->join('events', 'event_has_users.event_id', '=', 'events.id')
            ->where('event_id', $id)
            ->select('users.lastname', 'users.email')
            ->get();
        $allVisitor = DB::table('event_has_users')->where('event_id', $id)->sum('count');
        $event = Event::where('id', $id)->first();
        return view('events.listallvisitor', compact('visitorDetail', 'allVisitor', 'event'));
    }

    public function volunteerInEvent($id)
    {
        $volunteerDetail = DB::table('volunteers')
            ->where('event_id', $id)
            ->select('volunteers.name','volunteers.phone_number')
            ->get();
        $allVolunteer =  DB::table('volunteers')
            ->where('event_id', $id)
            ->sum('count');
        $event = Event::where('id', $id)->first();
        return view('events.listvolunteer',compact('allVolunteer','event','volunteerDetail'));

    }
}
