<section class="max-w-6xl mx-auto px-4 pt-8">
 <nav class="text-xs text-slate-500"><a href="{{ route('home') }}" class="hover:text-brand">Beranda</a> / @isset($parent)<a href="{{ $parent[1] }}" class="hover:text-brand">{{ $parent[0] }}</a> / @endisset <span class="text-brand font-medium">{{ $crumb }}</span></nav>
 <h1 class="font-serif font-bold text-3xl md:text-4xl text-ink mt-3">{{ $title }}</h1>
 @isset($desc)<p class="text-slate-600 mt-2 max-w-2xl">{{ $desc }}</p>@endisset
</section>
