@extends('_layouts.main')

@section('content')
                    <!-- ===== Main Content Start ===== -->
                    <main>
                    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-4 2xl:gap-7.5">
                            <!-- Card Item Start -->
                            <div class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
                                <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4">
                                    <svg class="fill-primary dark:fill-white" width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11 15.1156C4.19376 15.1156 0.825012 8.61876 0.687512 8.34376C0.584387 8.13751 0.584387 7.86251 0.687512 7.65626C0.825012 7.38126 4.19376 0.918762 11 0.918762C17.8063 0.918762 21.175 7.38126 21.3125 7.65626C21.4156 7.86251 21.4156 8.13751 21.3125 8.34376C21.175 8.61876 17.8063 15.1156 11 15.1156ZM2.26876 8.00001C3.02501 9.27189 5.98126 13.5688 11 13.5688C16.0188 13.5688 18.975 9.27189 19.7313 8.00001C18.975 6.72814 16.0188 2.43126 11 2.43126C5.98126 2.43126 3.02501 6.72814 2.26876 8.00001Z"
                                            fill=""
                                        />
                                        <path
                                            d="M11 10.9219C9.38438 10.9219 8.07812 9.61562 8.07812 8C8.07812 6.38438 9.38438 5.07812 11 5.07812C12.6156 5.07812 13.9219 6.38438 13.9219 8C13.9219 9.61562 12.6156 10.9219 11 10.9219ZM11 6.625C10.2437 6.625 9.625 7.24375 9.625 8C9.625 8.75625 10.2437 9.375 11 9.375C11.7563 9.375 12.375 8.75625 12.375 8C12.375 7.24375 11.7563 6.625 11 6.625Z"
                                            fill=""
                                        />
                                    </svg>
                                </div>

                                <div class="mt-4 flex items-end justify-between">
                                    <div>
                                        <h4 class="text-title-md font-bold text-black dark:text-white">
                                            100
                                        </h4>
                                        <span class="text-sm font-medium">Total Pengunjung</span>
                                    </div>

                                    <span class="flex items-center gap-1 text-sm font-medium text-meta-3">
                                        0.43%
                                        <svg class="fill-meta-3" width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.35716 2.47737L0.908974 5.82987L5.0443e-07 4.94612L5 0.0848689L10 4.94612L9.09103 5.82987L5.64284 2.47737L5.64284 10.0849L4.35716 10.0849L4.35716 2.47737Z" fill="" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <!-- Card Item End -->

                            <!-- Card Item Start -->
                            <div class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
                                <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4">
                                    <svg class="fill-primary dark:fill-white" width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.7531 16.4312C10.3781 16.4312 9.27808 17.5312 9.27808 18.9062C9.27808 20.2812 10.3781 21.3812 11.7531 21.3812C13.1281 21.3812 14.2281 20.2812 14.2281 18.9062C14.2281 17.5656 13.0937 16.4312 11.7531 16.4312ZM11.7531 19.8687C11.2375 19.8687 10.825 19.4562 10.825 18.9406C10.825 18.425 11.2375 18.0125 11.7531 18.0125C12.2687 18.0125 12.6812 18.425 12.6812 18.9406C12.6812 19.4219 12.2343 19.8687 11.7531 19.8687Z"
                                            fill=""
                                        />
                                        <path
                                            d="M5.22183 16.4312C3.84683 16.4312 2.74683 17.5312 2.74683 18.9062C2.74683 20.2812 3.84683 21.3812 5.22183 21.3812C6.59683 21.3812 7.69683 20.2812 7.69683 18.9062C7.69683 17.5656 6.56245 16.4312 5.22183 16.4312ZM5.22183 19.8687C4.7062 19.8687 4.2937 19.4562 4.2937 18.9406C4.2937 18.425 4.7062 18.0125 5.22183 18.0125C5.73745 18.0125 6.14995 18.425 6.14995 18.9406C6.14995 19.4219 5.73745 19.8687 5.22183 19.8687Z"
                                            fill=""
                                        />
                                        <path
                                            d="M19.0062 0.618744H17.15C16.325 0.618744 15.6031 1.23749 15.5 2.06249L14.95 6.01562H1.37185C1.0281 6.01562 0.684353 6.18749 0.443728 6.46249C0.237478 6.73749 0.134353 7.11562 0.237478 7.45937C0.237478 7.49374 0.237478 7.49374 0.237478 7.52812L2.36873 13.9562C2.50623 14.4375 2.9531 14.7812 3.46873 14.7812H12.9562C14.2281 14.7812 15.3281 13.8187 15.5 12.5469L16.9437 2.26874C16.9437 2.19999 17.0125 2.16562 17.0812 2.16562H18.9375C19.35 2.16562 19.7281 1.82187 19.7281 1.37499C19.7281 0.928119 19.4187 0.618744 19.0062 0.618744ZM14.0219 12.3062C13.9531 12.8219 13.5062 13.2 12.9906 13.2H3.7781L1.92185 7.56249H14.7094L14.0219 12.3062Z"
                                            fill=""
                                        />
                                    </svg>
                                </div>

                                <div class="mt-4 flex items-end justify-between">
                                    <div>
                                        <h4 class="text-title-md font-bold text-black dark:text-white">
                                            $3.087,47k
                                        </h4>
                                        <span class="text-sm font-medium">Total Profit</span>
                                    </div>

                                    <span class="flex items-center gap-1 text-sm font-medium text-meta-3">
                                        4.35%
                                        <svg class="fill-meta-3" width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.35716 2.47737L0.908974 5.82987L5.0443e-07 4.94612L5 0.0848689L10 4.94612L9.09103 5.82987L5.64284 2.47737L5.64284 10.0849L4.35716 10.0849L4.35716 2.47737Z" fill="" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <!-- Card Item End -->

                            <!-- Card Item Start -->
                            <div class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
                                <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4">
                                    <i class='bx bxs-car' style="color: white; font-size: 22px;"></i>
                                </div>

                                <div class="mt-4 flex items-end justify-between">
                                    <div>
                                        <h4 class="text-title-md font-bold text-black dark:text-white">
                                            5
                                        </h4>
                                        <span class="text-sm font-medium">Total Car</span>
                                    </div>

                                    <span class="flex items-center gap-1 text-sm font-medium text-meta-3">
                                        2.59%
                                        <svg class="fill-meta-3" width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.35716 2.47737L0.908974 5.82987L5.0443e-07 4.94612L5 0.0848689L10 4.94612L9.09103 5.82987L5.64284 2.47737L5.64284 10.0849L4.35716 10.0849L4.35716 2.47737Z" fill="" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <!-- Card Item End -->

                            <!-- Card Item Start -->
                            <div class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
                                <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4">
                                    <i class='bx bxs-user-circle' style="color: white; font-size: 22px;" ></i>
                                </div>

                                <div class="mt-4 flex items-end justify-between">
                                    <div>
                                        <h4 class="text-title-md font-bold text-black dark:text-white">
                                            5
                                        </h4>
                                        <span class="text-sm font-medium">Total Users</span>
                                    </div>

                                    <span class="flex items-center gap-1 text-sm font-medium text-meta-5">
                                        0.95%
                                        <svg class="fill-meta-5" width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.64284 7.69237L9.09102 4.33987L10 5.22362L5 10.0849L-8.98488e-07 5.22362L0.908973 4.33987L4.35716 7.69237L4.35716 0.0848701L5.64284 0.0848704L5.64284 7.69237Z" fill="" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <!-- Card Item End -->
                        </div>
                    </div>
                </main>
                <div class="container mx-auto mt-5" style="padding: 23px">
                    <table class="min-w-full bg-gray-800 text-white">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">ID</th>
                                <th class="px-4 py-2">Car</th>
                                <th class="px-4 py-2">Username</th>
                                <th class="px-4 py-2">Loan Date</th>
                                <th class="px-4 py-2">Return Date</th>
                                <th class="px-4 py-2">Total Cost</th>
                                <th class="px-4 py-2">Status</th>
                            </tr>
                        </thead>
                        <tbody class="bg-gray-700">
                            <tr class="bg-gray-800 border-b border-gray-600">
                                <th class="px-4 py-2 text-center">1</th>
                                <td class="px-4 py-2 text-center">HR-V</td>
                                <td class="px-4 py-2 text-center">Andi</td>
                                <td class="px-4 py-2 text-center">10-10-2023</td>
                                <td class="px-4 py-2 text-center">11-10-2023</td>
                                <td class="px-4 py-2 text-center">1.000.000</td>
                                <td class="px-4 py-2 text-center">LUNAS</td>
                            </tr>
                            <tr class="bg-gray-800 border-b border-gray-600">
                                <th class="px-4 py-2 text-center">2</th>
                                <td class="px-4 py-2 text-center">Fortuner</td>
                                <td class="px-4 py-2 text-center">Icha</td>
                                <td class="px-4 py-2 text-center">01-04-2024</td>
                                <td class="px-4 py-2 text-center">03-04-2024</td>
                                <td class="px-4 py-2 text-center">2.800.000</td>
                                <td class="px-4 py-2 text-center">DP</td>
                            </tr>
                            <tr class="bg-gray-800 border-b border-gray-600">
                                <th class="px-4 py-2 text-center">3</th>
                                <td class="px-4 py-2 text-center">Brio</td>
                                <td class="px-4 py-2 text-center">Udin</td>
                                <td class="px-4 py-2 text-center">22-05-2024</td>
                                <td class="px-4 py-2 text-center">23-05-2024</td>
                                <td class="px-4 py-2 text-center">600.000</td>
                                <td class="px-4 py-2 text-center">LUNAS</td>
                            </tr>
                            <tr class="bg-gray-800 border-b border-gray-600">
                                <th class="px-4 py-2 text-center">4</th>
                                <td class="px-4 py-2 text-center">Pajero</td>
                                <td class="px-4 py-2 text-center">Rachel</td>
                                <td class="px-4 py-2 text-center">28-06-2024</td>
                                <td class="px-4 py-2 text-center">30-06-2024</td>
                                <td class="px-4 py-2 text-center">1.600.000</td>
                                <td class="px-4 py-2 text-center">DP</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                

                

@endsection

