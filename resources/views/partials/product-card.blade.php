<a href="{{ route('products.show', $p->slug) }}" class="group block overflow-hidden rounded-md border-2 border-ink bg-white shadow-[4px_4px_0_0_#1b1b2f] transition hover:-translate-y-1 hover:shadow-[6px_6px_0_0_#4338ca]">
  <img src="{{ $p->image_url }}" alt="{{ $p->name }}" class="aspect-square w-full border-b-2 border-ink object-cover" loading="lazy">
  <div class="p-4">
    <span class="text-xs font-bold text-brand">{{ $p->category }}</span>
    <h3 class="mt-1 font-serif text-lg font-bold">{{ $p->name }}</h3>
    <div class="mt-3 flex items-center justify-between text-sm"><span class="rounded bg-pop px-2 py-0.5 font-bold">Rp {{ number_format($p->price, 0, ',', '.') }}</span><span class="text-xs font-bold {{ $p->stock > 0 ? 'text-ink/60' : 'text-red-600' }}">{{ $p->stock > 0 ? 'Stok '.$p->stock : 'Habis' }}</span></div>
  </div>
</a>
