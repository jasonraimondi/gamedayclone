<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>StudentGameDay</title>
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" media="screen" title="no title" charset="utf-8">
    </head>
    <body>

        @include('layouts.partials.nav')

        <section class="row">
            <article class="column">

                @yield('content')

                <!-- @include('layouts.partials.footer') -->

            </article>
        </section>

        <script src="{{ asset('assets/js/package.js') }}" charset="utf-8"></script>

    </body>
</html>
