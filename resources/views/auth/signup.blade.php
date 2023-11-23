@extends('layouts.web')
@section('content')


    <!-- Start Add Roll Javascript -->
    <script type="text/javascript">
        adroll_adv_id = "2HOYAY24RNF2RNFLQ7LHMY";
        adroll_pix_id = "UOIM2I4VFVAFTPKYUGHPJJ";
        /* OPTIONAL: provide email to improve user identification */
        /* adroll_email = "username@example.com"; */
        (function() {
            var _onload = function() {
                if (document.readyState && !/loaded|complete/.test(document.readyState)) {
                    setTimeout(_onload, 10);
                    return
                }
                if (!window.__adroll_loaded) {
                    __adroll_loaded = true;
                    setTimeout(_onload, 50);
                    return
                }
                var scr = document.createElement("script");
                var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" :
                    "http://a.adroll.com");
                scr.setAttribute('async', 'true');
                scr.type = "text/javascript";
                scr.src = host + "/j/roundtrip.js";
                ((document.getElementsByTagName('head') || [null])[0] ||
                    document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
            };
            if (window.addEventListener) {
                window.addEventListener('load', _onload, false);
            } else {
                window.attachEvent('onload', _onload)
            }
        }());
    </script>
    <!-- End Add Roll Javascript -->


    <style id="antiClickjack">
        body {
            display: none !important;
        }
    </style>
    <script type="text/javascript">
        if (self === top) {
            var antiClickjack = document.getElementById("antiClickjack");
            antiClickjack.parentNode.removeChild(antiClickjack);
        } else {
            top.location = self.location;
        }
    </script>

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
    <!--## GA end ##-->
</head>

<body>



    <!-- END HEADER -->

    <script>
        (function($) {
            $(window).load(function() {
                $("#content_1").mCustomScrollbar({
                    scrollButtons: {
                        enable: true
                    }
                });
            });
        })(jQuery);
    </script>

    <!-- TUTOR REGISTRATION BODY -->

    <!-- HEADER -->
    <header class="header_wrapper">
        <div class="main_wrapper"> <a href="https://www.myprivatetutor.ae" class="logo_center"><img
                    src="/images/2020/Logo (1).png" alt="My Private Tutor"></a>
        </div>
        <div class="clear"></div>
    </header>
    <!-- END HEADER -->
    <div class="tutor_new_signup_holder">
        <div class="top_title_holder_signup">
            <div class="inner_title_holder_sub">
                <h2 class="orange">Claim Initiatiors sign up form</h2>
                <h4 class="mob_view">Apply for Tuition Jobs in UAE:</h4>
                <p>MyPrivateTutor, UAE's leading private tutoring network, offering you the opportunity to become a
                    private tutor and start teaching at a place and time suiting you.</p>
            </div>
        </div>
        <!-- SIGNUP HOLDER -->



        <div class="main_wrapper">
            <!-- Start Count Area -->
            <!-- <div class="tutor_step_main_holder">
                <ul>
                    <li> <span class="stp_blt green_bg">1</span> <span class="stp_txt">Profile Details</span> </li>
                    <li> <span class="stp_blt">2</span> <span class="stp_txt">Segments</span> </li>
                    <li> <span class="stp_blt">3</span> <span class="stp_txt">Subjects</span> </li>
                    <li> <span class="stp_blt">4</span> <span class="stp_txt">Tutoring Details</span> </li>
                </ul>
            </div> -->
            <!-- End Count Area -->
            <div class="req_fld">* Required field</div>

            <form method="post" name="landingform" id="landingform" action="/tutor_signup.php">

                <input type="hidden" name="act" id="act" value="sendmemberdata" readonly />
                <input type="hidden" name="tutor_source" id="tutor_source" value="direct" readonly />
                <input type="hidden" name="latitude_code" id="latitude_code" readonly />
                <input type="hidden" name="longitude_code" id="longitude_code" readonly />


                <div class="tutor_signup_fieldholder_area">

                    <div class="holder">
                        <div class="onethird">
                            <input type="text" name="Company Name" placeholder="Company Name*" class="fieldall full "
                                value="" required />

                        </div>
                        <div class="onehalflast">
                            <div class="tuto_select_arrow">

                                <select name="company_type" id="company_type" class="fieldall half">
                                    <option>Company Type*</option>
                                    <option value="1">Construction</option>
                                    <option value="8">Financial</option>
                                    <option value="3">Trade</option>
                                    <option value="2">Commercial</option>
                                    <option value="6">Technology</option>
                                </select>
                            </div>
                        </div>
                        <!-- <div class="onehalfsmall">
                            <div class="tuto_select_arrow">
                                <select name="sex" id="sex_male" class="fieldall half">
                                    <option value="">Gender*</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="onehalfsmall_last">
                            <div class="tuto_select_arrow">

                                <select class="fieldall half" name="age" id="age">
                                    <option value="0">Year of Birth*</option>
                                    <option value="1940">1940</option>
                                    <option value="1941">1941</option>
                                    <option value="1942">1942</option>
                                    <option value="1943">1943</option>
                                    <option value="1944">1944</option>
                                    <option value="1945">1945</option>
                                    <option value="1946">1946</option>
                                    <option value="1947">1947</option>
                                    <option value="1948">1948</option>
                                    <option value="1949">1949</option>
                                    <option value="1950">1950</option>
                                    <option value="1951">1951</option>
                                    <option value="1952">1952</option>
                                    <option value="1953">1953</option>
                                    <option value="1954">1954</option>
                                    <option value="1955">1955</option>
                                    <option value="1956">1956</option>
                                    <option value="1957">1957</option>
                                    <option value="1958">1958</option>
                                    <option value="1959">1959</option>
                                    <option value="1960">1960</option>
                                    <option value="1961">1961</option>
                                    <option value="1962">1962</option>
                                    <option value="1963">1963</option>
                                    <option value="1964">1964</option>
                                    <option value="1965">1965</option>
                                    <option value="1966">1966</option>
                                    <option value="1967">1967</option>
                                    <option value="1968">1968</option>
                                    <option value="1969">1969</option>
                                    <option value="1970">1970</option>
                                    <option value="1971">1971</option>
                                    <option value="1972">1972</option>
                                    <option value="1973">1973</option>
                                    <option value="1974">1974</option>
                                    <option value="1975">1975</option>
                                    <option value="1976">1976</option>
                                    <option value="1977">1977</option>
                                    <option value="1978">1978</option>
                                    <option value="1979">1979</option>
                                    <option value="1980">1980</option>
                                    <option value="1981">1981</option>
                                    <option value="1982">1982</option>
                                    <option value="1983">1983</option>
                                    <option value="1984">1984</option>
                                    <option value="1985">1985</option>
                                    <option value="1986">1986</option>
                                    <option value="1987">1987</option>
                                    <option value="1988">1988</option>
                                    <option value="1989">1989</option>
                                    <option value="1990">1990</option>
                                    <option value="1991">1991</option>
                                    <option value="1992">1992</option>
                                    <option value="1993">1993</option>
                                    <option value="1994">1994</option>
                                    <option value="1995">1995</option>
                                    <option value="1996">1996</option>
                                    <option value="1997">1997</option>
                                    <option value="1998">1998</option>
                                    <option value="1999">1999</option>
                                    <option value="2000">2000</option>
                                </select>

                            </div>

                        </div> -->
                        <div class="clear"></div>
                    </div>


                    <div class="holder">
                        <div class="onethird"><input type="email" name="email_address" id="email_address"
                                placeholder="Email Address*" onFocus="initializetutoraddress()" class="fieldall"
                                value="" required />
                        </div>
                        <div class="onehalflast">
                            <div class="tuto_select_arrow">
                                <select name="country" id="country" class="fieldall half">
                                    <option value="">Country*</option>
                                </select>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="holder">
                        <!-- <div class="onehalf">
                            <input type="text" name="email" placeholder="Email ID*" class="fieldall half" value="" />
                        </div> -->
                        <div class="onehalf">
                            <input type="password" name="password" value="" placeholder="Password*"
                                class="fieldall half" />
                        </div>
                        <div class="onehalf">
                            <input type="password" name="confirm_password" value=""
                                placeholder="Confirm Password*" class="fieldall half" />
                        </div>

                        <div class="clear"></div>
                    </div>


                    <div class="holder">
                        <!-- <div class="onehalf">
                            <input type="text" name="area" id="auto_area_list" value="" placeholder="Area*" class="fieldall full" />
                            <span class="instruction_info_text"><span id="curarea">(Ex: Al Bateen)</span> </span>
                        </div> -->
                        <div class="onehalf">
                            <input type="text" name="mobile" id="mobileval" placeholder="Mobile*"
                                class="fieldall half" value="" />
                        </div>
                        <div class="onehalflast">
                            <input type="text" name="telephone" id="telephone" placeholder="WhatsApp"
                                class="fieldall" value="" />
                            <span class="instruction_info_text">
                                <input type="checkbox" name="same_mobile_whatsapp" id="same_mobile_whatsapp"
                                    value="yes" style="width:25px;padding:5px;"
                                    onClick="changesameinfo(this.checked)">
                                Same as Mobile Number
                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>


                    <input type="submit" name="" value="Next" class="next_orange_btn" />

                </div>

            </form>
        </div>
    </div>

    <div align="center" class="helpmember">For any assistance kindly <span><a href="/contact"
                target="_blank">Contact Us</a></span> or send mail to <span><a
                href="/cdn-cgi/l/email-protection#f0838580809f8284b09d89808299869184958485849f82de9195"><span
                    class="__cf_email__"
                    data-cfemail="33404643435c4147735e4a43415a455247564746475c411d5256">[email&#160;protected]</span></a></span>
    </div>
    <!-- END SIGNUP HOLDER -->

    <!-- END TUTOR REGISTRATION BODY -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script>
        function getAreaList(formId, dynformId) {
            jQuery(document).ready(function() {
                locnid = jQuery('#' + dynformId).val();
                var oWebRoot = getDomain();

                var url = oWebRoot + 'tutorsignup/getonchangelocarea';

                var type = 'json';
                jQuery.post(url, {
                        ajaxact: 'getchangearea',
                        curLocId: locnid,
                        formId: formId
                    },
                    function(data, textStatus) {
                        getonchangelocareResponse(data, textStatus);
                    }, type
                );

            });
        }

        $('#same_mobile_whatsapp').change(function() {

            var checked = $(this).is(':checked');
            if (checked) {

                $('#telephone').val($('#mobileval').val());
            } else {
                $('#telephone').val('');

            }

        });

        function getonchangelocareResponse(data, textStatus) {
            jQuery(document).ready(function() {

                try {

                    var datObj = jQuery.secureEvalJSON(jQuery.toJSON(data));

                    var status = textStatus;

                    if (datObj && status == 'success') {

                        flag = datObj['flag'];
                        cur_area = datObj['cur_area'];

                        $("#curarea").html(cur_area);

                    }
                } catch (err) {}
            });
        }

        jQuery(document).ready(function() {
            var dWebRoot = getDomain();
            $('#reg_locationid').change(function() {
                var lid = $('#reg_locationid').val();
                var dUrl = dWebRoot + 'ajax/getcitilist/id/' + lid;
                $("#auto_area_list").val('');
                $("#auto_area_list").autocomplete({
                    source: dUrl,
                    minLength: 1
                });
            });

        });
    </script>
    <script>
        $('.delete_request').colorbox({
            inline: false,
            transition: 'elastic',
            width: '610px',
            height: 'auto',
            preloading: true,
            overlayClose: false,
            close: '',
            opacity: '0.7',
            maxWidth: '95%',
            maxHeight: '95%',
            onComplete: function() {

                var cboxOptions = {
                    width: '95%',
                    height: '95%',
                    maxWidth: '610px',
                    maxHeight: '530px'
                }

                window.addEventListener("resize", function() {

                    $.colorbox.resize({
                        width: window.innerWidth > parseInt(cboxOptions.maxWidth) ? cboxOptions
                            .maxWidth : cboxOptions.width,
                        height: window.innerHeight > parseInt(cboxOptions.maxHeight) ?
                            cboxOptions.maxHeight : cboxOptions.height
                    });

                }, true);
            }

        });

        function geolocate() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var geolocation = new google.maps.LatLng(
                        position.coords.latitude, position.coords.longitude);

                    //alert(geolocation);
                    var circle = new google.maps.Circle({
                        center: geolocation,
                        radius: position.coords.accuracy
                    });
                    autocomplete.setBounds(circle.getBounds());
                });
            }
        }
        var placeSearch, autocomplete;

        //alert(autocomplete);
        var componentForm = {
            /* street_number: 'short_name',
             route: 'long_name',
             locality: 'long_name',
             administrative_area_level_1: 'short_name',
             country: 'long_name',
             postal_code: 'short_name'*/
        };

        function initializetutoraddress() {


            autocomplete = new google.maps.places.Autocomplete(
                /** @type {HTMLInputElement} */
                (document.getElementById('address')), {
                    types: ['geocode'],
                    componentRestrictions: {
                        country: "ae"
                    }
                    //types: ['geocode'] 
                }

            );

            // When the user selects an address from the dropdown,
            // populate the address fields in the form.
            google.maps.event.addListener(autocomplete, 'place_changed', function() {
                fillInAddress();
            });
        }
        // [START region_fillform]
        function fillInAddress() {
            // Get the place details from the autocomplete object.
            var place = autocomplete.getPlace();

            var latitude = place.geometry.location.lat();
            var longitude = place.geometry.location.lng();




            for (var i = 0; i < place.address_components.length; i++) {
                var addressType = place.address_components[i].types[0];
                //alert(addressType);
                if (componentForm[addressType]) {
                    var val = place.address_components[i][componentForm[addressType]];
                    document.getElementById(addressType).value = val;
                }
            }
            if (latitude != '') {
                document.getElementById('latitude_code').value = latitude;
            }

            if (longitude != '') {
                document.getElementById('longitude_code').value = longitude;
            }

        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var selectElement = document.getElementById('country');

            // Fetch countries from an API (for example, Restcountries API)
            fetch('https://restcountries.com/v3.1/all')
                .then(function(response) {
                    return response.json();
                })
                .then(function(data) {
                    // Sort countries in ascending order based on country name
                    data.sort(function(a, b) {
                        var countryA = a.name.common.toUpperCase();
                        var countryB = b.name.common.toUpperCase();
                        if (countryA < countryB) {
                            return -1;
                        }
                        if (countryA > countryB) {
                            return 1;
                        }
                        return 0;
                    });

                    // Populate the select element with sorted country options
                    data.forEach(function(country) {
                        var option = document.createElement('option');
                        option.value = country.name.common;
                        option.textContent = country.name.common;
                        selectElement.appendChild(option);
                    });
                })
                .catch(function(error) {
                    console.error('Error fetching countries:', error);
                });
        });

        function changesameinfo(checked) {
            var whatsappField = document.getElementById("telephone");
            var mobileField = document.getElementById("mobileval");

            if (checked) {
                whatsappField.value = mobileField.value;
            } else {
                whatsappField.value = ""; // Clear the WhatsApp field if unchecked
            }
        }
    </script>
@endsection
