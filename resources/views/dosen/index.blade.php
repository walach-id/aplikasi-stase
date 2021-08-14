<x-layout>

    <h1 class="w-full pb-6 text-3xl text-black">Profil</h1>
    @if ($dosen)
        <div class="flex flex-col items-center justify-center p-4 bg-white rounded-lg shadow">
            <div class="inline-flex w-40 h-40 overflow-hidden border border-gray-200 rounded-full shadow-lg">
                <img src="{{ asset('storage/foto/dosen/' . $dosen->foto) }}" alt="" class="w-full h-full">
            </div>

            <h2 class="mt-4 text-xl font-bold">{{ $dosen->nama_lengkap }}</h2>
            <h6 class="mt-2 text-base font-bold">{{ $dosen->nip }}</h6>

            <p class="mt-3 text-base font-bold text-center text-gray-500">
                Wa Aktif : {{ $dosen->wa_aktif }}
            </p>
            <p class="mt-3 text-base font-bold text-center text-gray-500">
                Email Aktif : {{ $dosen->email }}
            </p>
            <p class="mt-3 text-base font-bold text-center text-gray-500">
                Jumlah Mahasiswa/i Bimbingan : {{ $list_mahasiswa->total() }}
            </p>
        </div>

        <div class="mt-8 overflow-auto bg-white">
            <table class="min-w-full bg-white">
                <thead class="text-white bg-gray-800">
                    <tr>
                        @foreach (['No', 'Npm', 'Nama Mahasiswa', 'kurikulum', 'WA Aktif', 'Email Aktif'] as $heading)
                            <th class="px-4 py-3 text-sm font-semibold text-left uppercase">{{ $heading }}</th>
                        @endforeach
                    </tr>
                </thead>
                @php
                    $i = 1;
                @endphp
                <tbody class="text-gray-700">
                    @foreach ($list_mahasiswa as $mahasiswa)
                        <tr>
                            <td class="px-4 py-3 text-left">
                                <a href="/" style="display:block;" class="hover:text-blue-500">
                                    {{ $i }}
                                </a>
                            </td>
                            <td class="px-4 py-3 text-left"><a href="/" style="display:block;"
                                    class="hover:text-blue-500">{{ $mahasiswa->nim }}</a></td>
                            <td class="px-4 py-3 text-left"><a href="/" style="display:block;"
                                    class="hover:text-blue-500">{{ $mahasiswa->nama_lengkap }}</a>
                            </td>
                            <td class="px-4 py-3 text-left"><a
                                    class="hover:text-blue-500">{{ $mahasiswa->kurikulum }}</a>
                            </td>
                            <td class="px-4 py-3 text-left"><a
                                    class="hover:text-blue-500">{{ $mahasiswa->wa_aktif }}</a>
                            </td>
                            <td class="px-4 py-3 text-left"><a
                                    class="hover:text-blue-500">{{ $mahasiswa->email }}</a>
                            </td>
                        </tr>
                        @php
                            $i++;
                        @endphp
                    @endforeach
                </tbody>

            </table>
            {{ $list_mahasiswa->links() }}
        </div>
    @else
        <div class="flex flex-col justify-around h-auto p-4 m-2 bg-red-500 rounded shadow-2xl w-96 border-box">
            <p class="mb-4 text-xl font-bold text-white uppercase">Silahkan mengisi terlebih dahulu profil
                diri
                anda</p>
            <div class="flex flex-row">
                <a href="{{ url('dosen/profil/add') }}"
                    class="px-4 py-2 text-sm font-bold text-white uppercase bg-red-700 rounded">Lengkapi
                    Profil</a>
            </div>
        </div>
    @endif

</x-layout>
