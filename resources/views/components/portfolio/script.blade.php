<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="{{asset('
            templateFrontend ')}}/js/vendor/jquery-1.10.1.min.js"><\/script>')

    </script>

    <script src="{{asset('templateFrontend')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('templateFrontend')}}/js/plugins.js"></script>
    <script src="{{asset('templateFrontend')}}/js/main.js"></script>


    <!-- Google Map -->
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="{{asset('templateFrontend')}}/js/jquery.gmap3.min.js"></script>

    <!-- Google Map Init-->
    <script type="text/javascript">
        jQuery(function ($) {
            $('#map_canvas').gmap3({
                marker: {
                    address: '16.8496189,96.1288854'
                },
                map: {
                    options: {
                        zoom: 15,
                        scrollwheel: false,
                        streetViewControl: true
                    }
                }
            });
        });

    </script>

</body>

</html>
