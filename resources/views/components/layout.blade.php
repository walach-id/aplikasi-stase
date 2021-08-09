@include('partials.header')

<body class="flex bg-gray-100 font-family-karla">

    @include('partials.sidebar')

    <div class="relative flex flex-col w-full h-screen overflow-y-hidden">

        @include('partials.mobile')

        <div class="flex flex-col w-full h-screen overflow-x-hidden border-t">
            <main class="flex-grow w-full p-6">

                {{ $slot }}



            </main>

            @include('partials.footer')
</body>

</html>
