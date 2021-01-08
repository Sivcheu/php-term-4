<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Org;
use Illuminate\Http\Request;

class OrgController extends Controller
{
    //
    public function index(){
        $orgs = Org::all();
        return view('org.index',compact('orgs'));
    }
    public function create(){
        return view('org.create');
    }
    public function store(Request $request)
    {
        $org = new Org();
        $org->name = $request->name;
        $org->des = $request->des;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('image',$filename);
            $org->image = $filename;
        }else{
            return $request;
            $org->image = '';
            echo "Error";
        }
        $org->save();
        return redirect('/org-index')->with('event',$org);
    }
    public function show($id)
    {
        $org = Org::where('id',$id)->first();
        return view('org.show',compact('org'));
    }
    public function edit($id)
    {
        $org = Org::find($id);
        return view('org.edit')->with('org',$org);
    }
    public function update(Request $request)
    {
        $org = Org::find($request->id);
        $org->name = $request->name;
        $org->des = $request->des;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('image',$filename);
            $org->image = $filename;
        }else{
            return $request;
            $org->image = '';
            echo "Error";
        }
        $org->save();
        return redirect('/org-index')->with('event',$org);
    }
    public function destroy($id){
        $org = Org::find($id);
        $org->delete();
        return redirect('org-index')->with('org',$org);
    }


}
