<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', config('school.name')) — {{ config('school.name') }}</title>
  @include('partials.assets')
</head>
<body class="bg-cream font-sans text-ink antialiased">
@php
  $menu = ['home' => 'Beranda', 'about' => 'Tentang', 'articles.index' => 'Artikel', 'gallery.index' => 'Galeri', 'products.index' => 'Produk', 'contact' => 'Kontak'];
  $pattern = ['home' => 'home', 'about' => 'about', 'articles.index' => 'articles.*', 'gallery.index' => 'gallery.*', 'products.index' => 'products.*', 'contact' => 'contact'];
@endphp
<div class="bg-ink text-xs text-white"><div class="mx-auto flex max-w-7xl justify-between px-4 py-1.5"><span>{{ config('school.tagline') }}</span><span class="hidden sm:inline">{{ config('school.phone') }} · {{ config('school.email') }}</span></div></div>
<header class="sticky top-0 z-40 border-b-2 border-ink bg-cream">
  <div class="mx-auto flex max-w-7xl items-center justify-between gap-4 px-4 py-3">
    <a href="{{ route('home') }}" class="flex items-center gap-2 font-serif text-xl font-bold"><span class="grid h-10 w-10 place-items-center rounded-md border-2 border-ink bg-pop text-sm shadow-[2px_2px_0_0_#1b1b2f]">S4</span>{{ config('school.name') }}</a>
    <nav class="hidden items-center gap-1 text-sm font-bold md:flex">
      @foreach($menu as $r => $label)
        <a href="{{ route($r) }}" class="rounded-md border-2 px-3 py-1.5 {{ request()->routeIs($pattern[$r]) ? 'border-ink bg-pop' : 'border-transparent hover:border-ink' }}">{{ $label }}</a>
      @endforeach
      <a href="{{ route('admin.login') }}" class="ml-2 rounded-md border-2 border-ink bg-ink px-4 py-1.5 text-white hover:bg-brand">Login Admin</a>
    </nav>
    <button class="rounded-md border-2 border-ink px-3 py-1.5 text-sm font-bold md:hidden" aria-label="Menu" onclick="document.getElementById('m').classList.toggle('hidden')">Menu</button>
  </div>
  <nav id="m" class="hidden flex-col border-t-2 border-ink px-4 py-2 text-sm font-bold md:hidden">
    @foreach($menu as $r => $label)<a href="{{ route($r) }}" class="block py-2">{{ $label }}</a>@endforeach
    <a href="{{ route('admin.login') }}" class="block py-2 text-brand">Login Admin</a>
  </nav>
</header>
<main>@yield('content')</main>
@include('partials.footer')
</body>
</html>
