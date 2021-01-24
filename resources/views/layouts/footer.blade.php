@auth
<div class="container-fluid">
    <nav>
        <ul class="footer-menu">
            @if(Auth::user()->role === 'siswa')
            <!-- <li>
                <a href="#">
                    Sholat
                </a>
            </li> -->
            @endif
        </ul>
        <p class="copyright text-center">
            ©
            <script>
                document.write(new Date().getFullYear())
            </script>
            <a href="#">Ichsan Arrizqi</a>, made with love for a better web
        </p>
    </nav>
</div>
@endauth
