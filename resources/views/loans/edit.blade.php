@extends('_layouts.main')

@section('content')
<main>
    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10 flex justify-center">
        <!-- Form Container Start -->
        <div class="w-full max-w-lg bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
            <!-- Breadcrumb Start -->
            <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100">
                    Form Data
                </h2>
            </div>
            <!-- Breadcrumb End -->

            @if ($errors->any())
                <div class="flex w-full border-l-6 border-red-600 bg-red-100 dark:bg-red-800 dark:bg-opacity-30 p-4 mb-4 rounded-lg">
                    <div class="mr-3">
                        <svg class="w-6 h-6 text-red-600 dark:text-red-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </div>
                    <div>
                        <h5 class="font-bold text-red-600 dark:text-red-200">
                            Something has gone wrong!
                        </h5>
                        <ul class="text-red-600 dark:text-red-200">
                            @foreach ($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            <!-- Form Layout Section Start -->
            <div class="flex flex-col">
                <div class="rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 shadow-md p-6">
                    <div class="border-b border-gray-200 dark:border-gray-700 pb-4 mb-6">
                        <h3 class="font-medium text-lg text-gray-900 dark:text-gray-100">
                            Loans Edit Form
                        </h3>
                    </div>
                    <form action="/loans/{{ $loan->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2"> 
                                Car <span class="text-red-500">*</span> 
                            </label>
                            <select
                                id="car_id"
                                name="car_id"
                                class="block w-full rounded border border-gray-300 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 px-4 py-2 focus:border-blue-500 focus:ring focus:ring-blue-200 dark:border-gray-700 dark:focus:border-blue-500"
                            >
                                @foreach ($cars as $car)
                                    <option value="{{ $car->id }}" {{ $loan->car_id == $car->id ? 'selected' : '' }}>
                                        {{ $car->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2"> 
                                Akun <span class="text-red-500">*</span> 
                            </label>
                            <select
                                id="user_id"
                                name="user_id"
                                class="block w-full rounded border border-gray-300 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 px-4 py-2 focus:border-blue-500 focus:ring focus:ring-blue-200 dark:border-gray-700 dark:focus:border-blue-500"
                            >
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}" {{ $loan->user_id == $user->id ? 'selected' : '' }}>
                                        {{ $user->fullname }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2"> 
                                Loan Date <span class="text-red-500">*</span> 
                            </label>
                            <input
                                id="loan_date"
                                name="loan_date"
                                type="date"
                                value="{{ $loan->loan_date }}"
                                class="block w-full rounded border border-gray-300 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 px-4 py-2 focus:border-blue-500 focus:ring focus:ring-blue-200 dark:border-gray-700 dark:focus:border-blue-500"
                            />
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2"> 
                                Return Date <span class="text-red-500">*</span> 
                            </label>
                            <input
                                id="return_date"
                                name="return_date"
                                type="date"
                                value="{{ $loan->return_date }}"
                                class="block w-full rounded border border-gray-300 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 px-4 py-2 focus:border-blue-500 focus:ring focus:ring-blue-200 dark:border-gray-700 dark:focus:border-blue-500"
                            />
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2"> 
                                Total Cost <span class="text-red-500">*</span> 
                            </label>
                            <input
                                id="total_cost"
                                name="total_cost"
                                type="number"
                                value="{{ $loan->total_cost }}"
                                class="block w-full rounded border border-gray-300 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 px-4 py-2 focus:border-blue-500 focus:ring focus:ring-blue-200 dark:border-gray-700 dark:focus:border-blue-500"
                            />
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2"> 
                                Status 
                            </label>
                            <select
                                id="status"
                                name="status"
                                class="block w-full rounded border border-gray-300 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 px-4 py-2 focus:border-blue-500 focus:ring focus:ring-blue-200 dark:border-gray-700 dark:focus:border-blue-500"
                            >
                                <option value="DP" {{ $loan->status == 'DP' ? 'selected' : '' }}>DP</option>
                                <option value="Lunas" {{ $loan->status == 'Lunas' ? 'selected' : '' }}>Lunas</option>
                            </select>
                        </div>
                        <button type="submit" class="w-full rounded bg-blue-500 text-white py-2 font-medium hover:bg-blue-600 focus:outline-none focus:bg-blue-700">
                            Save Data
                        </button>
                    </form>
                </div>
            </div>
            <!-- Form Layout Section End -->
        </div>
        <!-- Form Container End -->
    </div>
</main>
@endsection
