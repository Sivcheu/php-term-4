<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventHasUser;
use App\Models\Org;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class EventHasUserController extends Controller
{
    //

    public function join(Request $request)
    {
        if (Session::has('user')){
            $isJoin = EventHasUser::where("user_id",session('user')->id)->where("event_id",$request->event_id)->first();
            if (!$isJoin) {
                $eventUser = new EventHasUser();
                $eventUser->user_id = $request->session()->get('user')['id'];
                $eventUser->event_id = $request->event_id;
                $eventUser->save();
                return redirect()->to('/home' . '#event')->with('join', "You're successfully joined");
            } else {
                return redirect()->to('/home' . '#event')->with("fail","You're already joined");
            }
        }else{
            return redirect('/loginForm')->with('loginFirst',"You have to login first");
        }

    }
    public function userJoinEvent(){
        $userEvent = DB::table('event_has_users')
            ->join('users','event_has_users.user_id','users.id')
            ->join('events','event_has_users.event_id','events.id')
            ->select('event_has_users.id','users.lastname','events.title')
            ->orderBy('event_id')
            ->get();
        return view('events.userJoinEvent',compact('userEvent'));
    }
}
