@extends('_layouts.main')

@section('content')
<main>
    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10 flex justify-center">
        <!-- Form Container Start -->
        <div class="w-full max-w-lg bg-white dark:bg-boxdark rounded-lg shadow-lg p-6">
            <!-- Breadcrumb Start -->
            <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-2xl font-bold text-black dark:text-white">
                    Form Data
                </h2>
            </div>
            <!-- Breadcrumb End -->

            @if ($errors->any())
                <div
                    class="flex w-full border-l-6 border-[#F87171] bg-[#F87171] bg-opacity-[15%] my-4 px-7 py-6 shadow-md dark:bg-[#1B1B24] dark:bg-opacity-30 rounded-lg"
                >
                    <div
                        class="mr-5 flex h-9 w-full max-w-[36px] items-center justify-center rounded-lg bg-[#F87171]"
                    >
                        <svg
                            width="13"
                            height="13"
                            viewBox="0 0 13 13"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                            d="M6.4917 7.65579L11.106 12.2645C11.2545 12.4128 11.4715 12.5 11.6738 12.5C11.8762 12.5 12.0931 12.4128 12.2416 12.2645C12.5621 11.9445 12.5623 11.4317 12.2423 11.1114C12.2422 11.1113 12.2422 11.1113 12.2422 11.1113C12.242 11.1111 12.2418 11.1109 12.2416 11.1107L7.64539 6.50351L12.2589 1.91221L12.2595 1.91158C12.5802 1.59132 12.5802 1.07805 12.2595 0.757793C11.9393 0.437994 11.4268 0.437869 11.1064 0.757418C11.1063 0.757543 11.1062 0.757668 11.106 0.757793L6.49234 5.34931L1.89459 0.740581L1.89396 0.739942C1.57364 0.420019 1.0608 0.420019 0.740487 0.739944C0.42005 1.05999 0.419837 1.57279 0.73985 1.89309L6.4917 7.65579ZM6.4917 7.65579L1.89459 12.2639L1.89395 12.2645C1.74546 12.4128 1.52854 12.5 1.32616 12.5C1.12377 12.5 0.906853 12.4128 0.758361 12.2645L1.1117 11.9108L0.758358 12.2645C0.437984 11.9445 0.437708 11.4319 0.757539 11.1116C0.757812 11.1113 0.758086 11.111 0.75836 11.1107L5.33864 6.50287L0.740487 1.89373L6.4917 7.65579Z"
                            fill="#ffffff"
                            stroke="#ffffff"
                            ></path>
                        </svg>
                    </div>
                    <div class="w-full">
                        <h5 class="mb-3 font-bold text-[#B45454]">
                            Something has gone wrong!
                        </h5>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="leading-relaxed text-[#CD5D5D]">
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
        <!-- ====== Form Layout Section Start -->
            <div class="flex flex-col">
                <!-- Contact Form -->
                <div class="rounded-sm bg-dark shadow-default dark:bg-boxdark">
                    <div class="px-6.5 py-4 bg-dark-500 dark:bg-stroke">
                        <h3 class="font-medium text-black dark:text-white">
                            Akun Form
                        </h3>
                    </div>
                </div>
                
                
                    <form action="/users" method="POST">
                        @csrf
                        <div class="p-6.5 space-y-4">
                            <div>
                                <label for="fullname" class="block text-sm font-medium text-black dark:text-white">Fullname <span class="text-meta-1">*</span></label>
                                <input
                                    id="fullname"
                                    name="fullname"
                                    type="text"
                                    placeholder="Enter your fullname"
                                    class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 text-black outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                                />
                            </div>

                            <div>
                                <label for="username" class="block text-sm font-medium text-black dark:text-white">Username <span class="text-meta-1">*</span></label>
                                <input
                                    id="username"
                                    name="username"
                                    type="text"
                                    placeholder="Enter your username"
                                    class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 text-black outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                                />
                            </div>

                            <div>
                                <label for="password" class="block text-sm font-medium text-black dark:text-white">Password <span class="text-meta-1">*</span></label>
                                <input
                                    id="password"
                                    name="password"
                                    type="text"
                                    placeholder="Enter your password"
                                    class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 text-black outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                                />
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-black dark:text-white">Email <span class="text-meta-1">*</span></label>
                                <input
                                    id="email"
                                    name="email"
                                    type="email"
                                    placeholder="Enter your email"
                                    class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 text-black outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                                />
                            </div>

                            <button type="submit" class="flex w-full justify-center rounded bg-primary p-3 font-medium text-white hover:bg-opacity-90 transition">
                                Save Data
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- ====== Form Layout Section End -->
    </div>
</main>
@endsection
