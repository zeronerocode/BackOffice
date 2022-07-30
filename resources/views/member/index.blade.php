<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Group') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white px-5 overflow-hidden shadow-sm sm:rounded-lg">
                <a href="{{ route('member.create') }}" class="btn btn-success">Add Member</a>
                <div class="overflow-x-auto">
                    <table class="table w-full">
                      <!-- head -->
                      <thead>
                        <tr>
                          <th>ID Member</th>
                          <th>ID Group</th>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>Hp</th>
                          <th>Email</th>
                          <th>Profile</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- row 1 -->
                        @forelse ($members as $member)
                        <tr>
                            <th>{{$member->id}}</th>
                            <td>{{$member->groupid}}</td>
                            <td>{{$member->nama}}</td>
                            <td>{{$member->alamat}}</td>
                            <td>{{$member->hp}}</td>
                            <td>{{$member->email}}</td>
                            <td>{{$member->profile_pic}}</td>
                            <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('member.destroy', $member->id) }}" method="POST">
                                    <a href="{{ route('member.edit', $member->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-error">HAPUS</button>
                                </form>
                            </td>
                          </tr>
                          @empty
                            <div class="alert alert-danger">
                            Data Group belum Tersedia.
                            </div>
                        @endforelse
                      </tbody>
                    </table>
                  </div>
            </div>
        </div>
    </div>
</x-app-layout>
