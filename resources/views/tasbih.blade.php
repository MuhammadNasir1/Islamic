@extends('layout.layout')
@section('title')
    Categories
@endsection
@section('content')
    <div class="w-full pt-10 min-h-[88vh] border-2 shadow-2xl rounded-xl">
        <div class="flex justify-between w-full px-5">
            <div>
                <h1 class="text-3xl font-bold">Tasbih</h1>
            </div>
            <div>
                <button id="addModalBtn" data-modal-target="categories-modal" data-modal-toggle="categories-modal"
                    class="px-5 py-3 font-semibold text-white rounded-full shadow-md gradient-bg">Add New</button>
                <button data-modal-target="categories-modal" data-modal-toggle="categories-modal"></button>
            </div>
        </div>
        <div id="categoryTable" class="transition-opacity duration-500 ">
            @php
                $headers = ['Sr.', 'Tasbih (English)', 'Tasbih (Arabic)', 'Category (English)', 'Action'];
            @endphp
            <x-table :headers="$headers">
                <x-slot name="tablebody">
                    <tr>
                        <td>1</td>
                        <td>Tasbih 1</td>
                        <td>ا ب ج</td>
                        <td>Category 1</td>
                        <td>
                            <div class='flex gap-4'>
                                <button categoryId="" class="updateDataBtn" categoryName=""
                                    categoryImage="{{ 'assets/default-logo-1.png' }}" categoryType="">
                                    <svg class="text-customOrangeDark" width='36' height='36' viewBox='0 0 36 36'
                                        fill='currentcolor' xmlns='http://www.w3.org/2000/svg'>
                                        <circle opacity='0.1' cx='18' cy='18' r='18' fill='' />
                                        <path fill-rule='evenodd' clip-rule='evenodd'
                                            d='M16.1637 23.6188L22.3141 15.665C22.6484 15.2361 22.7673 14.7402 22.6558 14.2353C22.5593 13.7763 22.277 13.3399 21.8536 13.0088L20.8211 12.1886C19.9223 11.4737 18.8081 11.549 18.1693 12.3692L17.4784 13.2654C17.3893 13.3775 17.4116 13.543 17.523 13.6333C17.523 13.6333 19.2686 15.0329 19.3058 15.063C19.4246 15.1759 19.5137 15.3264 19.536 15.507C19.5732 15.8607 19.328 16.1918 18.9641 16.2369C18.7932 16.2595 18.6298 16.2068 18.511 16.109L16.6762 14.6492C16.5871 14.5822 16.4534 14.5965 16.3791 14.6868L12.0188 20.3304C11.7365 20.6841 11.64 21.1431 11.7365 21.5871L12.2936 24.0025C12.3233 24.1304 12.4348 24.2207 12.5685 24.2207L15.0197 24.1906C15.4654 24.1831 15.8814 23.9799 16.1637 23.6188ZM19.5958 22.8672H23.5929C23.9829 22.8672 24.3 23.1885 24.3 23.5835C24.3 23.9794 23.9829 24.2999 23.5929 24.2999H19.5958C19.2059 24.2999 18.8887 23.9794 18.8887 23.5835C18.8887 23.1885 19.2059 22.8672 19.5958 22.8672Z'
                                            fill='' />
                                    </svg>
                                </button>
                                <button class="deleteDataBtn" delId="" delUrl="../deleteCategory" name="category_id">
                                    <svg class="text-customOrangeDark" width='36' height='36' viewBox='0 0 36 36'
                                        fill='currentcolor' xmlns='http://www.w3.org/2000/svg'>
                                        <circle opacity='0.1' cx='18' cy='18' r='18' fill='' />
                                        <path fill-rule='evenodd' clip-rule='evenodd'
                                            d='M23.4905 13.7423C23.7356 13.7423 23.9396 13.9458 23.9396 14.2047V14.4441C23.9396 14.6967 23.7356 14.9065 23.4905 14.9065H13.0493C12.8036 14.9065 12.5996 14.6967 12.5996 14.4441V14.2047C12.5996 13.9458 12.8036 13.7423 13.0493 13.7423H14.8862C15.2594 13.7423 15.5841 13.4771 15.6681 13.1028L15.7642 12.6732C15.9137 12.0879 16.4058 11.6992 16.9688 11.6992H19.5704C20.1273 11.6992 20.6249 12.0879 20.7688 12.6423L20.8718 13.1022C20.9551 13.4771 21.2798 13.7423 21.6536 13.7423H23.4905ZM22.557 22.4932C22.7487 20.7059 23.0845 16.4598 23.0845 16.4169C23.0968 16.2871 23.0545 16.1643 22.9705 16.0654C22.8805 15.9728 22.7665 15.918 22.6409 15.918H13.9025C13.7762 15.918 13.6562 15.9728 13.5728 16.0654C13.4883 16.1643 13.4466 16.2871 13.4527 16.4169C13.4539 16.4248 13.4659 16.5744 13.4861 16.8244C13.5755 17.9353 13.8248 21.0292 13.9858 22.4932C14.0998 23.5718 14.8074 24.2496 15.8325 24.2742C16.6235 24.2925 17.4384 24.2988 18.2717 24.2988C19.0566 24.2988 19.8537 24.2925 20.6692 24.2742C21.7298 24.2559 22.4369 23.59 22.557 22.4932Z'
                                            fill='' />
                                    </svg>
                                </button>
                                <button mediaTitle="" mediaAuthor="" mediaCategory="" mediaCategoryId="" mediaDate=""
                                    mediaDescription="" mediaId=""
                                    mediaImage="{{ asset('assets/default-logo-req.png') }}" class="view-modal">
                                    <svg class="text-customOrangeDark" width='37' height='36' viewBox='0 0 37 36'
                                        fill='currentcolor' xmlns='http://www.w3.org/2000/svg'>
                                        <path fill-rule='evenodd' clip-rule='evenodd'
                                            d='M28.0642 18.5C28.0642 18.126 27.8621 17.8812 27.4579 17.3896C25.9788 15.5938 22.7163 12.25 18.9288 12.25C15.1413 12.25 11.8788 15.5938 10.3996 17.3896C9.99542 17.8812 9.79333 18.126 9.79333 18.5C9.79333 18.874 9.99542 19.1187 10.3996 19.6104C11.8788 21.4062 15.1413 24.75 18.9288 24.75C22.7163 24.75 25.9788 21.4062 27.4579 19.6104C27.8621 19.1187 28.0642 18.874 28.0642 18.5ZM18.9288 21.625C19.7576 21.625 20.5524 21.2958 21.1385 20.7097C21.7245 20.1237 22.0538 19.3288 22.0538 18.5C22.0538 17.6712 21.7245 16.8763 21.1385 16.2903C20.5524 15.7042 19.7576 15.375 18.9288 15.375C18.0999 15.375 17.3051 15.7042 16.719 16.2903C16.133 16.8763 15.8038 17.6712 15.8038 18.5C15.8038 19.3288 16.133 20.1237 16.719 20.7097C17.3051 21.2958 18.0999 21.625 18.9288 21.625Z'
                                            fill='' />
                                        <circle opacity='0.1' cx='18.4287' cy='18' r='18' fill='' />
                                        <defs>
                                            <linearGradient id='paint0_linear_872_5570' x1='18.9288' y1='12.25'
                                                x2='18.9288' y2='24.75' gradientUnits='userSpaceOnUse'>
                                                <stop stop-color='#FCB376' />
                                                <stop offset='1' stop-color='#FE8A29' />
                                            </linearGradient>
                                            <linearGradient id='paint1_linear_872_5570' x1='18.4287' y1='0'
                                                x2='18.4287' y2='36' gradientUnits='userSpaceOnUse'>
                                                <stop stop-color='#FCB376' />
                                                <stop offset='1' stop-color='#FE8A29' />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>

                </x-slot>
            </x-table>
        </div>
        <x-modal id="categories-modal">
            <x-slot name="title">Add </x-slot>
            <x-slot name="modal_width">max-w-2xl</x-slot>
            <x-slot name="body">
                <form id="postDataForm" url="../saveCategory" enctype="multipart/form-data" method="post">
                    @csrf
                    <input type="hidden" name="category_id" id="updateId">
                    <div class="">
                        <div class="grid gap-4 ">
                            <div class="w-full ">
                                <x-input class="" id="categoryName" label="Tasbih (Urdu):"
                                    placeholder="Enter Here" name="category_name" type="text"></x-input>
                                <div class="mt-4">
                                    <x-input class="" id="categoryName" label="Tasbih (Arabic)::"
                                        placeholder="ا ب ج " name="category_name" type="text"></x-input>
                                </div>
                                <div class="mt-4">
                                    <x-input class="" id="categoryName" label="Tasbih (English):"
                                    placeholder="Enter Here" name="category_name" type="text"></x-input>
                                </div>
                               <div class="mt-4">
                                <x-select  name="category_type" id="categoryType1" label="Select Category">
                                    <x-slot name="options">
                                        <option disabled selected>Select Category</option>
                                        <option value="blogs">Blog</option>
                                        <option value="diseases">Diseases</option>
                                        <option value="consultancy">Consultancy</option>
                                    </x-slot>
                                </x-select>
                               </div>
                                <div class="px-16 mt-8">
                                    <x-modal-button :title="'Add Category'"></x-modal-button>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </x-slot>
        </x-modal>
        <x-modal id="view-modal" class="modalCloseBtn">
            <x-slot name="title">Details </x-slot>
            <x-slot name="modal_width">max-w-4xl</x-slot>
            <x-slot name="body">
                <div class="p-6">
                    <div class="">
                        <!-- Image Placeholder -->
                        <div class="ml-5">
                            <h3 class="text-xl font-semibold text-gray-800" id="dTitle"></h3>

                            <div class="mt-5 ">
                                <div class="">
                                    <p class=" text-[#323C47] text-right text-[12.9px] lg:text-lg md:text-lg" id="">رَبِّ زِدْنِي عِلْمًا</p>
                                    <p class="mt-4 text-[#323C47] text-[12.9px] lg:text-lg md:text-lg" id="">My Lord, increase me in knowledge.</p>
                                    <p class="mt-4 text-[#323C47] text-[12.9px] lg:text-lg md:text-lg" id="">Category (ا ب ج )</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </x-slot>
        </x-modal>
    </div>

    </div>
@endsection

@section('js')
    <script>
        function submitForm(type) {
            // Set the form action dynamically based on the type
            let form = document.getElementById('categoryForm');

            form.action = type ? `{{ url('categories') }}/${type}` : `categories`;
            form.submit();
        }

        function updateDatafun() {

            $('.updateDataBtn').click(function() {
                $('#categories-modal').removeClass("hidden");
                $('#categories-modal').addClass('flex');
                $('#categoryName').val($(this).attr('categoryName'));
                $('#categoryType').val($(this).attr('categoryType')).trigger('change');
                $('#updateId').val($(this).attr('categoryId'));
                let fileImg = $('#categories-modal .file-preview');
                fileImg.removeClass('hidden').attr('src', $(this).attr('categoryImage'));
                $('#categories-modal #modalTitle').text("Update Category");
                $('#categories-modal #btnText').text("Update");

            });
        }
        updateDatafun();
        $('#addModalBtn').click(function() {
            $('#postDataForm')[0].reset();
            $('#categoryType').trigger('change');
            $('#updateId').val('');
            let fileImg = $('#categories-modal .file-preview');
            fileImg.addClass('hidden');
            $('#categories-modal #modalTitle').text("Add Category");
            $('#categories-modal #btnText').text("Add Hadith");

        })
        // Listen for the custom form submission response event


        function viewData() {

            $('.view-modal').click(function() {
                $('#view-modal').addClass('flex').removeClass('hidden');
                $('#dTitle').text($(this).attr('mediaTitle'));
                $('#dAuthor').text($(this).attr('mediaAuthor'));
                $('#dCategory').text($(this).attr('mediaCategory'));
                $('#dDate').text($(this).attr('mediaDate'));
                $('#dDescription').text($(this).attr('mediaDescription'));
                $('#dImage').attr('src', $(this).attr('mediaImage'));

            });

        }
        viewData()
        $(document).on("formSubmissionResponse", function(event, response, Alert, SuccessAlert, WarningAlert) {
            // console.log(response);

            if (response.success) {
                $('.modalCloseBtn').click();
            } else {}
        });
    </script>
@endsection
