@extends('layouts.app')

@section('content')
<style>
    /* overlay bulet */
    .intro-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background-color: #000; 
        z-index: 10000;
        display: flex;
        justify-content: center;
        align-items: center;
        animation: smoothFadeOut 0.5s ease-in-out 3.5s forwards;
        pointer-events: none; 
    }

    .expanding-circle {
        position: absolute;
        width: 150px;
        height: 150px;
        border-radius: 50%;
        background-color: #14181c; 
        display: flex;
        justify-content: center;
        align-items: center;
        
        animation: circleExpand 2s cubic-bezier(0.7, 0, 0.3, 1) 1s forwards;
    }

    .intro-emoji {
        font-size: 4rem;
        animation: emojiVanish 1s ease-in-out 1s forwards;
    }

    /* keyframes */
    @keyframes circleExpand {
        0% { transform: scale(1); }
        100% { transform: scale(40); } 
    }

    @keyframes emojiVanish {
        0% { opacity: 1; transform: scale(1); }
        100% { opacity: 0; transform: scale(1.5); }
    }

    @keyframes smoothFadeOut {
        0% { opacity: 1; }
        /* Ilang dengan smooth, gak kaget lagi */
        100% { opacity: 0; visibility: hidden; z-index: -1; }
    }


    /* --- css dashboard --- */
    .floating-btn {
        animation: float 3s ease-in-out infinite;
        transition: all 0.3s ease;
    }
    .floating-btn:hover {
        transform: scale(1.1) translateY(-5px) !important;
        box-shadow: 0 15px 25px rgba(25, 135, 84, 0.6) !important;
    }
    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-15px); box-shadow: 0 10px 20px rgba(25, 135, 84, 0.4); }
        100% { transform: translateY(0px); }
    }

    .animated-gradient-text {
        background: linear-gradient(90deg, #fff, #9ab, #fff);
        background-size: 200% auto;
        color: #000;
        background-clip: text;
        text-fill-color: transparent;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: shine 3s linear infinite;
    }
    @keyframes shine {
        to { background-position: 200% center; }
    }
</style>

<div class="intro-overlay">
    <div class="expanding-circle">
        <div class="intro-emoji">🎥</div>
    </div>
</div>

<div class="container py-5 text-center overflow-hidden">
    
    <h3 class="mb-4 fw-bold text-warning" style="letter-spacing: 3px;" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="2800">
        WELCOME BACK, {{ strtoupper(session('username', 'GUEST')) }}
    </h3>
    
    <h1 class="display-3 fw-bold mb-2 animated-gradient-text" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="3100">
        Track films you’ve watched.
    </h1>
    <h1 class="display-3 fw-bold mb-2 animated-gradient-text" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="3400">
        Save those you want to see.
    </h1>
    <h1 class="display-3 fw-bold text-white mb-5" data-aos="zoom-in-up" data-aos-duration="1200" data-aos-delay="3700">
        Tell your friends what’s good.
    </h1>
    
    <div class="mt-5" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="4000">
        <a href="{{ route('pengelolaan') }}" class="btn btn-success btn-lg px-5 py-3 fw-bold rounded-pill floating-btn border border-2 border-success">
            🚀 MULAI JELAJAHI FILM 🚀
        </a>
    </div>
</div>
@endsection