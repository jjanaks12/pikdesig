<!doctype html>
<html @php(language_attributes())>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php(do_action('get_header'))
    @php(wp_head())
    <style>
        body {
          --base: {!! get_field('Theme Colors_base', 'option') !!};
          --primary: {!! get_field('Theme Colors_primary', 'option') !!};
          --secondary: {!! get_field('Theme Colors_secondary', 'option') !!};
          --info: {!! get_field('Theme Colors_info', 'option') !!};
          --success: {!! get_field('Theme Colors_success', 'option') !!};
          --danger: {!! get_field('Theme Colors_danger', 'option') !!};
          --warning: {!! get_field('Theme Colors_warning', 'option') !!};
        }

    </style>
</head>

<body @php(body_class())>
    @php(wp_body_open())
    <div id="wrapper">
        <a class="sr-only focus:not-sr-only" href="#main">
            {{ __('Skip to content') }}
        </a>
        @include('sections.header')
        <main id="main" class="main">
            @yield('content')
        </main>
        @include('sections.footer')
    </div>

    @php(do_action('get_footer'))
    @php(wp_footer())
</body>
</html>
