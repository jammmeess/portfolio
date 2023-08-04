<html lang="en">

<head>
    @include("layouts/head")
    <title>Projects</title>
</head>

<body>
    @include("layouts/navbar")
    <div class="container">
        <div class="row mt-5 text-dark mb-5">
            <h1>My Projects</h1>
            <div class="col-lg-6 mt-5 text-dark">
                <h3><b>Engine_</b> </h3>
                <p> <b>Repository: </b><a href="https://github.com/jammmeess/Engine">GitHub</a></p>
                <p><b>Technologies Used:</b> HTML, CSS, Bootstrap 5, Laravel, MySQL, Javascript</p>
                <p><b>Awards:</b> Best Capstone KodeGo Batch WD67</p>
            </div>
            <div class="col-lg-6 mt-4">
                <img src="/img/projects/engine.png" class="img-fluid" alt="Engine Games" style="width: 85%; border: 3px solid black; box-shadow:  5px 5px 0px #c1c1c1,
             -5px -5px 0px #ffffff;">
            </div>
            <div class="col-lg-6 mt-5 text-dark">
                <h3><b>OrderXpress</b> </h3>
                <p> <b>Live Link: </b><a href="https://orderxpress.vercel.app">OrderXpress</a></p>
                <p> <b>Repository: </b><a href="https://github.com/caranayjamesmichael/orderxpress">GitHub</a></p>
                <p><b>Technologies Used:</b>HTML, CSS, Bootstrap 5, ReactJs, Javascript</p>
            </div>
            <div class="col-lg-6 mt-4">
                <img src="/img/projects/orderxpress.png" class="img-fluid" alt="OrderXpress" style="width: 85%; border: 3px solid black; box-shadow:  5px 5px 0px #c1c1c1,
             -5px -5px 0px #ffffff; ">
            </div>
            <div class="col-lg-6 mt-5 text-dark">
                <h3><b>Library</b> </h3>
                <p><b>Live Link: </b><a href="https://jammmeess.github.io/library/">Library</a></p>
                <p> <b>Repository: </b><a href="https://github.com/jammmeess/library">GitHub</a></p>
                <p><b>Technologies Used:</b> HTML, CSS, Bootstrap 5</p>
            </div>
            <div class="col-lg-6 mt-4">
                <img src="/img/projects/library.png" class="img-fluid" alt="Library" style="width: 85%; border: 3px solid black; box-shadow:  5px 5px 0px #c1c1c1,
             -5px -5px 0px #ffffff; ">
            </div>
        </div>
    </div>
    @include('layouts/footer')
</body>

</html>