@extends('layouts.app')

@section('content')
<div class="container py-5">
    
    <div class="card border-0 rounded-4 shadow-lg mb-5" 
         style="background-color: #2c3440;" 
         data-aos="fade-right" data-aos-duration="1000">
        <div class="card-body p-5">
            <div class="row align-items-center">
                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <img id="profileAvatar" src="https://api.dicebear.com/8.x/big-smile/svg?seed={{ $username }}" 
                         alt="Avatar" 
                         class="rounded-circle shadow-sm p-2 bg-dark border border-2 border-primary" 
                         style="width: 150px; height: 150px; object-fit: cover;">
                </div>
                <div class="col-md-9 text-white">
                    <span class="badge bg-primary px-3 py-2 rounded-pill mb-3">MEMBER SEJAK 2024</span>
                    <h1 class="display-3 fw-bold m-0" style="text-transform: uppercase; letter-spacing: 2px;">
                        {{ $username }}
                    </h1>
                    <p id="profileBio" class="lead text-secondary mb-4 mt-2">Film enthusiast, software engineer in the making, and avid reviewer.</p>
                    <div class="d-flex gap-2">
                        <button class="btn btn-outline-light btn-sm rounded-pill px-4 fw-bold" data-bs-toggle="modal" data-bs-target="#editProfileModal">Edit Profile</button>
                        <a href="{{ route('logout') }}" class="btn btn-danger btn-sm rounded-pill px-4 fw-bold">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mb-5" data-aos="fade-up" data-aos-delay="200">
        <div class="col-lg-4">
            <div class="card border-0 rounded-4 shadow-sm h-100" style="background-color: #1a2028;">
                <div class="card-body p-4 text-center">
                    <h5 class="text-secondary fw-bold">AKTIVITAS FILM</h5>
                    <hr class="border-secondary mb-4">
                    <div class="row">
                        <div class="col-6 mb-3">
                            <h2 class="fw-bold text-success m-0">42</h2>
                            <small class="text-secondary">DITONTON</small>
                        </div>
                        <div class="col-6 mb-3">
                            <h2 class="fw-bold text-info m-0">12</h2>
                            <small class="text-secondary">TAHUN INI</small>
                        </div>
                        <div class="col-6">
                            <h2 class="fw-bold text-warning m-0">3</h2>
                            <small class="text-secondary">LISTS</small>
                        </div>
                        <div class="col-6">
                            <h2 class="fw-bold text-danger m-0">1K+</h2>
                            <small class="text-secondary">LIKE</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="card border-0 rounded-4 shadow-sm h-100" style="background-color: #1a2028;">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="text-white fw-bold m-0">❤️ TOP 4 FAVORITE FILMS</h5>
                        <a href="{{ route('pengelolaan') }}" class="text-primary text-decoration-none small">Lihat Semua →</a>
                    </div>
                    
                    <div class="row row-cols-4 g-3">
                        <div class="col">
                            <div class="card-fav overflow-hidden rounded-3 position-relative">
                                <img src="https://m.media-amazon.com/images/M/MV5BNjYwM2RkMmUtOGU2OS00ZjdlLWE5Y2UtYzRkMzExYjdhNjVlXkEyXkFqcGc@._V1_.jpg" class="img-fluid" alt="Fav 1">
                                <div class="rating-overlay">★ 5.0</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-fav overflow-hidden rounded-3 position-relative">
                                <img src="https://upload.wikimedia.org/wikipedia/id/9/97/Undercover_Miss_Hong_poster_promosi.png" class="img-fluid" alt="Fav 2">
                                <div class="rating-overlay">★ 5.0</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-fav overflow-hidden rounded-3 position-relative">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOw1WHApNHVPozOQwu6feMGdMTtPacySbl_y3TgTO_ICAd1kmiFxPgtmFcONvaCr7s7-a_&s=10" class="img-fluid" alt="Fav 3">
                                <div class="rating-overlay">★ 5.0</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-fav overflow-hidden rounded-3 position-relative">
                                <img src="https://upload.wikimedia.org/wikipedia/id/5/54/Welcome_to_Samdal-ri.jpg" class="img-fluid" alt="Fav 4">
                                <div class="rating-overlay">★ 5.0</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-dark border-secondary text-white">
      <div class="modal-header border-secondary">
        <h5 class="modal-title fw-bold" id="editProfileModalLabel">Edit Profile</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="editProfileForm">
            <div class="mb-4">
                <label for="avatarUpload" class="form-label text-secondary small fw-bold">UPLOAD FOTO BARU</label>
                <input class="form-control bg-dark text-white border-secondary" type="file" id="avatarUpload" accept="image/*">
            </div>
            
            <div class="mb-3">
                <label for="bioInput" class="form-label text-secondary small fw-bold">BIO / STATUS</label>
                <textarea class="form-control bg-dark text-white border-secondary" id="bioInput" rows="3" placeholder="Tulis sesuatu tentang seleramu..."></textarea>
            </div>
        </form>
      </div>
      <div class="modal-footer border-secondary">
        <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary px-4 fw-bold" id="saveProfileBtn">Simpan</button>
      </div>
    </div>
  </div>
</div>

<script>
    document.getElementById('saveProfileBtn').addEventListener('click', function() {
        // apdet bio
        const newBio = document.getElementById('bioInput').value;
        if (newBio.trim() !== '') {
            document.getElementById('profileBio').innerText = newBio;
        }

        // apdet avatar file reader
        const fileInput = document.getElementById('avatarUpload');
        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                document.getElementById('profileAvatar').src = e.target.result;
            }
            reader.readAsDataURL(fileInput.files[0]);
        }

        var myModalEl = document.getElementById('editProfileModal');
        var modal = bootstrap.Modal.getInstance(myModalEl);
        modal.hide();
        
        document.getElementById('editProfileForm').reset();
    });
</script>

<style>
    body { 
        background-color: #14181c !important; 
    }
    
    .card-fav {
        cursor: pointer;
        transition: transform .3s ease-out;
        border: 2px solid transparent;
    }
    
    .card-fav:hover {
        transform: scale(1.05);
        border-color: #0d6efd;
    }
    
    .rating-overlay {
        position: absolute;
        top: 8px;
        right: 8px;
        background-color: rgba(0, 0, 0, 0.8);
        color: #ffc107;
        font-weight: bold;
        padding: 2px 8px;
        border-radius: 5px;
        font-size: 12px;
    }
</style>
@endsection