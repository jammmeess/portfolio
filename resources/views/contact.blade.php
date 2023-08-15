<html lang="en">

<head>
    @include("layouts/head")
    <title>Contact</title>
</head>

<body>
    @include("layouts/navbar")
    <div class="container d-none d-sm-block" style="height: 80vh">
        <div class="row my-5 text-dark">
            <h1>Contact Me</h1>
            <div class="col-lg-12 mt-5 text-dark">
                <h4><b>LinkedIn</b> </h4>
                <p>LinkedIn Account: <a href="https://www.linkedin.com/in/kristoffer-james-bomediano-020214271/">Kristoffer James Bomediano</a></p>
            </div>
            <div class=" col-lg-12 mt-3 text-dark">
                <h4><b>GitHub</b> </h4>
                <p>GitHub Account: <a href="https://github.com/jammmeess">Kristoffer Bomediano | jammmeess</a></p>
            </div>
            <div class=" col-lg-12 mt-3 text-dark">
                <h4><b>Email</b> </h4>
                <p>Outlook Email Address: james_bomediano@hotmail.com</p>
            </div>
            <div class=" col-lg-12 mt-3 text-dark">
                <h4><b>Contact Number</b> </h4>
                <p>Contact Number: +63-9659109471</p>
            </div>
            <div class=" col-12 mt-3 text-dark">
                <h4><b>Resume</b> </h4>
                <a href="/files/Bomediano_resume.pdf" download>Click here to download my resume</a>
            </div>
        </div>
    </div>

    <!-- Responsive -->

    <div class="container d-block d-sm-none mb-5 " style="height: 90vh">
        <div class="row my-5 text-dark">
            <h1>Contact Me</h1>
            <div class="col-12 mt-3 text-dark">
                <h4><b>My LinkedIn</b> </h4>
                <p>LinkedIn Account: <a href="https://www.linkedin.com/in/kristoffer-james-bomediano-020214271/">Kristoffer James Bomediano</a></p>
            </div>
            <div class=" col-12 mt-3 text-dark">
                <h4><b>My GitHub</b> </h4>
                <p>GitHub Account: <a href="https://github.com/jammmeess">Kristoffer Bomediano | jammmeess</a></p>
            </div>
            <div class=" col-12 mt-3 text-dark">
                <h4><b>My Email</b> </h4>
                <p>Outlook Email Address: james_bomediano@hotmail.com</p>
            </div>
            <div class=" col-12 mt-3 text-dark">
                <h4><b>My Contact Number</b> </h4>
                <p>Contact Number: +63-9659109471</p>
            </div>
            <div class=" col-12 mt-3text-dark">
                <h4><b>My Resume</b> </h4>
                <a href="/files/Bomediano_resume.pdf" download><button>Click here to download my resume</button></a>
            </div>
        </div>
    </div>
    @include('layouts/footer')
</body>


</html>