@extends('layouts.admin') @section('title','Galeri')
@section('content')
@component('partials.admin-form', ['n'=>'galleries','item'=>$item,'label'=>'Foto'])
 <label class="block text-sm font-semibold text-ink">Judul<input name="title" value="{{ old('title',$item->title) }}" class="mt-1 w-full border border-slate-300 rounded-md px-3 py-2 font-normal"></label>
 <label class="block text-sm font-semibold text-ink">Kategori<select name="category" class="mt-1 w-full border border-slate-300 rounded-md px-3 py-2 font-normal">@foreach(\App\Models\Gallery::CATEGORIES as $c)<option @selected(old('category',$item->category)===$c)>{{ $c }}</option>@endforeach</select></label>
 <label class="block text-sm font-semibold text-ink">Deskripsi<textarea name="description" rows="4" class="mt-1 w-full border border-slate-300 rounded-md px-3 py-2 font-normal">{{ old('description',$item->description) }}</textarea></label>
@endcomponent
@endsection
