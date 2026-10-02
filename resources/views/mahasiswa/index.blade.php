<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Data Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                @if(auth()->user()->role === 'admin')
                    <div class="mb-4">
                        <a href="{{ route('mahasiswa.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow">
                            + TAMBAH MAHASISWA
                        </a>
                    </div>
                @endif

                <table class="min-w-full table-auto w-full text-left border-collapse mt-4">
                    <thead>
                        <tr class="border-b bg-gray-100 text-sm font-semibold text-gray-700">
                            <th class="p-3">NIM</th>
                            <th class="p-3">NAMA</th>
                            <th class="p-3">PRODI</th>
                            <th class="p-3">EMAIL</th>
                            @if(auth()->user()->role === 'admin')
                                <th class="p-3">AKSI</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mahasiswas as $mhs)
                            <tr class="border-b text-sm text-gray-600">
                                <td class="p-3">{{ $mhs->nim }}</td>
                                <td class="p-3">{{ $mhs->nama }}</td>
                                <td class="p-3">{{ $mhs->program_studi }}</td>
                                <td class="p-3">{{ $mhs->email }}</td>
                                
                                @if(auth()->user()->role === 'admin')
                                    <td class="p-3 flex space-x-2">
                                        <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="text-blue-600 hover:underline">Edit</a>
                                        <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" onsubmit="return confirm('Yakin hapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                                        </form>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>