@props(['title', 'desc' => null, 'crumbs' => []])
<div class="border-b-2 border-ink bg-pop">
  <div class="mx-auto max-w-7xl px-4 py-10">
    <nav class="mb-3 text-xs font-bold" aria-label="Breadcrumb">
      <a href="{{ route('home') }}" class="hover:underline">Beranda</a>
      @foreach($crumbs as $label => $url)<span class="mx-1">→</span>@if($url)<a href="{{ $url }}" class="hover:underline">{{ $label }}</a>@else<span class="rounded bg-ink px-1.5 py-0.5 text-white">{{ $label }}</span>@endif @endforeach
    </nav>
    <h1 class="font-serif text-4xl font-bold md:text-5xl">{{ $title }}</h1>
    @if($desc)<p class="mt-3 max-w-2xl text-ink/80">{{ $desc }}</p>@endif
  </div>
</div>
