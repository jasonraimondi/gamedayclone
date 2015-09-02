<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>StudentGameDay</title>
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" media="screen" title="no title" charset="utf-8">

        <style media="screen">
            html,
            body {
                height: 100%;
                width: 100%;
            }
            .wrapper {
                display: table;
                height: 100%;
                width: 100%;
            }
            .container {
                display: table-cell;
                vertical-align: middle;
            }
            .content {
                max-width: 500px;
                margin: 0 auto;
            }
            .title {
                text-align: center;
            }
        </style>

    </head>
    <body>

        <section class="wrapper">
            <article class="container">

                <div class="content">

                    <section class="row">
                        <article class="column">
                            <h1 class="title">Student Game Day</h1>
                            @include('errors.list')
                            @yield('content')
                        </article>
                    </section>

                </div>

            </article>
        </section>

    </body>
</html>
