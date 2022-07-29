<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" action="{{ route('createuser') }}" class="m-5">
                    @csrf
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                          <span class="label-text">Name :</span>
                        </label>
                        <input type="text" name="name" placeholder="Name" class="input input-bordered w-full max-w-xs" />
                    </div>
                    <div class="form-control my-2 w-full max-w-xs">
                        <label class="label">
                          <span class="label-text">Email :</span>
                        </label>
                        <input type="email" name="email" placeholder="Email" class="input input-bordered w-full max-w-xs" />
                    </div>
                    <div class="form-control my-2 w-full max-w-xs">
                        <label class="label">
                          <span class="label-text">Password :</span>
                        </label>
                        <input type="password" name="password" placeholder="Password" class="input input-bordered w-full max-w-xs" />
                    </div>
                    <button type="submit" class="btn btn-primary my-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
