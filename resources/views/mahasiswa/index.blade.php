@include('partials.header')

<body class="flex bg-gray-100 font-family-karla">

    @include('partials.sidebar')

    <div class="relative flex flex-col w-full h-screen overflow-y-hidden">

        @include('partials.mobile')

        <div class="flex flex-col w-full h-screen overflow-x-hidden border-t">
            <main class="flex-grow w-full p-6">
                <h1 class="w-full pb-6 text-3xl text-black">Profil Anda</h1>
                @if ($mahasiswa)
                    <div class="flex flex-col items-center justify-center p-4 mb-8 bg-white rounded-lg shadow">


                        <h2 class="mt-4 text-xl font-bold">{{ $mahasiswa->nama_lengkap }}</h2>
                        <h6 class="mt-2 text-base font-bold">{{ $mahasiswa->nip }}</h6>
                        <p class="mt-3 text-base font-bold text-center text-gray-500">
                            Kurikulum : {{ $mahasiswa->kurikulum }}
                        </p>
                        <p class="mt-3 text-base font-bold text-center text-gray-500">
                            Wa Aktif : {{ $mahasiswa->wa_aktif }}
                        </p>
                        <p class="mt-3 text-base font-bold text-center text-gray-500">
                            Email Aktif : {{ $mahasiswa->email }}
                        </p>
                    </div>

                    <h1 class="w-full pb-6 text-3xl text-black">Identitas Dosen Pembimbing</h1>
                    <div class="flex flex-col items-center justify-center p-4 mb-8 bg-white rounded-lg shadow">
                        <div
                            class="inline-flex w-40 h-40 overflow-hidden border border-gray-200 rounded-full shadow-lg">
                            <img src="/img/dosen/{{ $dosen->nama_lengkap }}/{{ $dosen->foto }}" alt=""
                                class="w-full h-full">
                        </div>

                        <h2 class="mt-4 text-xl font-bold">{{ $dosen->nama_lengkap }}</h2>
                        <h6 class="mt-2 text-base font-bold">{{ $dosen->nip }}</h6>

                        <p class="mt-3 text-base font-bold text-center text-gray-500">
                            Wa Aktif : {{ $dosen->wa_aktif }}
                        </p>
                        <p class="mt-3 text-base font-bold text-center text-gray-500">
                            Email Aktif : {{ $dosen->email }}
                        </p>
                    </div>

                @else
                    <div
                        class="flex flex-col justify-around h-auto p-4 m-2 bg-red-500 rounded shadow-2xl w-96 border-box">
                        <p class="mb-4 text-xl font-bold text-white uppercase">Silahkan mengisi terlebih dahulu profil
                            diri
                            anda</p>
                        <div class="flex flex-row">
                            <a href="{{ url('mahasiswa/profil/add') }}"
                                class="px-4 py-2 text-sm font-bold text-white uppercase bg-red-700 rounded">Lengkapi
                                Profil</a>
                        </div>
                    </div>
                @endif


            </main>

            @include('partials.footer')
</body>

</html>
