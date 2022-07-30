<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Group') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" action="{{ route('group.update', $group) }}" class="m-5">
                    @csrf
                    @method('PUT')
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                          <span class="label-text">ID Group :</span>
                        </label>
                        <input type="text" name="id" value="{{$group->id}}" placeholder="ID Group" class="input input-bordered w-full max-w-xs" />
                    </div>
                    <div class="form-control my-2 w-full max-w-xs">
                        <label class="label">
                          <span class="label-text">Nama Group :</span>
                        </label>
                        <input type="text" name="namagroup" value="{{$group->namagroup}}" placeholder="Nama Group" class="input input-bordered w-full max-w-xs" />
                    </div>
                    <div class="form-control my-2 w-full max-w-xs">
                        <label class="label">
                          <span class="label-text">Kota :</span>
                        </label>
                        <input type="text" name="kota" value="{{$group->kota}}" placeholder="Kota" class="input input-bordered w-full max-w-xs" />
                    </div>
                    <button type="submit" class="btn btn-primary my-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
