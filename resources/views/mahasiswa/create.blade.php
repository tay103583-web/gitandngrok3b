<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Data Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                @if ($errors->any())
                    <div class="mb-4 p-4 bg-red-100 text-red-600 rounded">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('mahasiswa.store') }}" method="POST">
                    @csrf
                    
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">NIM</label>
                        <input type="text" name="nim" value="{{ old('nim') }}" class="w-full border-gray-300 rounded shadow-sm focus:border-indigo-500" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Nama</label>
                        <input type="text" name="nama" value="{{ old('nama') }}" class="w-full border-gray-300 rounded shadow-sm focus:border-indigo-500" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Program Studi</label>
                        <input type="text" name="program_studi" value="{{ old('program_studi') }}" class="w-full border-gray-300 rounded shadow-sm focus:border-indigo-500" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="w-full border-gray-300 rounded shadow-sm focus:border-indigo-500" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Angkatan</label>
                        <input type="number" name="angkatan" value="{{ old('angkatan') }}" class="w-full border-gray-300 rounded shadow-sm focus:border-indigo-500" required>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a href="{{ route('mahasiswa.index') }}" class="mr-4 text-gray-600 hover:underline">Batal</a>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Simpan Data
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>