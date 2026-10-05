@extends('layout')
@section('content')
<section class="mx-auto grid max-w-7xl items-center gap-10 px-4 py-14 md:grid-cols-2 md:py-20">
  <div>
    <span class="inline-block -rotate-2 rounded-md border-2 border-ink bg-pop px-3 py-1 text-xs font-bold shadow-[3px_3px_0_0_#1b1b2f]">SEJAK 2009</span>
    <h1 class="mt-5 font-serif text-4xl font-bold leading-[1.05] md:text-6xl">{{ Str::upper(config('school.full_name')) }}</h1>
    <p class="mt-5 max-w-lg text-lg text-ink/75">Mewujudkan siswa berprestasi, berintegritas, dan berwawasan global melalui kurikulum berbasis nilai kebudayaan bangsa.</p>
    <div class="mt-8 flex flex-wrap gap-3">
      <a href="{{ route('gallery.index') }}" class="rounded-md border-2 border-ink bg-ink px-6 py-3 font-bold text-white shadow-[4px_4px_0_0_#4338ca] hover:-translate-y-0.5">Lihat Fasilitas</a>
      <a href="{{ route('contact') }}" class="rounded-md border-2 border-ink bg-white px-6 py-3 font-bold shadow-[4px_4px_0_0_#1b1b2f] hover:bg-pop">Hubungi Kami</a>
    </div>
  </div>
  <img src="{{ asset('images/Lapangan.JPG') }}" alt="{{ config('school.name') }}" class="aspect-[4/3] w-full rotate-1 rounded-md border-2 border-ink object-cover shadow-[8px_8px_0_0_#4338ca]">
</section>

<section class="border-t-2 border-ink bg-soft py-16"><div class="mx-auto grid max-w-7xl items-center gap-12 px-4 md:grid-cols-2">
  <img src="{{ asset('images/kepsek.jpg') }}" alt="Kepala Sekolah" class="aspect-[15/8] w-full rounded-md border-2 border-ink object-cover object-[center_35%] shadow-[6px_6px_0_0_#1b1b2f]">
  <div>
    <p class="text-sm font-bold text-brand">/ sambutan kepala sekolah</p>
    <h2 class="mt-1 font-serif text-3xl font-bold">{{ config('school.head') }}</h2>
    <p class="mt-4 max-w-prose leading-relaxed text-ink/75">Selamat datang di {{ config('school.name') }}, tempat terbaik untuk mengembangkan potensi dan meraih masa depan. Kami berkomitmen menyajikan pendidikan vokasi dan akademik berkualitas tinggi yang tidak hanya mengasah keahlian teknis, tetapi juga membentuk karakter berintegritas yang berakar kuat pada nilai-nilai luhur budaya bangsa.</p>
    <blockquote class="mt-6 rounded-md border-2 border-ink bg-pop p-4 font-serif text-xl font-bold">“Fokus perbaiki diri, bukan bandingkan diri.”</blockquote>
  </div>
</div></section>
<section class="bg-cream border-t-2 border-ink py-16"><div class="mx-auto max-w-7xl px-4">
  <div class="mb-8 flex flex-wrap items-end justify-between gap-4"><div><p class="text-sm font-bold text-brand">/ informasi terkini</p><h2 class="font-serif text-3xl font-bold md:text-4xl">Berita &amp; artikel sekolah</h2></div>
  <a href="{{ route('articles.index') }}" class="rounded-md border-2 border-ink bg-white px-5 py-2 text-sm font-bold shadow-[3px_3px_0_0_#1b1b2f] hover:bg-pop">Lihat semua →</a></div>
  <div class="grid gap-6 md:grid-cols-3">@forelse($articles as $a) @include('partials.article-card') @empty <p class="col-span-full text-ink/60">Belum ada artikel terbit.</p> @endforelse</div>
</div></section>
<section class="bg-pop/40 border-t-2 border-ink py-16"><div class="mx-auto max-w-7xl px-4">
  <div class="mb-8 flex flex-wrap items-end justify-between gap-4"><div><p class="text-sm font-bold text-brand">/ dokumentasi</p><h2 class="font-serif text-3xl font-bold md:text-4xl">Galeri sekolah</h2></div>
  <a href="{{ route('gallery.index') }}" class="rounded-md border-2 border-ink bg-white px-5 py-2 text-sm font-bold shadow-[3px_3px_0_0_#1b1b2f] hover:bg-pop">Lihat semua →</a></div>
  <div class="grid grid-cols-2 gap-4 md:grid-cols-3">@forelse($galleries as $g) @include('partials.gallery-card') @empty <p class="col-span-full text-ink/60">Belum ada foto.</p> @endforelse</div>
</div></section>
<section class="bg-cream border-t-2 border-ink py-16"><div class="mx-auto max-w-7xl px-4">
  <div class="mb-8 flex flex-wrap items-end justify-between gap-4"><div><p class="text-sm font-bold text-brand">/ koperasi sekolah</p><h2 class="font-serif text-3xl font-bold md:text-4xl">Produk sekolah</h2></div>
  <a href="{{ route('products.index') }}" class="rounded-md border-2 border-ink bg-white px-5 py-2 text-sm font-bold shadow-[3px_3px_0_0_#1b1b2f] hover:bg-pop">Lihat semua →</a></div>
  <div class="grid grid-cols-2 gap-5 md:grid-cols-4">@forelse($products as $p) @include('partials.product-card') @empty <p class="col-span-full text-ink/60">Belum ada produk.</p> @endforelse</div>
</div></section>
@endsection
