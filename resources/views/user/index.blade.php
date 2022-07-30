<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white px-5 overflow-hidden shadow-sm sm:rounded-lg">
                <button class="btn btn-success">Add User</button>
                <div class="overflow-x-auto">
                    <table class="table w-full">
                      <!-- head -->
                      <thead>
                        <tr>
                          <th></th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- row 1 -->
                        @forelse ($users as $user)
                        <tr>
                            <th>{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('user.destroy', $user->id) }}" method="POST">
                                    <a href="{{ route('user.edit', $user) }}" class="btn btn-sm btn-primary">EDIT</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                            </td>
                          </tr>
                          @empty
                            <div class="alert alert-danger">
                            Data User belum Tersedia.
                            </div>
                        @endforelse
                      </tbody>
                    </table>
                  </div>
            </div>
        </div>
    </div>
</x-app-layout>
