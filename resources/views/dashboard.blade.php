@extends('layout.layout')
@section('title')
    Home
@endsection

@section('content')
    <div class="min-h-[88vh] p-8 py-2 rounded-2xl  ">
        <h1 class="text-[32px] mt-[10px]  font-bold">Dashboard</h1>
        <p class="flex">
            <img class="mt-4" src="{{ asset('assets/Vector 3.svg') }}" alt="">
            <span class="mt-4 text-gray-400 ms-2">Today <span class="text-black">{{ now()->format('j, F Y') }}</span></span>
        </p>
        <div class="grid grid-cols-1 gap-4 mt-10 mb-4 xl:grid-cols-4 lg:grid-cols-4 md:grid-cols-2">
            <div
                class="flex items-center justify-between w-full h-full p-4 bg-white border-4 shadow-sm gradient-border rounded-xl">
                <div>
                    <h2 class="mb-1 text-sm font-medium text-gray-400">Tasbih</h2>
                    <p class="text-2xl font-bold text-gray-800 ">5,738</p>
                </div>
                <div class="flex items-center justify-center rounded-full w-14 h-14 bg-customOrangeDark">
                    <img class="w-8 h-8" src="{{ asset('assets/tasbih 1.svg') }}" alt="">
                </div>
            </div>
            <div
                class="flex items-center justify-between w-full h-full p-4 bg-white border-4 shadow-sm gradient-border rounded-xl">
                <div>
                    <h2 class="mb-1 text-sm font-medium text-gray-400">Hadith</h2>
                    <p class="text-2xl font-bold text-gray-800 ">5,738</p>
                </div>
                <div class="flex items-center justify-center rounded-full w-14 h-14 bg-customOrangeDark">
                    <img class="w-8 h-8" src="{{ asset('assets/dash1svg.svg') }}" alt="">
                </div>
            </div>
            <div
                class="flex items-center justify-between w-full h-full p-4 bg-white border-4 shadow-sm gradient-border rounded-xl">
                <div>
                    <h2 class="mb-1 text-sm font-medium text-gray-400">Doa</h2>
                    <p class="text-2xl font-bold text-gray-800 ">5,738</p>
                </div>
                <div class="flex items-center justify-center rounded-full w-14 h-14 bg-customOrangeDark">
                    <img class="w-8 h-8" src="{{ asset('assets/dua.svg') }}" alt="">
                </div>
            </div>
            <div
                class="flex items-center justify-between w-full h-full p-4 bg-white border-4 shadow-sm gradient-border rounded-xl">
                <div>
                    <h2 class="mb-1 text-sm font-medium text-gray-400">Ayah</h2>
                    <p class="text-2xl font-bold text-gray-800 ">5,738</p>
                </div>
                <div class="flex items-center justify-center rounded-full w-14 h-14 bg-customOrangeDark">
                    <img class="w-8 h-8" src="{{ asset('assets/quran 1.svg') }}" alt="">
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-4 mt-3 mb-4 xl:grid-cols-4 lg:grid-cols-4 md:grid-cols-2">
            <div
                class="flex items-center justify-between w-full h-full p-4 bg-white border-4 shadow-sm gradient-border rounded-xl">
                <div>
                    <h2 class="mb-1 text-sm font-medium text-gray-400">Naat</h2>
                    <p class="text-2xl font-bold text-gray-800 ">5,738</p>
                </div>
                <div class="flex items-center justify-center rounded-full w-14 h-14 bg-customOrangeDark">
                    <img class="w-8 h-8" src="{{ asset('assets/masjid-al-nabawi 1.svg') }}" alt="">
                </div>
            </div>
            <div
                class="flex items-center justify-between w-full h-full p-4 bg-white border-4 shadow-sm gradient-border rounded-xl">
                <div>
                    <h2 class="mb-1 text-sm font-medium text-gray-400">Nohy</h2>
                    <p class="text-2xl font-bold text-gray-800 ">5,738</p>
                </div>
                <div class="flex items-center justify-center rounded-full w-14 h-14 bg-customOrangeDark">
                    <img class="w-8 h-8" src="{{ asset('assets/imam hussain shrine (1) 1.svg') }}" alt="">
                </div>
            </div>
            <div
                class="flex items-center justify-between w-full h-full p-4 bg-white border-4 shadow-sm gradient-border rounded-xl">
                <div>
                    <h2 class="mb-1 text-sm font-medium text-gray-400">Post</h2>
                    <p class="text-2xl font-bold text-gray-800 ">5,738</p>
                </div>
                <div class="flex items-center justify-center rounded-full w-14 h-14 bg-customOrangeDark">
                    <img class="w-8 h-8" src="{{ asset('assets/solar_feed-bold.svg') }}" alt="">
                </div>
            </div>
            <div class="flex items-center justify-center w-full h-full p-4 bg-white border-4 shadow-sm rounded-xl">
                <div>

                </div>
                <svg width="126" height="62" viewBox="0 0 126 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.274536" y="9.49414" width="122" height="52" rx="20"
                        transform="rotate(-4.16078 0.274536 9.49414)" fill="#6BBD45" />
                    <rect x="2" y="5" width="122" height="52" rx="20" fill="#029000" />
                    <path
                        d="M12.0141 28.2259C12.0141 27.2059 12.2441 26.2909 12.7041 25.4809C13.1641 24.6609 13.7891 24.0209 14.5791 23.5609C15.3791 23.1009 16.2641 22.8709 17.2341 22.8709C18.3741 22.8709 19.3691 23.1459 20.2191 23.6959C21.0691 24.2459 21.6891 25.0259 22.0791 26.0359H20.4441C20.1541 25.4059 19.7341 24.9209 19.1841 24.5809C18.6441 24.2409 17.9941 24.0709 17.2341 24.0709C16.5041 24.0709 15.8491 24.2409 15.2691 24.5809C14.6891 24.9209 14.2341 25.4059 13.9041 26.0359C13.5741 26.6559 13.4091 27.3859 13.4091 28.2259C13.4091 29.0559 13.5741 29.7859 13.9041 30.4159C14.2341 31.0359 14.6891 31.5159 15.2691 31.8559C15.8491 32.1959 16.5041 32.3659 17.2341 32.3659C17.9941 32.3659 18.6441 32.2009 19.1841 31.8709C19.7341 31.5309 20.1541 31.0459 20.4441 30.4159H22.0791C21.6891 31.4159 21.0691 32.1909 20.2191 32.7409C19.3691 33.2809 18.3741 33.5509 17.2341 33.5509C16.2641 33.5509 15.3791 33.3259 14.5791 32.8759C13.7891 32.4159 13.1641 31.7809 12.7041 30.9709C12.2441 30.1609 12.0141 29.2459 12.0141 28.2259ZM27.6961 33.5959C26.9261 33.5959 26.2261 33.4209 25.5961 33.0709C24.9761 32.7209 24.4861 32.2259 24.1261 31.5859C23.7761 30.9359 23.6011 30.1859 23.6011 29.3359C23.6011 28.4959 23.7811 27.7559 24.1411 27.1159C24.5111 26.4659 25.0111 25.9709 25.6411 25.6309C26.2711 25.2809 26.9761 25.1059 27.7561 25.1059C28.5361 25.1059 29.2411 25.2809 29.8711 25.6309C30.5011 25.9709 30.9961 26.4609 31.3561 27.1009C31.7261 27.7409 31.9111 28.4859 31.9111 29.3359C31.9111 30.1859 31.7211 30.9359 31.3411 31.5859C30.9711 32.2259 30.4661 32.7209 29.8261 33.0709C29.1861 33.4209 28.4761 33.5959 27.6961 33.5959ZM27.6961 32.3959C28.1861 32.3959 28.6461 32.2809 29.0761 32.0509C29.5061 31.8209 29.8511 31.4759 30.1111 31.0159C30.3811 30.5559 30.5161 29.9959 30.5161 29.3359C30.5161 28.6759 30.3861 28.1159 30.1261 27.6559C29.8661 27.1959 29.5261 26.8559 29.1061 26.6359C28.6861 26.4059 28.2311 26.2909 27.7411 26.2909C27.2411 26.2909 26.7811 26.4059 26.3611 26.6359C25.9511 26.8559 25.6211 27.1959 25.3711 27.6559C25.1211 28.1159 24.9961 28.6759 24.9961 29.3359C24.9961 30.0059 25.1161 30.5709 25.3561 31.0309C25.6061 31.4909 25.9361 31.8359 26.3461 32.0659C26.7561 32.2859 27.2061 32.3959 27.6961 32.3959ZM43.5908 25.0909C44.2308 25.0909 44.8008 25.2259 45.3008 25.4959C45.8008 25.7559 46.1958 26.1509 46.4858 26.6809C46.7758 27.2109 46.9208 27.8559 46.9208 28.6159V33.4609H45.5708V28.8109C45.5708 27.9909 45.3658 27.3659 44.9558 26.9359C44.5558 26.4959 44.0108 26.2759 43.3208 26.2759C42.6108 26.2759 42.0458 26.5059 41.6258 26.9659C41.2058 27.4159 40.9958 28.0709 40.9958 28.9309V33.4609H39.6458V28.8109C39.6458 27.9909 39.4408 27.3659 39.0308 26.9359C38.6308 26.4959 38.0858 26.2759 37.3958 26.2759C36.6858 26.2759 36.1208 26.5059 35.7008 26.9659C35.2808 27.4159 35.0708 28.0709 35.0708 28.9309V33.4609H33.7058V25.2409H35.0708V26.4259C35.3408 25.9959 35.7008 25.6659 36.1508 25.4359C36.6108 25.2059 37.1158 25.0909 37.6658 25.0909C38.3558 25.0909 38.9658 25.2459 39.4958 25.5559C40.0258 25.8659 40.4208 26.3209 40.6808 26.9209C40.9108 26.3409 41.2908 25.8909 41.8208 25.5709C42.3508 25.2509 42.9408 25.0909 43.5908 25.0909ZM49.8649 23.9059C49.6049 23.9059 49.3849 23.8159 49.2049 23.6359C49.0249 23.4559 48.9349 23.2359 48.9349 22.9759C48.9349 22.7159 49.0249 22.4959 49.2049 22.3159C49.3849 22.1359 49.6049 22.0459 49.8649 22.0459C50.1149 22.0459 50.3249 22.1359 50.4949 22.3159C50.6749 22.4959 50.7649 22.7159 50.7649 22.9759C50.7649 23.2359 50.6749 23.4559 50.4949 23.6359C50.3249 23.8159 50.1149 23.9059 49.8649 23.9059ZM50.5249 25.2409V33.4609H49.1599V25.2409H50.5249ZM56.8563 25.0909C57.8563 25.0909 58.6663 25.3959 59.2863 26.0059C59.9063 26.6059 60.2163 27.4759 60.2163 28.6159V33.4609H58.8663V28.8109C58.8663 27.9909 58.6613 27.3659 58.2513 26.9359C57.8413 26.4959 57.2813 26.2759 56.5713 26.2759C55.8513 26.2759 55.2763 26.5009 54.8463 26.9509C54.4263 27.4009 54.2163 28.0559 54.2163 28.9159V33.4609H52.8513V25.2409H54.2163V26.4109C54.4863 25.9909 54.8513 25.6659 55.3113 25.4359C55.7813 25.2059 56.2963 25.0909 56.8563 25.0909ZM65.836 25.1059C66.546 25.1059 67.166 25.2609 67.696 25.5709C68.236 25.8809 68.636 26.2709 68.896 26.7409V25.2409H70.276V33.6409C70.276 34.3909 70.116 35.0559 69.796 35.6359C69.476 36.2259 69.016 36.6859 68.416 37.0159C67.826 37.3459 67.136 37.5109 66.346 37.5109C65.266 37.5109 64.366 37.2559 63.646 36.7459C62.926 36.2359 62.501 35.5409 62.371 34.6609H63.721C63.871 35.1609 64.181 35.5609 64.651 35.8609C65.121 36.1709 65.686 36.3259 66.346 36.3259C67.096 36.3259 67.706 36.0909 68.176 35.6209C68.656 35.1509 68.896 34.4909 68.896 33.6409V31.9159C68.626 32.3959 68.226 32.7959 67.696 33.1159C67.166 33.4359 66.546 33.5959 65.836 33.5959C65.106 33.5959 64.441 33.4159 63.841 33.0559C63.251 32.6959 62.786 32.1909 62.446 31.5409C62.106 30.8909 61.936 30.1509 61.936 29.3209C61.936 28.4809 62.106 27.7459 62.446 27.1159C62.786 26.4759 63.251 25.9809 63.841 25.6309C64.441 25.2809 65.106 25.1059 65.836 25.1059ZM68.896 29.3359C68.896 28.7159 68.771 28.1759 68.521 27.7159C68.271 27.2559 67.931 26.9059 67.501 26.6659C67.081 26.4159 66.616 26.2909 66.106 26.2909C65.596 26.2909 65.131 26.4109 64.711 26.6509C64.291 26.8909 63.956 27.2409 63.706 27.7009C63.456 28.1609 63.331 28.7009 63.331 29.3209C63.331 29.9509 63.456 30.5009 63.706 30.9709C63.956 31.4309 64.291 31.7859 64.711 32.0359C65.131 32.2759 65.596 32.3959 66.106 32.3959C66.616 32.3959 67.081 32.2759 67.501 32.0359C67.931 31.7859 68.271 31.4309 68.521 30.9709C68.771 30.5009 68.896 29.9559 68.896 29.3359ZM79.8968 33.5659C79.2068 33.5659 78.5868 33.4459 78.0368 33.2059C77.4968 32.9559 77.0718 32.6159 76.7618 32.1859C76.4518 31.7459 76.2918 31.2409 76.2818 30.6709H77.7368C77.7868 31.1609 77.9868 31.5759 78.3368 31.9159C78.6968 32.2459 79.2168 32.4109 79.8968 32.4109C80.5468 32.4109 81.0568 32.2509 81.4268 31.9309C81.8068 31.6009 81.9968 31.1809 81.9968 30.6709C81.9968 30.2709 81.8868 29.9459 81.6668 29.6959C81.4468 29.4459 81.1718 29.2559 80.8418 29.1259C80.5118 28.9959 80.0668 28.8559 79.5068 28.7059C78.8168 28.5259 78.2618 28.3459 77.8418 28.1659C77.4318 27.9859 77.0768 27.7059 76.7768 27.3259C76.4868 26.9359 76.3418 26.4159 76.3418 25.7659C76.3418 25.1959 76.4868 24.6909 76.7768 24.2509C77.0668 23.8109 77.4718 23.4709 77.9918 23.2309C78.5218 22.9909 79.1268 22.8709 79.8068 22.8709C80.7868 22.8709 81.5868 23.1159 82.2068 23.6059C82.8368 24.0959 83.1918 24.7459 83.2718 25.5559H81.7718C81.7218 25.1559 81.5118 24.8059 81.1418 24.5059C80.7718 24.1959 80.2818 24.0409 79.6718 24.0409C79.1018 24.0409 78.6368 24.1909 78.2768 24.4909C77.9168 24.7809 77.7368 25.1909 77.7368 25.7209C77.7368 26.1009 77.8418 26.4109 78.0518 26.6509C78.2718 26.8909 78.5368 27.0759 78.8468 27.2059C79.1668 27.3259 79.6118 27.4659 80.1818 27.6259C80.8718 27.8159 81.4268 28.0059 81.8468 28.1959C82.2668 28.3759 82.6268 28.6609 82.9268 29.0509C83.2268 29.4309 83.3768 29.9509 83.3768 30.6109C83.3768 31.1209 83.2418 31.6009 82.9718 32.0509C82.7018 32.5009 82.3018 32.8659 81.7718 33.1459C81.2418 33.4259 80.6168 33.5659 79.8968 33.5659ZM88.9705 33.5959C88.2005 33.5959 87.5005 33.4209 86.8705 33.0709C86.2505 32.7209 85.7605 32.2259 85.4005 31.5859C85.0505 30.9359 84.8755 30.1859 84.8755 29.3359C84.8755 28.4959 85.0555 27.7559 85.4155 27.1159C85.7855 26.4659 86.2855 25.9709 86.9155 25.6309C87.5455 25.2809 88.2505 25.1059 89.0305 25.1059C89.8105 25.1059 90.5155 25.2809 91.1455 25.6309C91.7755 25.9709 92.2705 26.4609 92.6305 27.1009C93.0005 27.7409 93.1855 28.4859 93.1855 29.3359C93.1855 30.1859 92.9955 30.9359 92.6155 31.5859C92.2455 32.2259 91.7405 32.7209 91.1005 33.0709C90.4605 33.4209 89.7505 33.5959 88.9705 33.5959ZM88.9705 32.3959C89.4605 32.3959 89.9205 32.2809 90.3505 32.0509C90.7805 31.8209 91.1255 31.4759 91.3855 31.0159C91.6555 30.5559 91.7905 29.9959 91.7905 29.3359C91.7905 28.6759 91.6605 28.1159 91.4005 27.6559C91.1405 27.1959 90.8005 26.8559 90.3805 26.6359C89.9605 26.4059 89.5055 26.2909 89.0155 26.2909C88.5155 26.2909 88.0555 26.4059 87.6355 26.6359C87.2255 26.8559 86.8955 27.1959 86.6455 27.6559C86.3955 28.1159 86.2705 28.6759 86.2705 29.3359C86.2705 30.0059 86.3905 30.5709 86.6305 31.0309C86.8805 31.4909 87.2105 31.8359 87.6205 32.0659C88.0305 32.2859 88.4805 32.3959 88.9705 32.3959ZM98.5652 33.5959C97.7952 33.5959 97.0952 33.4209 96.4652 33.0709C95.8452 32.7209 95.3552 32.2259 94.9952 31.5859C94.6452 30.9359 94.4702 30.1859 94.4702 29.3359C94.4702 28.4959 94.6502 27.7559 95.0102 27.1159C95.3802 26.4659 95.8802 25.9709 96.5102 25.6309C97.1402 25.2809 97.8452 25.1059 98.6252 25.1059C99.4052 25.1059 100.11 25.2809 100.74 25.6309C101.37 25.9709 101.865 26.4609 102.225 27.1009C102.595 27.7409 102.78 28.4859 102.78 29.3359C102.78 30.1859 102.59 30.9359 102.21 31.5859C101.84 32.2259 101.335 32.7209 100.695 33.0709C100.055 33.4209 99.3452 33.5959 98.5652 33.5959ZM98.5652 32.3959C99.0552 32.3959 99.5152 32.2809 99.9452 32.0509C100.375 31.8209 100.72 31.4759 100.98 31.0159C101.25 30.5559 101.385 29.9959 101.385 29.3359C101.385 28.6759 101.255 28.1159 100.995 27.6559C100.735 27.1959 100.395 26.8559 99.9752 26.6359C99.5552 26.4059 99.1002 26.2909 98.6102 26.2909C98.1102 26.2909 97.6502 26.4059 97.2302 26.6359C96.8202 26.8559 96.4902 27.1959 96.2402 27.6559C95.9902 28.1159 95.8652 28.6759 95.8652 29.3359C95.8652 30.0059 95.9852 30.5709 96.2252 31.0309C96.4752 31.4909 96.8052 31.8359 97.2152 32.0659C97.6252 32.2859 98.0752 32.3959 98.5652 32.3959ZM108.58 25.0909C109.58 25.0909 110.39 25.3959 111.01 26.0059C111.63 26.6059 111.94 27.4759 111.94 28.6159V33.4609H110.59V28.8109C110.59 27.9909 110.385 27.3659 109.975 26.9359C109.565 26.4959 109.005 26.2759 108.295 26.2759C107.575 26.2759 107 26.5009 106.57 26.9509C106.15 27.4009 105.94 28.0559 105.94 28.9159V33.4609H104.575V25.2409H105.94V26.4109C106.21 25.9909 106.575 25.6659 107.035 25.4359C107.505 25.2059 108.02 25.0909 108.58 25.0909Z"
                        fill="white" />
                </svg>
            </div>
        </div>

        <div class="mx-auto my-3 ">
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
                <!-- Blogs Section -->
                <div class="bg-white border-2 shadow-lg rounded-xl gradient-border ">
                    <div class="flex items-center justify-between p-3 mb-4 rounded-t-[10px] bg-gradient-border">
                        <h1 class="text-lg font-bold text-white">Tasbih</h1>
                        {{-- <a href="/media/blogs">
                            <button
                                class="px-3 py-2 text-sm font-medium transition-colors bg-white rounded-full shadow-md text-customOrangeDark ">
                                Add New
                            </button>
                        </a> --}}
                    </div>
                    <div
                        class="flex items-center justify-between px-3 py-4 m-2 bg-white border border-gray-300 rounded-lg shadow-lg">
                        <span class="text-lg font-semibold text-black mb-">SubhanAllah</span>
                        <span class="mt-5 text-xl font-semibold text-black" dir="rtl">سبحان الله</span>
                    </div>
                    <div
                        class="flex items-center justify-between px-3 py-4 m-2 bg-white border border-gray-300 rounded-lg shadow-xl">
                        <span class="text-lg font-semibold text-black mb-">SubhanAllah</span>
                        <span class="mt-5 text-xl font-semibold text-black" dir="rtl">سبحان الله</span>
                    </div>
                    <div
                        class="flex items-center justify-between px-3 py-4 m-2 bg-white border border-gray-300 rounded-lg ">
                        <span class="text-lg font-semibold text-black mb-">SubhanAllah</span>
                        <span class="mt-5 text-xl font-semibold text-black" dir="rtl">سبحان الله</span>
                    </div>
                </div>
                <!-- Diseases Section -->
                <div class="bg-white border-2 shadow-lg rounded-xl gradient-border ">
                    <div class="flex items-center justify-between p-3 mb-4 rounded-t-[10px] bg-gradient-border">
                        <h1 class="text-lg font-bold text-white">Hadith</h1>
                        {{-- <a href="/media/diseases">
                            <button
                                class="px-3 py-2 text-sm font-medium transition-colors bg-white rounded-full shadow-md text-customOrangeDark ">
                                Add New
                            </button>
                        </a> --}}
                    </div>
                    <div
                        class="flex items-center justify-between px-3 py-4 m-2 bg-white border border-gray-300 rounded-lg shadow-lg">
                        <span class="text-lg font-semibold text-black mb-">SubhanAllah</span>
                        <span class="mt-5 text-xl font-semibold text-black" dir="rtl">سبحان الله</span>
                    </div>
                    <div
                        class="flex items-center justify-between px-3 py-4 m-2 bg-white border border-gray-300 rounded-lg shadow-xl">
                        <span class="text-lg font-semibold text-black mb-">SubhanAllah</span>
                        <span class="mt-5 text-xl font-semibold text-black" dir="rtl">سبحان الله</span>
                    </div>
                    <div
                        class="flex items-center justify-between px-3 py-4 m-2 bg-white border border-gray-300 rounded-lg ">
                        <span class="text-lg font-semibold text-black mb-">SubhanAllah</span>
                        <span class="mt-5 text-xl font-semibold text-black" dir="rtl">سبحان الله</span>
                    </div>
                </div>

                <!-- Consultancy Videos Section -->
                <div class="bg-white border-2 shadow-lg rounded-xl gradient-border ">
                    <div class="flex items-center justify-between p-3 mb-4 rounded-t-[10px] bg-gradient-border">
                        <h1 class="text-lg font-bold text-white">Doa</h1>
                        {{-- <a href="/media/consultancy">
                            <button
                                class="px-3 py-2 text-sm font-medium transition-colors bg-white rounded-full shadow-md text-customOrangeDark ">
                                Add New
                            </button>
                        </a> --}}
                    </div>
                    <div
                        class="flex items-center justify-between px-3 py-4 m-2 bg-white border border-gray-300 rounded-lg shadow-lg">
                        <span class="text-lg font-semibold text-black mb-">SubhanAllah</span>
                        <span class="mt-5 text-xl font-semibold text-black" dir="rtl">سبحان الله</span>
                    </div>
                    <div
                        class="flex items-center justify-between px-3 py-4 m-2 bg-white border border-gray-300 rounded-lg shadow-xl">
                        <span class="text-lg font-semibold text-black mb-">SubhanAllah</span>
                        <span class="mt-5 text-xl font-semibold text-black" dir="rtl">سبحان الله</span>
                    </div>
                    <div
                        class="flex items-center justify-between px-3 py-4 m-2 bg-white border border-gray-300 rounded-lg ">
                        <span class="text-lg font-semibold text-black mb-">SubhanAllah</span>
                        <span class="mt-5 text-xl font-semibold text-black" dir="rtl">سبحان الله</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
    {{-- <div class="container p-4 mx-auto">
        <div class="grid-cols-1 gap-4 gird md:grid-cols-2">
            <div class="flex p-4 bg-white rounded-lg shadow-md">
                <img class="rounded-lg" src="{{ asset('assets/Rectangle 403.jpg') }}" alt="">
                <h2 class="mt-4 font-bold text-md">
                    Lorem ipsum dolor sit amet consectetur.
                </h2>
                <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>


            </div>

        </div>
    </div> --}}
    </div>
@endsection
