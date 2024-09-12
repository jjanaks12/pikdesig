{{--
  Template Name: Under construction page
--}}

<html>
<head>
    <?php wp_head()?>
</head>
<body>
    <div id="wrapper">
        <main id="main">
            <section class="under_construction">
                <div class="holder">
                    <div class="logo">
                        <a href="{{ home_url('home-page') }}">
                            <img src="{!! wp_get_attachment_url($siteLogo) !!}" alt="{{ $siteName }}">
                        </a>
                    </div>
                    <h1>We are under construction!</h1>
                    <p>We are proud to announce we are developing our own website. We will come through.</p>
                </div>
            </section>
        </main>
    </div>
    <?php wp_footer() ?>
</body>
</html>
