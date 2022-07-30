<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{
    public function index (){
        $groups = Group::oldest()->get();
        return view('group.index', compact('groups'));
    }

    public function create (){
        return view('group.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => ['required', 'string'],
            'namagroup' => ['required', 'string'],
            'kota' => ['required', 'string']
        ]);

        $group = Group::create([
            'id' => $request->id,
            'namagroup' => $request->namagroup,
            'kota' => $request->kota
        ]);

        return redirect()->route('group.index')->with(['success' => 'Group Berhasil Disimpan!']);
    }

    public function edit(Group $group)
    {
        return view ('group.edit', compact('group'));
    }

    public function update(Request $request, Group $group)
    {
        $request->validate([
            'id' => ['required', 'string'],
            'namagroup' => ['required', 'string'],
            'kota' => ['required', 'string']
        ]);

        $group = Group::findOrFail($group->id);
        $group -> update([
            'id' => $request->id,
            'namagroup' => $request->namagroup,
            'kota' => $request->kota
        ]);

        if($group){
            //redirect dengan pesan sukses
            return redirect()->route('group.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('group.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($groupid){

        $group = Group::where('id', $groupid)->get();
        if($group){
            $group ->each ->delete();
        }
        if($group){
            //redirect dengan pesan sukses
            return redirect()->route('group.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('group.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
