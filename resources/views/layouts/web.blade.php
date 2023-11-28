<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<meta name="robots" content="noindex">-->
    <meta name="robots" content="noindex">
    <title>My Dispute</title>
    <link href="{{ asset('css/resource15/reset.css') }}" media="all" rel="stylesheet" type="text/css" />
    {{-- <link href="css/resource15/header_footer.css" media="all" rel="stylesheet" type="text/css" /> --}}
    <link href="{{ asset('css/resource15/individual_form.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/resource15/animate.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/alertify/alertify.core.css') }}" media="screen" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/alertify/alertify.default.css') }}" media="screen" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/ui-lightness/jquery-ui-1.9.2.custom.css') }}" media="screen" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/resource15/scroller.css') }}" media="screen" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/resource15/request_claim.css') }}" media="screen" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="{{ asset('assets/style.css') }}" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="{{ asset('jslib/jquery/jquery-1.11.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('jslib/jquery/jquery.form.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/standaloneform/standaloneform.js?v=1698147682') }}"></script>
    <script type="text/javascript" src="{{ asset('js/alertify/alertify.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('jslib/resource15/scroller.js') }}"></script>
    <script type="text/javascript" src="{{ asset('jslib/custom_dropdown.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/script.js') }}"></script>
 
    <script type="application/ld+json">
        {
        "@context": "http://schema.org",
        "@type": "Organization",
        "url": "https://www.mydispute.ae/",
        "name": "MyPrivateTutor",
        "founder": "Sandip Kar",
        "foundingDate": "2002",
        "foundingLocation": "Duabi",
        "address": "Learnpick Technologies Inc, 2928 Redbud Ave, Oakville ON L6J 7J4 CANADA",
        "description": "MyPrivateTutor is UAE's largest online platform helping students find great tutors and coaching classes.",
        "logo": "https://mydispute.ae/images/2020/logo.png",
        "contactPoint": [
            {
            "@type": "ContactPoint",
            "telephone": "+919830081594",
            "email": "support@mydispute.ae",
            "contactType": "customer service"
            }
        ],
        "sameAs": [
            "https://www.facebook.com/mydispute.dubai",
            "https://twitter.com/MyDispute",
            "https://www.linkedin.com/company/my-dispute",
            "http://www.youtube.com/user/mydisputes"
        ]
        }
    </script>
</head>

<body>

    @include('partials.frontend.navbar')

    @yield('content')

    @include('partials.frontend.footer')

    <script src="{{ asset('js/request_claim.js') }}"></script>
    <script src="{{ asset('js/first_step.js') }}"></script>
    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
