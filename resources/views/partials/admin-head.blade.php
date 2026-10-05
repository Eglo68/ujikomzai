<div class="flex flex-wrap items-end justify-between gap-3 mb-5">
 <div><h1 class="font-serif font-bold text-3xl text-ink">{{ $title }}</h1><p class="text-xs text-slate-500">Admin / {{ $title }}</p></div>
 <div class="flex gap-2"><form class="flex"><input name="q" value="{{ request('q') }}" placeholder="Cari..." class="border border-slate-300 rounded-md px-3 py-2 text-sm bg-white"></form>
 <a href="{{ $create }}" class="bg-ink text-white text-sm font-semibold px-4 py-2 rounded-md">+ Tambah</a></div></div>
