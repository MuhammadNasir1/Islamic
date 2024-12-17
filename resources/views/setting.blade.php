@extends('layout.layout')
@section('title')
    Operators
@endsection
@section('content')
    <style>
        .active-tab {
            color: #029000;
            border-color: #029000;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <div class="w-full pt-10 min-h-[88vh] border-2 shadow-2xl rounded-xl">
        <div class="flex justify-between px-5">
            <h1 class="text-3xl font-bold ">Settings </h1>
        </div>
        <div class="w-full p-8 ">
            <!-- Profile Image and Email -->
            <div class="flex flex-col items-center mb-6">
                <!-- Profile Picture -->
                <div class="relative">
                    <img src="{{ asset("assets/settingimg.png") }}" alt="Profile Picture" class="w-32 h-32 rounded-full">
                    <!-- Edit Icon -->
                    <div class="absolute bottom-0 p-2 rounded-full cursor-pointer right-1">
                       <img class="w-6 h-6" src="{{ asset("assets/group_Edit.png") }}" alt="">
                    </div>
                </div>
                <!-- User Email -->
                <p class="mt-4 text-customOrangeLight">Lorumipsum@email.com</p>
            </div>

            <!-- Form Fields -->
            <form action="#" method="POST" class="space-y-6">
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    <!-- Full Name -->
                    <div>
                        <label class="block mb-1 text-sm font-medium text-customOrangeDark">Full Name</label>
                        <input type="text" placeholder="Enter Your Name" class="w-full px-4 py-2 border rounded-md outline-none focus:ring-2 focus:ring-green-400">
                    </div>
                    <!-- Phone Number -->
                    <div>
                        <label class="block mb-1 text-sm font-medium text-customOrangeDark">Phone Number</label>
                        <input type="text" placeholder="Enter Your Number" class="w-full px-4 py-2 border rounded-md outline-none focus:ring-2 focus:ring-green-400">
                    </div>
                </div>

                <!-- Password Fields -->
                <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                    <!-- Old Password -->
                    <div>
                        <label class="block mb-1 text-sm font-medium text-customOrangeDark">Old Password</label>
                        <input type="password" placeholder="Enter Password" class="w-full px-4 py-2 border rounded-md outline-none focus:ring-2 focus:ring-green-400">
                    </div>
                    <!-- New Password -->
                    <div>
                        <label class="block mb-1 text-sm font-medium text-customOrangeDark">New Password</label>
                        <input type="password" placeholder="Enter New Password" class="w-full px-4 py-2 border rounded-md outline-none focus:ring-2 focus:ring-green-400">
                    </div>
                    <!-- Confirm Password -->
                    <div>
                        <label class="block mb-1 text-sm font-medium text-customOrangeDark">Confirm New Password</label>
                        <input type="password" placeholder="Enter Confirm Password" class="w-full px-4 py-2 border rounded-md outline-none focus:ring-2 focus:ring-green-400">
                    </div>
                </div>

                <!-- Save Button -->
                <div class="flex justify-end">
                    <button type="submit" class="px-6 py-2 font-medium text-white rounded-md shadow-md bg-customOrangeLight hover:bg-customOrangeDark">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const tabs = document.querySelectorAll("#default-tab button");

            tabs.forEach(tab => {
                tab.addEventListener("click", function() {
                    // Remove the active class from all tabs
                    tabs.forEach(t => t.classList.remove("active-tab"));

                    // Add the active class to the clicked tab
                    this.classList.add("active-tab");
                });
            });
        });
    </script>
@endsection


@section('js')
    <script>
        $(document).ready(function () {
    // Toggle password visibility
    $('.fa-eye-slash').on('click', function () {
        let $icon = $(this);
        let $input = $icon.closest('div').find('input');
        if ($input.attr('type') === 'password') {
            $input.attr('type', 'text');
            $icon.removeClass('fa-eye-slash').addClass('fa-eye');
        } else {
            $input.attr('type', 'password');
            $icon.removeClass('fa-eye').addClass('fa-eye-slash');
        }
    });
});
        let userImageExists = {{ isset($user['user_image']) ? 'true' : 'false' }};
        let userImage = {!! isset($user['user_image']) ? json_encode($user['user_image']) : 'null' !!};
        let fileImg = $('#settingForm .file-preview');

        if (userImageExists) {
            fileImg.removeClass('hidden').attr('src', userImage);
        } else {
            fileImg.addClass('hidden');
        }
        $("#settingForm, #passwordForm").submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: $(this).attr("url"),
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $("#btnSpinner , #SbtnSpinner").removeClass("hidden");
                    $("#btnText , #SbtnText").addClass("hidden");
                    $("#submitBtn , #submitBtn").attr("disabled", true);
                },
                success: function(response) {
                    $("#btnSpinner , #SbtnSpinner").addClass("hidden");
                    $("#btnText , #SbtnText").removeClass("hidden");
                    $("#submitBtn , #submitBtn").attr("disabled", false);
                    window.location.href = 'setting';
                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "Success",
                        text: response.message,
                        showConfirmButton: false,
                        timer: 2000,
                    });

                },

                error: function(jqXHR) {
                    let response = JSON.parse(jqXHR.responseText);
                    $("#btnSpinner , #SbtnSpinner").addClass("hidden");
                    $("#btnText , #SbtnText").removeClass("hidden");
                    $("#submitBtn , #submitBtn").attr("disabled", false);
                    Swal.fire({
                        position: "center",
                        icon: "warning",
                        title: "Error",
                        text: response.message,
                        showConfirmButton: false,
                        timer: 2000,
                    });

                },
            });
        });
    </script>
@endsection
