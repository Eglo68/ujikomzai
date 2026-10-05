{{-- $n = nama rute, $item, $fields (dirender oleh view pemanggil lewat @yield-less slot: $slot) --}}
<h1 class="font-serif font-bold text-3xl text-ink mb-5">{{ $item->exists ? 'Edit' : 'Tambah' }} {{ $label }}</h1>
@if($errors->any())<ul class="bg-red-50 text-red-700 text-sm p-3 rounded-md mb-4 list-disc pl-6">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>@endif
<form method="post" enctype="multipart/form-data" action="{{ $item->exists ? route("admin.$n.update", $item->id) : route("admin.$n.store") }}" class="bg-white border border-slate-200 rounded-md p-6 space-y-4 max-w-3xl">
 @csrf @if($item->exists) @method('PUT') @endif
 {{ $slot }}
 <label class="block text-sm font-semibold text-ink">Gambar (maks 2 MB)
  @if($item->image_url)<img src="{{ $item->image_url }}" class="h-24 rounded-md my-2">@endif
  <input type="file" name="image" accept="image/*" class="mt-1 block text-sm font-normal"></label>
 <div class="flex gap-3 pt-2"><button class="bg-ink text-white font-semibold px-6 py-2.5 rounded-md">Simpan</button><a href="{{ route("admin.$n.index") }}" class="px-6 py-2.5 text-sm text-slate-600">Batal</a></div>
</form>
