<a href="{{ route('articles.show', $a->slug) }}" class="group block overflow-hidden rounded-md border-2 border-ink bg-white shadow-[4px_4px_0_0_#1b1b2f] transition hover:-translate-y-1 hover:shadow-[6px_6px_0_0_#4338ca]">
  <img src="{{ $a->image_url }}" alt="{{ $a->title }}" class="aspect-video w-full border-b-2 border-ink object-cover" loading="lazy">
  <div class="p-5">
    <span class="rounded bg-soft px-2 py-0.5 text-xs font-bold text-brand">{{ $a->category }}</span>
    <h3 class="mt-3 font-serif text-xl font-bold leading-snug group-hover:text-brand">{{ $a->title }}</h3>
    <p class="mt-2 line-clamp-2 text-sm text-ink/70">{{ $a->excerpt }}</p>
    <p class="mt-3 text-xs font-bold text-ink/50">{{ $a->published_at?->translatedFormat('d F Y') }}</p>
  </div>
</a>
