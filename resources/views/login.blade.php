<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>Document</title>
</head>

<body>


    <section style="background-image: url('{{ asset('assets/loginbgpic.png') }}');"
    class="flex items-center justify-center h-screen mx-auto bg-green-400 bg-center bg-no-repeat bg-cover bg-blend-multiply">
    <div class="container mx-auto">
        <div class="flex max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-lg lg:max-w-4xl">
            <div class="hidden bg-cover bg-[#029000] lg:block lg:w-1/2">
                <div class="flex flex-col justify-center h-full p-16">
                    <h1 class="mt-5 text-5xl font-extrabold text-center text-white">Welcome!</h1>
                    <div class="flex justify-center">
                        <img class="w-64 h-64" src="{{ asset('assets/loginlogosvg/logosvg.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="w-full p-6 lg:p-16 lg:w-1/2">
                <h2 class="text-4xl font-extrabold text-center text-[#029000]">LOGIN</h2>
                <div class="mt-4">
                    <label class="block mb-2 text-sm font-bold text-black">Email:</label>
                    <input
                        class="block w-full px-4 py-2 text-gray-700 border border-gray-300 rounded-full shadow-2xl focus:outline-none focus:border-[#029000]"
                        placeholder="mail@gmail.com" type="email" />
                </div>
                <div class="relative mt-4">
                    <label class="block mb-2 text-sm font-bold text-black">Password</label>
                    <input
                        class="block w-full px-4 py-2 text-gray-700 border border-gray-300 rounded-full shadow-2xl focus:outline-none focus:border-[#029000]"
                        placeholder="Enter your password" type="password" id="password" />
                    <span class="absolute inset-y-0 flex items-center cursor-pointer right-4 bottom-2"
                        id="toggle-password">
                        <i class="text-gray-400 fa-solid fa-eye-slash" id="toggle-icon"></i>
                    </span>
                    <div class="flex justify-end">
                        <a href="#" class="mt-4 text-xs text-gray-500">Forget Password?</a>
                    </div>
                </div>
                <div class="p-5 mx-4">
                    <button
                        class="w-full px-4 py-2 font-bold text-white rounded-full bg-[#029000] hover:bg-lime-600">Login</button>
                </div>
            </div>
        </div>
    </div>
</section>

    <script>
        const passwordField = document.getElementById('password');
        const togglePasswordButton = document.getElementById('toggle-password');
        const toggleIcon = document.getElementById('toggle-icon');

        togglePasswordButton.addEventListener('click', () => {
            // Toggle password visibility
            const isPassword = passwordField.type === 'password';
            passwordField.type = isPassword ? 'text' : 'password';

            // Toggle icon
            toggleIcon.classList.toggle('fa-eye-slash', !isPassword);
            toggleIcon.classList.toggle('fa-eye', isPassword);
        });
    </script>
</body>

</html>
