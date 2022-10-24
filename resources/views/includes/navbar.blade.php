     <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.html" class="navbar-brand">
                <img src="{{ asset('images/hand.png') }}" alt="" style="width:60%; height:auto;">
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            @auth
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="#" class="nav-item nav-link active">الصفحة الرئيسية</a>
                    <a href="#" class="nav-item nav-link">الفعاليات</a>
                    <a href="#" class="nav-item nav-link">حول الموقع</a>
                    <a href="#" class="nav-item nav-link">اتصل بنا</a>
                    
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-outline-primary py-2 px-3" href="">
                        تبرع الآن
                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                            <i class="fa fa-arrow-left"></i>
                        </div>
                    </a></div>
                    <div class="d-none d-lg-flex ms-2">
                        <a class="btn btn-outline-primary py-2 px-3" href="">
                            حسابي
                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                <i class="fa fa-user"></i>
                            </div>
                        </a></div>
                    </div>
                    <div class="d-none d-lg-flex ms-2">
                        <form action="/logout" method="POST" class="inline">
                            @csrf                   
                            <button type="submit">         تسجيل خروج
                            </button>
                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                <i class="fa-solid fa-door-closed"></i>
                            </div>
                        </form></div>
                    </div>

                    @else
                    <div class="d-none d-lg-flex ms-2">
                        <a class="btn btn-outline-primary py-2 px-3" href="/login">
                            تسجيل الدخول
                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                <i class="fa-solid fa-arrow-right-to-bracket"></i>
                            </div>
                        </a></div>
                    </div>

                    <div class="d-none d-lg-flex ms-2">
                        <a class="btn btn-outline-primary py-2 px-3" href="/register">
                            حساب جديد
                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                <i class="fa-solid fa-user-plus"></i>
                            </div>
                        </a></div>
                    </div>
                    @endauth
            </div>
        </nav>
    </div>
    <!-- Navbar End -->