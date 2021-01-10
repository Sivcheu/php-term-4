<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Org;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonationController extends Controller
{
    //
    public function index()
    {
        $orgs = Org::all();
        return view('home.donation', compact('orgs'));
    }

    public function amount()
    {
        $amount = DB::table('donations')->sum('donations.amount');
        return $$amount;
    }

    public function donationForm(Request $request, $id)
    {
        if ($request->session()->has('user')) {
            $org = Org::where('id', $id)->first();
            return view('home.donationForm', compact('org'));
        } else {
            return redirect('/loginForm')->with('loginFirst',"You have to login first");
        }
    }

    public function donate(Request $request)
    {
        if ($request->session()->has('user')) {
            $donate = new Donation();
            $donate->amount = $request->amount;
            $donate->user_id = $request->session()->get('user')['id'];
            $donate->org_id = $request->org_id;
            $donate->save();
            return redirect('/home')->with('donate','Thank you for your donation!');
        } else {
            return redirect('/loginForm');
        }
    }

    public function donation()
    {
        $donors = DB::table('donations')
            ->join('users', 'donations.user_id', 'users.id')
            ->join('orgs', 'donations.org_id', 'orgs.id')
            ->select('donations.id', 'users.lastname', 'donations.amount', 'orgs.name')
            ->orderBy('org_id')
            ->get();
        $total = DB::table('donations')
            ->sum('donations.amount');
        return view('donation.index', compact('donors','total'));
    }

}
