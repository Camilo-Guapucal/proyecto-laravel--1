<link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet">
<script src="{{ asset('admin/assets/js/main.js') }}"></script>

@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Lista de Mascotas</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Raza</th>
                <th>Edad</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pets as $pet)
                <tr>
                    <td>{{ $pet->id }}</td>
                    <td>{{ $pet->name }}</td>
                    <td>{{ $pet->breed }}</td>
                    <td>{{ $pet->age }}</td>
                    <td>{{ $pet->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

<ul class="sidebar-menu">
    <li>
        <a href="{{ route('pets.index') }}">
            <i class="bi bi-paw"></i> <span>Mascotas</span>
        </a>
    </li>
</ul>
