<html lang="en">

<head>
    @include("layouts/head")
    <title>Welcome!</title>
</head>

<body>
    @include("layouts/navbar")
    <!-- Hero Section -->
    <div class="hero col-lg-12 col-12">
        <img src="/img/landing/hero.jpg" id="hero" class="img-fluid" />
        <div class="content" id="content">
            <div class="container">
                <div class="row mx-5 mt-5 top-0">
                    <div class="col-lg-12 col-12 text-center ">
                        <div class="glitch-wrapper">
                            <h1 class="fw-bolder display-1">
                                Welcome to my profile!
                            </h1>
                        </div>
                    </div>
                    <div class="col-lg-12 text-center mt-3 ">
                        <a href="/about"><button class="button text-center">Let's Begin</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts/footer')
</body>


</html>