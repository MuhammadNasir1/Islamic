@extends('layout.layout')
@section('title')
    Blogs
@endsection
@section('content')
    <div class="w-full pt-10 min-h-[88vh] border-2 shadow-2xl rounded-xl">
        <div class="flex justify-between px-5">
            <h1 class="text-3xl font-bold ">Notifications</h1>
                <button data-modal-target="blog-modal" data-modal-toggle="blog-modal"
                    class="px-3 py-2 font-semibold text-white rounded-full shadow-md gradient-bg">Add New + </button>
        </div>
        @php
            $headers = [''];
        @endphp

        <x-table :headers="$headers">
            <x-slot name="tablebody">
                <tr>
                    <td>
                            <div class="p-4 mb-5 bg-gray-100 rounded shadow">
                                <h3 class="flex items-center text-lg font-semibold text-gray-800">Notification title Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dol</h3>
                                <p class="mt-1 text-sm text-gray-600 ">Help Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore hic atque illum eos ut facere officia Help Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore hic atque illum eos ut facere officia Help Lorem</p>
                            </div>
                    </td>
                </tr>
            </x-slot>
        </x-table>


        <x-modal id="blog-modal">
            <x-slot name="title">Add Notifications </x-slot>
            <x-slot name="modal_width">max-w-4xl</x-slot>
            <x-slot name="body">
                <form id="postDataForm" url="addNotification" method="post">
                    @csrf
                    <x-input id="NotificationTitle" label="Notification Title" placeholder="Enter Title"
                    name='notification_title' type="text"></x-input>
                    <div class="grid grid-cols-2 gap-4 mt-4 ">
                        <x-select name="notification_type" id="NotificationType" label="Notification Type">
                            <x-slot name="options">
                                <option disabled selected>Select Notification Type</option>
                                <option value="important">Important</option>
                            </x-slot>
                        </x-select>
                        <x-input id="NotificationTitle" label="Select Time" placeholder="Enter Title"
                        name='notification_title' type="time"></x-input>
                        <div class="col-span-2">
                            <x-textarea id="NotificationDescription" label="Notification Description"
                                placeholder="Enter Description" name='notification_description' type="text" required="required"></x-textarea>
                        </div>
                    </div>
                    <div class="mt-4">
                        <x-modal-button :title="'Add Notification '"></x-modal-button>
                    </div>

                </form>
            </x-slot>
        </x-modal>

    </div>
@endsection

@section('js')
    <script>
        function updateDatafun() {

        }
        updateDatafun();

        $(document).on("formSubmissionResponse", function(event, response, Alert, SuccessAlert, WarningAlert) {
            // console.log(response);

            if (response.success) {
                $('.modalCloseBtn').click();
            } else {}
        });
    </script>
@endsection
