@include('partials.header')

<body class="bg-gray-100 font-family-karla flex">

    @include('partials.sidebar')

    <div class="relative w-full flex flex-col h-screen overflow-y-hidden">

        @include('partials.mobile')

        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <h1 class="w-full text-3xl text-black pb-6">Lengkapi Profil</h1>
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">

                        <div class="leading-loose">
                            <form class="p-10 bg-white rounded shadow-xl" enctype="multipart/form-data"
                                action="{{ url('dosen/profil/store') }}" method="POST">
                                @csrf
                                <div class="">
                                    <label class="block text-base text-black font-bold" for="name">Nama Lengkap dan
                                        Gelar</label>
                                    <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="email"
                                        name="nama" type="text" required="">
                                </div>
                                <div class="mt-2">
                                    <label class="block text-base text-black font-bold" for="name">NIP</label>
                                    <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="email"
                                        name="nip" type="text" required="">
                                </div>
                                <div class="mt-2">
                                    <label class="block text-base text-black font-bold" for="name">WA Aktif</label>
                                    <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="email"
                                        name="wa" type="text" required="">
                                </div>
                                <div class="mt-2">
                                    <label class="block text-base text-black font-bold" for="name">Email Aktif</label>
                                    <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="email"
                                        name="email" type="text" required="">
                                </div>
                                <div class="mt-2">
                                    <label class="block text-base text-black font-bold" for="name">Upload Foto</label>
                                    <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="email"
                                        name="foto" type="file" required="">
                                </div>
                                <div class="mt-6">
                                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"
                                        type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>




            </main>


            @include('partials.footer')
</body>

</html>
