<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Group') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white px-5 overflow-hidden shadow-sm sm:rounded-lg">
                <a href="{{ route('group.create') }}" class="btn btn-success">Add Group</a>
                <div class="overflow-x-auto">
                    <table class="table w-full">
                      <!-- head -->
                      <thead>
                        <tr>
                          <th>ID Group</th>
                          <th>Nama Group</th>
                          <th>Kota</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- row 1 -->
                        @forelse ($groups as $group)
                        <tr>
                            <th>{{$group->id}}</th>
                            <td>{{$group->namagroup}}</td>
                            <td>{{$group->kota}}</td>
                            <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('group.destroy', $group->id) }}" method="POST">
                                    <a href="{{ route('group.edit', $group->id) }}" class="btn btn-sm btn-primary">EDIT</a>
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
