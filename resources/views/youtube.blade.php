<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title','home')</title>

        <body>
            <div class="content">
                <div class="title m -b md">
video Viewr {{$video->viewers}}
                </div>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/GVNDbTwOSiw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </body>
</html>
