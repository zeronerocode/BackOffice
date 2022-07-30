<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Member') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" action="{{ route('member.update',$member) }}" class="m-5">
                    @csrf
                    @method('PUT')
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                          <span class="label-text">ID Member :</span>
                        </label>
                        <input type="text" name="id" value="{{$member->id}}" placeholder="ID Member" class="input input-bordered w-full max-w-xs" />
                    </div>
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                          <span class="label-text">ID Group :</span>
                        </label>
                        <input type="text" name="groupid" value="{{$member->groupid}}" placeholder="ID Group" class="input input-bordered w-full max-w-xs" />
                    </div>
                    <div class="form-control my-2 w-full max-w-xs">
                        <label class="label">
                          <span class="label-text">Nama :</span>
                        </label>
                        <input type="text" name="nama" value="{{$member->nama}}" placeholder="Nama" class="input input-bordered w-full max-w-xs" />
                    </div>
                    <div class="form-control my-2 w-full max-w-xs">
                        <label class="label">
                          <span class="label-text">Alamat :</span>
                        </label>
                        <input type="text" name="alamat" value="{{$member->alamat}}" placeholder="Alamat" class="input input-bordered w-full max-w-xs" />
                    </div>
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                          <span class="label-text">Email :</span>
                        </label>
                        <input type="email" name="email" value="{{$member->email}}" placeholder="Email" class="input input-bordered w-full max-w-xs" />
                    </div>
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                          <span class="label-text">Hp :</span>
                        </label>
                        <input type="text" name="hp" value="{{$member->hp}}" placeholder="Hp" class="input input-bordered w-full max-w-xs" />
                    </div>
                    <button type="submit" class="btn btn-primary my-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
