<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template SCSS BOOTSTRAP</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">

        <div class="d-flex">
            <span>check color --></span>
            <h3 class="text-danger">hello</h3>
        </div>
        <span>try me --></span>
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
            aria-controls="offcanvasScrolling">check offcanvas</button>

        <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
            id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">IT WORKS!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <p>js bootstrap is loaded</p>
            </div>
        </div>
        <br>
        <span>img --></span><img src="{{ Vite::asset('resources/img/cat.jpg') }}" alt="cat">
    </div>
</body>

</html>
