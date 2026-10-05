@props(['categories', 'placeholder' => 'Cari...'])
@php $act = request('kategori'); @endphp
<div class="mb-8 flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
  <div class="flex flex-wrap gap-2">
    <a href="{{ request()->fullUrlWithQuery(['kategori' => null, 'page' => null]) }}" class="rounded-md border-2 border-ink px-4 py-1.5 text-sm font-semibold {{ !$act ? 'bg-ink text-white' : 'bg-soft text-ink hover:bg-pop' }}">Semua</a>
    @foreach($categories as $c)
      <a href="{{ request()->fullUrlWithQuery(['kategori' => $c, 'page' => null]) }}" class="rounded-md border-2 border-ink px-4 py-1.5 text-sm font-semibold {{ $act === $c ? 'bg-ink text-white' : 'bg-soft text-ink hover:bg-pop' }}">{{ $c }}</a>
    @endforeach
  </div>
  <form method="GET" class="flex gap-2">
    @if($act)<input type="hidden" name="kategori" value="{{ $act }}">@endif
    <input name="q" value="{{ request('q') }}" placeholder="{{ $placeholder }}" class="w-full rounded-md border border-line bg-soft px-3 py-2 text-sm md:w-64">
    <button class="rounded-md border-2 border-ink bg-ink px-4 text-sm font-semibold text-white">Cari</button>
  </form>
</div>
