@extends('layouts.app')

@section('content')

<div class="container my-5">
    <div class="p-5 text-center bg-body-tertiary rounded-3">
      {{-- <svg class="bi mt-4 mb-3" style="color: var(--bs-indigo);" width="100" height="100"><use xlink:href="#bootstrap"/></svg> --}}
        {{-- if you want to add icon consider line above --}}
      <h1 class="text-body-emphasis">Welcome to Laravel</h1>
      <p class="col-lg-8 mx-auto fs-5 text-muted">
        This is the laravel app "from scratch series" 
      </p>
      <div class="d-inline-flex gap-2 mb-5">
        @guest
          @if (Route::has('login'))
            <li class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
          @endif
          @if (Route::has('register'))
            <li class="btn btn-outline-secondary btn-lg px-4 rounded-pill">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
          @endif
        @endguest
      </div>
    </div>
  </div>
@endsection