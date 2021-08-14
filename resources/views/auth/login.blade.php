<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <link href="{{ asset('css/app.css') }}" rel=" stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto@100;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="bg-gray-300" style="font-family:Roboto">
    <div class="flex items-center justify-center w-full h-screen">
        <form class="w-full bg-white rounded-lg md:w-1/3">
            <div class="flex justify-center mt-6 font-bold">
                <img class="w-20 h-20"
                    src="https://raw.githubusercontent.com/sefyudem/Responsive-Login-Form/master/img/avatar.svg">
            </div>
            <h2 class="mb-4 text-3xl text-center text-gray-700">Login Form</h2>
            <div class="px-12 pb-10">
                <div class="w-full mb-2">
                    <div class="flex items-center">
                        <i class='z-10 ml-3 text-xs text-gray-400 fill-current fas fa-user'></i>
                        <input type='text' placeholder="Username"
                            class="w-full px-8 py-2 -mx-6 text-gray-700 border rounded focus:outline-none" />
                    </div>
                </div>
                <div class="w-full mb-2">
                    <div class="flex items-center">
                        <i class='z-10 ml-3 text-xs text-gray-400 fill-current fas fa-lock'></i>
                        <input type='text' placeholder="Password"
                            class="w-full px-8 py-2 -mx-6 text-gray-700 border rounded focus:outline-none" />
                    </div>
                </div>
                <a href="#" class="float-right mb-4 text-xs text-gray-500">Forgot Password?</a>
                <button type="submit"
                    class="w-full py-2 text-gray-100 bg-green-600 rounded-full focus:outline-none">Button</button>
            </div>
        </form>
    </div>
</body>

</html>
