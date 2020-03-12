
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    @extends('layout')
    @section('title','Categories')
    @section('content')
        <h1>Categories Page</h1>
        <div class="row">

            <div class="col l3 m4 s6 display-card">
                <a href="signup.html" target="_blank" class="nav-link">
                <div class="card cardHover">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img  img-fix src="{{URL('https://source.unsplash.com/random/500x500')}}" alt="image">
                    </div>
                    <div class="card-content">
                        <span class="flow-text activator text-darken-4">
                            Apparel
                        </span>
                    </div>
                </div>      
            </div><!--ending column-->

            <div class="col l3 m4 s6 display-card">
                <a href="signup.html" target="_blank" class="nav-link">
                <div class="card cardHover">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img  img-fix src="{URL('https://source.unsplash.com/random/500x500')}}" alt="image">
                    </div>
                    <div class="card-content">
                        <span class="flow-text activator text-darken-4">
                            Books
                        </span>
                    </div>
                </div>      
            </div><!--ending column-->

            <div class="col l3 m4 s6 display-card">
                <a href="signup.html" target="_blank" class="nav-link">
                <div class="card cardHover">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator img-fix" src="{URL('https://source.unsplash.com/random/500x500')}}" alt="image">
                    </div>
                    <div class="card-content">
                        <span class="flow-text activator text-darken-4">
                            Electronics
                        </span>
                    </div>
                </div>      
            </div><!--ending column-->

            <div class="col l3 m4 s6 display-card">
                <a href="signup.html" target="_blank" class="nav-link">
                <div class="card cardHover">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img  img-fix src="{URL('https://source.unsplash.com/random/500x500')}}" alt="image">
                    </div>
                    <div class="card-content">
                        <span class="activator text-darken-4 flow-text">
                            Fitness
                        </span>
                    </div>
                </div>      
            </div><!--ending column-->

            <div class="col l3 m4 s6 display-card">
                <a href="signup.html" target="_blank" class="nav-link">
                <div class="card cardHover">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img  img-fix src="{URL('https://source.unsplash.com/random/500x500')}}" alt="image">
                    </div>
                    <div class="card-content">
                        <span class="flow-text activator text-darken-4">
                            Furniture
                        </span>
                    </div>
                </div>      
            </div><!--ending column-->

            <div class="col l3 m4 s6 display-card">
                <a href="signup.html" target="_blank" class="nav-link">
                <div class="card cardHover">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img  img-fix src="{URL('https://source.unsplash.com/random/500x500')}}" alt="image">
                    </div>
                    <div class="card-content">
                        <span class="flow-text activator text-darken-4">
                            Clothing
                        </span>
                    </div>
                </div>      
            </div><!--ending column-->

            <div class="col l3 m4 s6 display-card">
                <a href="signup.html" target="_blank" class="nav-link">
                <div class="card cardHover">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img  img-fix src="{URL('https://source.unsplash.com/random/500x500')}}" alt="image">
                    </div>
                    <div class="card-content">
                        <span class="flow-text activator text-darken-4">
                            Clothing
                        </span>
                    </div>
                </div>      
            </div><!--ending column-->

            <div class="col l3 m4 s6 display-card">
                <a href="signup.html" target="_blank" class="nav-link">
                <div class="card cardHover">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img  img-fix src="{URL('https://source.unsplash.com/random/500x500')}}" alt="image">
                    </div>
                    <div class="card-content">
                        <span class="flow-text activator text-darken-4">
                            Clothing
                        </span>
                    </div>
                </div>      
            </div><!--ending column-->

        </div><!--ending row-->
    @endsection
</body>
</html>