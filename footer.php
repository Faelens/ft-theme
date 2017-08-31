<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="//cdn.rawgit.com/noelboss/featherlight/1.3.4/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
<script src="https://use.fontawesome.com/ab629727c0.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/css3-animate-it.js"></script>

<!-- GOOGLE MAPS -->
<script type="text/javascript" src="https://maps-api-ssl.google.com/maps/api/js?v=3&sensor=false"></script>
<script type="text/javascript">
    window.onload = function LoadGmaps() {
        var myLatlng = new google.maps.LatLng(51.920871, 4.480993);
        var myOptions = {
            zoom: 15,
            center: myLatlng,
            disableDefaultUI: true,
            panControl: false,
            zoomControl: true,
            zoomControlOptions: {
                style: google.maps.ZoomControlStyle.SMALL
            },

            mapTypeControl: false,
            streetViewControl: false,
            mapTypeId: google.maps.MapTypeId.TERRAIN,
            scrollwheel: false
        }
        var map = new google.maps.Map(document.getElementById("googlemaps"), myOptions);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: "FIFA Tournament"
        });
        var infowindow = new google.maps.InfoWindow({
            content: "<strong>FIFA Tournament HQ</strong><br />Peperstraat 142<br />2801 RH Gouda"
        });
        google.maps.event.addListener(marker, "click", function () {
            infowindow.open(map, marker);
        });
    }
</script>

<!-- FACEBOOK -->

<div id="fb-root"></div>
<script>
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<!-- MENU -->
<script>
    $('#nav').affix({
        offset: {
            top: $('#header').height()
        }
    });
    $('body').scrollspy({
        target: '#nav'
    });
    $("#nav ul li a[href^='#']").on('click', function (e) {

        // prevent default anchor click behavior
        e.preventDefault();

        // store hash
        var hash = this.hash;

        // animate
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 600, function () {

            // when done, add hash to url
            // (default click behaviour)
            window.location.hash = hash;
        });

    });
</script>
<!-- Make the Contact Form 7 give messages within the featherlight -->
<script>
   $( "body" ).on( "submit", "#basis .wpcf7-form", function(event) {
        event.preventDefault();
        var $form = $( this ),
          url = $form.attr( 'action' );
        var posting = $.post( url, $form.serialize() );
        posting.done(function(data) {
            var content = $(data).find('#basis .wpcf7-form');
            $('.featherlight .wpcf7').empty().append(content);
        });
    });
   $( "body" ).on( "submit", "#standaard .wpcf7-form", function(event) {
        event.preventDefault();
        var $form = $( this ),
          url = $form.attr( 'action' );
        var posting = $.post( url, $form.serialize() );
        posting.done(function(data) {
            var content = $(data).find('#standaard .wpcf7-form');
            $('.featherlight .wpcf7').empty().append(content);
        });
    });
   $( "body" ).on( "submit", "#uitgebreid .wpcf7-form", function(event) {
        event.preventDefault();
        var $form = $( this ),
          url = $form.attr( 'action' );
        var posting = $.post( url, $form.serialize() );
        posting.done(function(data) {
            var content = $(data).find('#uitgebreid .wpcf7-form');
            $('.featherlight .wpcf7').empty().append(content);
        });
    });
   $( "body" ).on( "submit", "#compleet .wpcf7-form", function(event) {
        event.preventDefault();
        var $form = $( this ),
          url = $form.attr( 'action' );
        var posting = $.post( url, $form.serialize() );
        posting.done(function(data) {
            var content = $(data).find('#compleet .wpcf7-form');
            $('.featherlight .wpcf7').empty().append(content);
        });
    });
    </script>
<?php wp_footer(); ?>

    </body>

    </html>