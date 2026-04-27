@extends('layouts.app')

@section('content')
<div class="container pb-5">
    <h2 class="fw-bold text-white mb-4" data-aos="fade-right" style="letter-spacing: 1px;">KATALOG FILM FAVORIT</h2>
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4">
        @foreach($films as $film)
        <div class="col" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 50 }}">
            <div class="card h-100 border-0 bg-transparent film-card cursor-pointer">
                <div class="position-relative overflow-hidden rounded-3 shadow border border-secondary border-opacity-25">
                    
                    <img src="{{ asset($film['poster']) }}" 
                         onerror="this.onerror=null; this.src='https://placehold.co/500x750/2c3440/9ab?text=Image+Not+Found';" 
                         class="card-img-top" alt="{{ $film['judul'] }}" 
                         style="transition: 0.3s; object-fit: cover; aspect-ratio: 2/3;">
                    
                    <div class="card-img-overlay d-flex flex-column justify-content-end p-3 bg-dark bg-opacity-75 opacity-0 hover-overlay">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge bg-warning text-dark fw-bold">★ {{ $film['rating'] }}</span>
                            <span class="badge bg-secondary">{{ $film['tahun'] }}</span>
                        </div>
                        <h6 class="fw-bold text-white mb-1">{{ $film['judul'] }}</h6>
                        <p class="text-light small" style="font-size: 11px; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                            {{ $film['sinopsis'] }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>
    .film-card { cursor: pointer; }
    .film-card:hover img { transform: scale(1.05); }
    .hover-overlay { transition: 0.3s ease-in-out; }
    .film-card:hover .hover-overlay { opacity: 1 !important; }
</style>
@endsection