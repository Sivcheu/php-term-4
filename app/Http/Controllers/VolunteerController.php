<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventHasUser;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class VolunteerController extends Controller
{
    //

    public function joinForm(Request $request, $id)
    {
        $event = Event::where('id', $id)->first();
        return view('home.volunteer', compact('event'));
    }

    public function join(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'min:2', 'max:255'],
        ]);
        $isJoin = Volunteer::where("phone_number", $request->phone_number)->where("event_id", $request->event_id)->first();
        if (!$isJoin) {
            $vol = new Volunteer();
            $vol->name = $request->name;
            $vol->phone_number = $request->phone_number;
            $vol->event_id = $request->event_id;
            $vol->save();
            return redirect('/home')->with('volJoin', "You're successfully joined");
        } else {
            return redirect()->back()->with("VolJoinFail", "You're already joined");
        }
    }

    public function volunteer()
    {
        $volunteer = DB::table('volunteers')
            ->join('events', 'volunteers.event_id', 'events.id')
            ->select('volunteers.id','volunteers.name', 'volunteers.phone_number', 'events.title', 'events.start')
            ->orderBy('event_id')
            ->get();
        return view('volunteer.volunteer', compact('volunteer'));
    }

}
