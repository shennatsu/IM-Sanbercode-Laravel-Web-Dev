@extends('layouts.master')

@section('title')
    Halaman Tampil Genre
@endsection

@section('content')
<a href="/genre/create" class="btn btn-primary btn-sm my-3">Create</a>

<table class="table table-bordered table-striped">
  <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($genres as $item)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $item->name }}</td>
        <td>
          <a href="/genre/{{ $item->id }}" class="btn btn-info btn-sm">Detail</a>
          <a href="/genre/{{ $item->id }}/edit" class="btn btn-warning btn-sm">Edit</a>

          <form action="/genre/{{ $item->id }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete" class="btn btn-danger btn-sm">
          </form>
        </td>
      </tr>
    @empty
      <tr>
        <td colspan="3" class="text-center">Tidak ada data genre.</td>
      </tr>
    @endforelse
  </tbody>
</table>
@endsection
