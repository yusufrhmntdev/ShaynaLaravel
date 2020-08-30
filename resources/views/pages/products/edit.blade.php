@extends('layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
      <strong>Ubah Barang</strong>
      <small> {{ $item->name }}  </small>
    </div>
    <div class="card-body card-block">
      <form action="{{ route('products.update',$item->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="name" class="form-control-label">Nama Barang</label>
          <input  type="text"
                  name="name" 
                  value="{{ old('name') ? old('name') : $item->name }}" 
                  class="form-control @error('name') is-invalid @enderror"/>
          @error('name') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="type" class="form-control-label">Type Barang</label>
            <input  type="text"
                    name="type" 
                    value="{{ old('type') ? old('type') : $item->type }}" 
                    class="form-control @error('type') is-invalid @enderror"/>
            @error('name') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="description" class="form-control-label">Deskripsi Barang</label>
            <textarea name="desc" 
                      class="ckeditor form-control @error('desc') is-invalid @enderror">{{ old('desc') ? old('desc') : $item->desc }}</textarea>
            @error('desc') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="price" class="form-control-label">Harga Barang</label>
            <input  type="number"
                    name="price" 
                    value="{{ old('price') ? old('price') : $item->price }}" 
                    class="form-control @error('price') is-invalid @enderror"/>
            @error('price') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="qty" class="form-control-label">Kuantitas Barang</label>
            <input  type="number"
                    name="qty" 
                    value="{{ old('qty') ? old('qty') : $item->qty }}" 
                    class="form-control @error('qty') is-invalid @enderror"/>
            @error('qty') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">
              Ubah Barang
            </button>
          </div>
        </form>
      </div>
    </div>
@endsection
