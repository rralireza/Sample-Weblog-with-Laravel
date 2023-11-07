<body>
<!-- Top Bar Start -->
<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="tb-contact" style="    display: flex;
    flex-direction: row;
    align-items: center;">
                    @auth()
                        <a href="{{ route('dashboard') }}" class="btn btn-primary" style="margin-right: 10px;">داشبورد</a>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="btn btn-danger" style="margin-right: 10px;">خروج</button>
                        </form>
                        <p style="margin-right: 10px;"><i class="fas fa-user"></i>سلام {{ Auth::user()->name }}</p>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-success" style="margin-right: 10px">ورود</a>
                    @endauth
                    <p><i class="fas fa-envelope"></i>info@mail.com</p>
                    <p><i class="fas fa-phone-alt"></i>+012 345 6789</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tb-menu">
                    <a href="">About</a>
                    <a href="">Privacy</a>
                    <a href="">Terms</a>
                    <a href="">Contact</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top Bar Start -->

<!-- Brand Start -->
<div class="brand">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4">
                <div class="b-logo">
                    <a href="">
                        <img src="{{ asset('client/img/logo.png') }}" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-4">
                <div class="b-ads">
                    <a href="https://htmlcodex.com">
                        <img src="{{ asset('client/img/ads-1.jpg') }}" alt="Ads">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="b-search">
                    <input type="text" placeholder="Search">
                    <button><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Brand End -->
