<html lang="en">

<head>
    @include("layouts/head")
    <title>About</title>
</head>

<body>
    @include("layouts/navbar")
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-6 mt-5">
                <img src="/img/about/profile.jpg" alt="A photo of me" class="img-fluid" id="profile">
            </div>
            <div class="col-lg-6 mt-5 text-dark">
                <h1>About me</h1>
                <p>My name is <b>Kristoffer James B. Bomediano.</b> </p>
                <p> I am a competent web developer proficient in a variety of technologies including <b>HTML, CSS, Bootstrap 5, JavaScript, Laravel, and MySQL. </b> </p>
                <p>I am able to self-manage on independent projects and work effectively in a team.</p>
                <p>My dedication to continuous learning allows me to stay current with industry trends and implement innovative solutions in my work. </p>
                <a href="#"><button class="button mt-5">Contact Me</button></a>
            </div>
        </div>
    </div>
    @include('layouts/footer')
</body>


</html>