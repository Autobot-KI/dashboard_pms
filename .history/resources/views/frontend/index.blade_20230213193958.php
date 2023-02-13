@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')

<section class="bg-gray-100 mb-20">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
            <div class="w-full md:w-4/12 px-4 ml-auto mr-auto">
                <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0">
                    <div class="flex-auto p-5 lg:p-10">
                        <h4 class="text-2xl font-semibold">Sign in</h4>
                        <form class="mt-10" method="POST" action="">
                            @csrf
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="email">Email</label>
                                <input type="email" name="email" id="email" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150" placeholder="Email" value="{{ old('email') }}" required autofocus />
                            </div>
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="password">Password</label>
                                <input type="password" name="password" id="password" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150" placeholder="Password" required />
                            </div>
                            <div>
                                <label class="inline-flex items-center cursor-pointer">
                                    <input id="remember" type="checkbox" class="form-checkbox text-gray-800 ml-1 w-5 h-5 ease-linear transition-all duration-150" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <span class="ml-2 text-sm font-semibold text-gray-700">Remember me</span>
                                </label>
                            </div>
                            <div class="text-center mt-6">
                                <button class="bg-gray-800 text-white active:bg-gray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline
</section>


@endsection