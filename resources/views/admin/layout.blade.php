<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title') — Admin {{ config('school.name') }}</title>
  @include('partials.assets')
</head>
<body class="bg-cream font-sans text-ink">
@php $menu = [['Dashboard','admin.dashboard','admin.dashboard'],['Artikel','admin.artikel.index','admin.artikel.*'],['Produk','admin.produk.index','admin.produk.*'],['Galeri','admin.galeri.index','admin.galeri.*']]; @endphp
<div class="flex min-h-screen flex-col md:flex-row">
  <aside class="flex shrink-0 flex-col bg-ink p-5 text-white md:min-h-screen md:w-60">
    <a href="{{ route('admin.dashboard') }}" class="font-serif text-xl font-bold">{{ config('school.name') }}<span class="mt-1 block w-fit rounded bg-pop px-2 py-0.5 font-sans text-[11px] font-bold text-ink">PANEL ADMIN</span></a>
    <nav class="mt-4 flex gap-1 overflow-x-auto text-sm font-bold md:mt-8 md:flex-col">
      @foreach($menu as [$l, $r, $p])<a href="{{ route($r) }}" class="whitespace-nowrap rounded-md px-3 py-2 {{ request()->routeIs($p) ? 'bg-pop text-ink' : 'text-white/80 hover:bg-white/10' }}">{{ $l }}</a>@endforeach
    </nav>
    <div class="mt-4 flex gap-4 text-sm md:mt-auto md:flex-col md:gap-2 md:border-t md:border-white/20 md:pt-4">
      <a href="{{ route('home') }}" target="_blank" class="text-white/70 hover:text-white">Lihat situs ↗</a>
      <form method="POST" action="{{ route('admin.logout') }}">@csrf<button class="font-bold text-pop hover:underline">Keluar</button></form>
    </div>
  </aside>
  <main class="min-w-0 flex-1 p-6 md:p-10">@yield('content')</main>
</div>
</body>
</html>
