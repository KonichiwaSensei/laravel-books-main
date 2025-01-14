<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Books</title>
        @vite('resources/css/app.scss')
    </head>
    <body>
        <nav>
            @auth
                <form action="{{ route('logout') }}" method="post">
                    @csrf

                    <button>Logout</button>
                </form>
            @endauth

            @can('admin')
                <a href="/admin/books">Books administration</a>
            @endcan
        </nav>
        @include('common/messages')

        @yield('content')
    </body>
</html>
