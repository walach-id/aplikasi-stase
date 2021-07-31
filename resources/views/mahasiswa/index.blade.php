@include('partials.header')

<body class="bg-gray-100 font-family-karla flex">

    @include('partials.sidebar')

    <div class="relative w-full flex flex-col h-screen overflow-y-hidden">

        @include('partials.mobile')

        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <h1 class="w-full text-3xl text-black pb-6">Profil Anda</h1>
                @if ($mahasiswa)
                    <div class="flex flex-col items-center justify-center bg-white p-4 shadow rounded-lg mb-8">


                        <h2 class="mt-4 font-bold text-xl">{{ $mahasiswa->nama_lengkap }}</h2>
                        <h6 class="mt-2 text-base font-bold">{{ $mahasiswa->nip }}</h6>
                        <p class="text-base font-bold text-gray-500 text-center mt-3">
                            Kurikulum : {{ $mahasiswa->kurikulum }}
                        </p>
                        <p class="text-base font-bold text-gray-500 text-center mt-3">
                            Wa Aktif : {{ $mahasiswa->wa_aktif }}
                        </p>
                        <p class="text-base font-bold text-gray-500 text-center mt-3">
                            Email Aktif : {{ $mahasiswa->email }}
                        </p>
                    </div>

                    <h1 class="w-full text-3xl text-black pb-6">Identitas Dosen Pembimbing</h1>
                    <div class="flex flex-col items-center justify-center bg-white p-4 shadow rounded-lg mb-8">
                        <div
                            class="inline-flex shadow-lg border border-gray-200 rounded-full overflow-hidden h-40 w-40">
                            <img src="/img/dosen/{{ $dosen->nama_lengkap }}/{{ $dosen->foto }}" alt=""
                                class="h-full w-full">
                        </div>

                        <h2 class="mt-4 font-bold text-xl">{{ $dosen->nama_lengkap }}</h2>
                        <h6 class="mt-2 text-base font-bold">{{ $dosen->nip }}</h6>

                        <p class="text-base font-bold text-gray-500 text-center mt-3">
                            Wa Aktif : {{ $dosen->wa_aktif }}
                        </p>
                        <p class="text-base font-bold text-gray-500 text-center mt-3">
                            Email Aktif : {{ $dosen->email }}
                        </p>
                    </div>

                @else
                    <div
                        class="w-96 m-2 h-auto rounded shadow-2xl justify-around bg-red-500 flex flex-col border-box p-4">
                        <p class="text-white font-bold uppercase text-xl mb-4">Silahkan mengisi terlebih dahulu profil
                            diri
                            anda</p>
                        <div class="flex flex-row">
                            <a href="{{ url('mahasiswa/profil/add') }}"
                                class="bg-red-700 px-4 py-2 rounded uppercase font-bold text-sm text-white">Lengkapi
                                Profil</a>
                        </div>
                    </div>
                @endif


            </main>

            @include('partials.footer')
</body>

</html>