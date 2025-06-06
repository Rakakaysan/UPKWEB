@extends('public.layouts.app')

@section('content')
<div class="min-h-screen flex">
  <!-- KIRI -->
  <div class="w-1/2 bg-gradient-to-b from-[#eac3b9] to-[#e7b4a5] flex flex-col justify-center items-center text-left px-20">
    <h1 class="text-[56px] font-semibold text-[#5c1e1e] leading-[1.2]">Hello,<br>Welcome!</h1>
    <p class="text-[#5c1e1e] mt-4 text-[14px] w-4/5">
      Hello, welcome to SIMBA. Simba adalah singkatan dari ‘Sistem Informasi Materi Candi Berbasis Aplikasi’
    </p>
  </div>

  <!-- KANAN -->
  <div class="w-1/2 bg-white flex items-center justify-center">
    <form action="#" method="POST" class="w-full max-w-sm space-y-6 px-6">
      @csrf
      <h2 class="text-center text-[20px] font-medium text-[#2f2f2f]">Login</h2>

      <input
        type="text"
        name="username"
        placeholder="username"
        class="w-full px-5 py-3 rounded-xl bg-[#dedede] placeholder:text-[#5c5c5c] text-sm shadow-md focus:outline-none"
      />

      <input
        type="password"
        name="password"
        placeholder="password"
        class="w-full px-5 py-3 rounded-xl bg-[#dedede] placeholder:text-[#5c5c5c] text-sm shadow-md focus:outline-none"
      />

      <div class="flex justify-between text-xs text-[#8f8f8f]">
        <a href="#" class="hover:underline">Forgot Password</a>
        <a href="#" class="hover:underline">Create Account or Reset Password</a>
      </div>

      <button type="submit" class="w-full bg-black text-white py-2.5 rounded-xl text-sm hover:opacity-90 transition">
        Login
      </button>

      <button type="button" class="w-full flex items-center justify-center gap-3 bg-[#d5d5d5] text-sm text-black py-2.5 rounded-xl shadow hover:bg-[#cfcfcf] transition">
        <img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" class="w-5 h-5" alt="Google logo" />
        Lanjutkan dengan Google
      </button>
    </form>
  </div>
</div>
@endsection
