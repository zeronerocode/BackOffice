<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index (){
        $members = Member::oldest()->get();
        return view('member.index', compact('members'));
    }

    public function create (){
        return view('member.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => ['required', 'string'],
            'groupid' => ['required', 'string'],
            'nama' => ['required', 'string'],
            'alamat' => ['required', 'string'],
            'email' => ['required', 'email'],
            'hp' => ['required', 'string']
        ]);

        $member = Member::create([
            'id' => $request->id,
            'groupid' => $request->groupid,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'hp' => $request->hp
        ]);

        return redirect()->route('member.index')->with(['success' => 'Member Berhasil Disimpan!']);
    }

    public function edit(Member $member)
    {
        return view ('member.edit', compact('member'));
    }

    public function update(Request $request, Member $member)
    {
        $request->validate([
            'id' => ['required', 'string'],
            'groupid' => ['required', 'string'],
            'nama' => ['required', 'string'],
            'alamat' => ['required', 'string'],
            'email' => ['required', 'email'],
            'hp' => ['required', 'string']
        ]);

        $member = Member::findOrFail($member->id);

        $member -> update([
            'id' => $request->id,
            'groupid' => $request->groupid,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'hp' => $request->hp
        ]);

        if($member){
            //redirect dengan pesan sukses
            return redirect()->route('member.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('member.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id){

        $member = Member::findOrFail($id);
        $member -> delete();
        if($member){
            //redirect dengan pesan sukses
            return redirect()->route('member.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('member.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
