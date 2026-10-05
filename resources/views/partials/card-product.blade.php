<a href="{{ route('products.show', $p->slug) }}" class="group bg-soft border border-slate-200 rounded-md overflow-hidden hover:shadow-md transition block">
 <x-img :src="$p->image_url" :alt="$p->name" class="w-full h-44"/>
 <div class="p-4"><p class="text-[11px] font-bold uppercase tracking-wide text-brand">{{ $p->category }}</p>
 <h3 class="font-serif font-semibold text-lg text-ink mt-1 group-hover:text-brand">{{ $p->name }}</h3>
 <div class="flex justify-between items-center mt-3 text-sm"><b class="text-ink">{{ $p->price_formatted }}</b>
 <i class="text-xs {{ $p->stock > 0 ? 'text-slate-500' : 'text-red-600' }}">{{ $p->stock > 0 ? 'Stok '.$p->stock : 'Habis' }}</i></div></div></a>
