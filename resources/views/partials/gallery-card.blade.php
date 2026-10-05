<a href="{{ route('gallery.show', $g->slug) }}" class="group block overflow-hidden rounded-md border-2 border-ink bg-white shadow-[4px_4px_0_0_#1b1b2f] transition hover:-translate-y-1 hover:shadow-[6px_6px_0_0_#4338ca]">
  <img src="{{ $g->image_url }}" alt="{{ $g->title }}" class="aspect-[4/3] w-full border-b-2 border-ink object-cover" loading="lazy">
  <div class="flex items-center justify-between gap-2 p-3"><p class="font-serif font-bold leading-tight">{{ $g->title }}</p><span class="shrink-0 rounded bg-pop px-2 py-0.5 text-[11px] font-bold">{{ $g->category }}</span></div>
</a>
