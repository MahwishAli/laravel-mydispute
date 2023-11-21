<!doctype html>
<html lang="en-US" xmlns:fb="http://ogp.me/ns/fb#" prefix="og: http://ogp.me/ns#">

<head>
    <meta name="verify-v1" content="zXRjEY50qXN7Oxbt0tAIDegKmUk5nG32qLmAzMuZSw0=" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="verification" content="b7c75b8c4ac6533d7af2b3a783bbc3f7" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />

    <title>Login to Your Account Or Join MyDispute - The Global Tutoring Network</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="en-US" />
    <meta name="description" content="MyDispute Login page" />
    <link href="{{ asset('/auth/css/2020/common.css?v=1698817165') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/auth/css/2020/owl/owl.carousel.min.css?v=1698817165') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/auth/css/2020/owl/owl.theme.default.min.css?v=1698817165') }}" media="all" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&amp;display=swap" media="all"
        rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="{{ asset('/jslib/jquery/jquery-1.11.1.min.js?v=1698817165') }}"></script>
    <script type="text/javascript" src="{{ asset('/css/2020/owl/owl.carousel.js?v=1698817165') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/2020/jquery.lazy.min.js?v=1698817165') }}"></script>


    <script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "Organization",
			"url": "https://www.myprivatetutor.ae/",
			"name": "MyPrivateTutor",
			"founder": "Sandip Kar",
			"foundingDate": "2002",
			"foundingLocation": "Duabi",
			"address": "Learnpick Technologies Inc, 2928 Redbud Ave, Oakville ON L6J 7J4 CANADA",
			"description": "MyPrivateTutor is UAE's largest online platform helping students find great tutors and coaching classes.",
			"logo": "https://myprivatetutor.ae/images/2020/logo.png",
			"contactPoint": [{
				"@type": "ContactPoint",
				"telephone": "+919830081594",
				"email": "support@myprivatetutor.ae",
				"contactType": "customer service"
			}],
			"sameAs": ["https://www.facebook.com/myprivatetutor.dubai",
				"https://twitter.com/PrivateTutorAe",
				"https://www.linkedin.com/company/my-private-tutor",
				"http://www.youtube.com/user/myprivatetutors"
			]
		}
	</script>

</head>

<body>
    <!-- HEADER -->
    @include('partials.backend.auth.header')

    <!-- MAIN WRAPPER -->
    @yield('content')
    <!-- END MAIN WRAPPER -->

</body>

</html>
