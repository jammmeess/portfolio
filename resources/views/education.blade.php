<html lang="en">

<head>
    @include("layouts/head")
    <title>Education</title>
</head>

<body>
    @include("layouts/navbar")
    <div class="container">
        <div class="row my-5 text-dark">
            <h1>My Education</h1>
            <div class="col-lg-12 mt-5 text-dark">
                <h4><b>KodeGo Ph</b> </h4>
                <p>Full-stack Web Developer</p>
                <p> <i>2023</i></p>
            </div>
            <div class="col-lg-12 mt-3 text-dark">
                <h4><b>Magsaysay Center for Hospitality and Culinary Arts</b> </h4>
                <p>Culinary Arts</p>
                <p> <i>2015-2016</i></p>
            </div>
            <div class="col-lg-12 mt-3 text-dark">
                <h4><b>Mapua Institute of Technology</b></h4>
                <p>Bachelor of Science in Hotel and Restaurant Management</p>
                <p> <i>2011-2015</i></p>
            </div>
        </div>
    </div>
    @include('layouts/footer')
</body>


</html>