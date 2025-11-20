@extends('layouts.admin.app')

@section('content')

<div class="d-flex justify-content-between w-100 flex-wrap mb-4">
    <div>
        <h1 class="h4">Data Pelanggan</h1>
        <p class="mb-0">List pelanggan dengan fitur filter, search, dan pagination.</p>
    </div>
    <div>
        <a href="{{ route('pelanggan.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Pelanggan
        </a>
    </div>
</div>

{{-- ALERT SUCCESS --}}
@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif


{{-- FORM SEARCH + FILTER --}}
<div class="card mb-4 shadow-sm border-0">
    <div class="card-body">
        <form method="GET" action="{{ route('pelanggan.index') }}">
            <div class="row g-3">

                {{-- Filter Gender --}}
                <div class="col-md-2">
                    <select name="gender" class="form-select" onchange="this.form.submit()">
                        <option value="">All Gender</option>
                        <option value="Male" {{ request('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ request('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                        <option value="Other" {{ request('gender') == 'Other' ? 'selected' : '' }}>Other</option>
                    </select>
                </div>

                {{-- Search --}}
                <div class="col-md-4">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Cari pelanggan..."
                            value="{{ request('search') }}">

                        <button class="btn btn-primary" type="submit">Search</button>

                        @if(request('search'))
                        <a href="{{ request()->fullUrlWithQuery(['search' => null]) }}"
                            class="btn btn-outline-secondary">Clear</a>
                        @endif
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>


{{-- TABLE LIST --}}
<div class="card shadow-sm border-0">
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Phone</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($dataPelanggan as $item)
                <tr>
                    {{-- Nomor berlanjut --}}
                    <td>
                        {{ ($dataPelanggan->currentPage() - 1) * $dataPelanggan->perPage() + $loop->iteration }}
                    </td>

                    <td>{{ $item->first_name }} {{ $item->last_name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->gender }}</td>
                    <td>{{ $item->phone }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{-- PAGINATION --}}
        <div class="mt-3">
            {{ $dataPelanggan->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>

@endsection
