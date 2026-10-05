<!doctype html>
<html lang="id">
<head>
  @include('partials.head')
  <title>@yield('title', config('school.name'))</title>
</head>
<body class="font-sans bg-cream text-slate-800 min-h-screen flex flex-col">
@php
  $nav = [
    'home'           => ['Beranda', 'home'],
    'about'          => ['Tentang', 'about'],
    'articles.index' => ['Artikel', 'articles.*'],
    'gallery.index'  => ['Galeri',  'gallery.*'],
    'products.index' => ['Produk',  'products.*'],
    'contact'        => ['Kontak',  'contact'],
  ];
@endphp

<header class="sticky top-0 z-30 bg-cream/95 backdrop-blur border-b border-slate-200">
 <div class="max-w-6xl mx-auto px-4 h-16 flex items-center justify-between">
  <a href="{{ route('home') }}" class="font-serif font-bold text-xl text-ink">{{ config('school.name') }}</a>
  <nav class="hidden md:flex gap-6 text-sm font-medium">
   @foreach($nav as $r => [$label, $pat])
    <a href="{{ route($r) }}" class="py-5 border-b-2 {{ request()->routeIs($pat) ? 'border-brand text-brand' : 'border-transparent text-ink hover:text-brand' }}">{{ $label }}</a>
   @endforeach
  </nav>
  <a href="{{ route('login') }}" class="hidden md:block bg-ink text-white text-sm px-4 py-2 rounded-md">Login Admin</a>
  <button onclick="document.getElementById('m').classList.toggle('hidden')" class="md:hidden text-ink" aria-label="Menu">☰</button>
 </div>
 <div id="m" class="hidden md:hidden border-t bg-cream px-4 py-2 text-sm">
  @foreach($nav as $r => [$label]) <a class="block py-2 text-ink" href="{{ route($r) }}">{{ $label }}</a> @endforeach
  <a class="block py-2 font-semibold text-brand" href="{{ route('login') }}">Login Admin</a>
 </div>
</header>

<main class="flex-1">
  @yield('content')
</main>

{{-- FOOTER --}}
<footer> @include('partials.footer')</footer>

</body>
</html>