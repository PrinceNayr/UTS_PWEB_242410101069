<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CINEBRY - Edryan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        body { 
            background-color: #14181c; 
            color: white; 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            overflow-x: hidden;
            /*biar ui ga melayang*/
            padding-top: 120px; 
            
            /* footer ttp dibawah */
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1; /* dorong footer kebawah */
        }

        /* animasi expanding */
        .floating-nav-wrapper {
            position: fixed;
            top: 30px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 9999;
        }

        .floating-menu {
            background: rgba(44, 52, 64, 0.7);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 50px;
            
            display: flex;
            align-items: center;
            height: 60px;
            width: 60px; 
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            
            transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .floating-menu:hover {
            width: 480px; 
            background: rgba(44, 52, 64, 0.95);
        }

        .menu-icon {
            min-width: 60px;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            cursor: pointer;
            transition: transform 0.4s ease;
        }

        .floating-menu:hover .menu-icon {
            transform: rotate(-10deg) scale(1.1);
        }

        .menu-links {
            display: flex;
            align-items: center;
            gap: 5px;
            opacity: 0;
            transform: translateX(-20px);
            transition: all 0.4s ease;
            white-space: nowrap;
        }

        .floating-menu:hover .menu-links {
            opacity: 1;
            transform: translateX(0);
            transition-delay: 0.1s; 
        }

        .menu-item {
            color: #9ab;
            text-decoration: none;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 13px;
            letter-spacing: 1px;
            padding: 10px 15px;
            border-radius: 30px;
            transition: 0.3s ease;
        }

        .menu-item:hover {
            background: #fff;
            color: #14181c;
        }

        .menu-item.logout {
            background: rgba(220, 53, 69, 0.2);
            color: #ff6b6b;
            margin-left: 10px;
            border: 1px solid transparent;
        }

        .menu-item.logout:hover {
            background: #dc3545;
            color: #fff;
            box-shadow: 0 0 15px rgba(220, 53, 69, 0.6);
        }
    </style>
</head>
<body>

    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true });
    </script>
</body>
</html>