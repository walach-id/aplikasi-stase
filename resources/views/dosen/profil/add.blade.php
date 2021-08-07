@include('partials.header')

<body class="flex bg-gray-100 font-family-karla">

    @include('partials.sidebar')

    <div class="relative flex flex-col w-full h-screen overflow-y-hidden">

        @include('partials.mobile')

        <div class="flex flex-col w-full h-screen overflow-x-hidden border-t">
            <main class="flex-grow w-full p-6">
                <h1 class="w-full pb-6 text-3xl text-black">Lengkapi Profil</h1>
                <div class="flex flex-wrap">
                    <div class="w-full pr-0 my-6 lg:w-1/2 lg:pr-2">

                        <div class="leading-loose">
                            <form class="p-10 bg-white rounded shadow-xl" enctype="multipart/form-data"
                                action="{{ url('dosen/profil/store') }}" method="POST">
                                @csrf
                                <x-input text='NIP' id='nip' :required='true' />
                                @error('nip')
                                    <p style="text-red-100">{{ $message }}</p>
                                @enderror

                                <x-input text='Nama Lengkap' id='nama_lengkap' :required='true' />
                                @error('nama_lengkap')
                                    <p style="text-red-100">{{ $message }}</p>
                                @enderror

                                <x-input text='Email' id='email' :required='true' type='email' />
                                @error('email')
                                    <p style="text-red-100">{{ $message }}</p>
                                @enderror

                                {{-- <x-input text='Password' id='password' :required='true' type='password'
                                    :rememberOldValue='false' />
                                @error('password')
                                    <p style="text-red-100">{{ $message }}</p>
                                @enderror --}}

                                <x-input text='WA Aktif' id='wa_aktif' />
                                @error('wa_aktif')
                                    <p style="text-red-100">{{ $message }}</p>
                                @enderror

                                <x-input text='Foto' id='foto' type='file' />

                                <div class="mt-6">
                                    <button class="px-4 py-1 font-light tracking-wider text-white bg-gray-900 rounded"
                                        type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>




            </main>


            @include('partials.footer')
</body>

</html>
