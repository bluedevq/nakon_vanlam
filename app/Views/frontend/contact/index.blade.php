@extends('layouts.frontend.default')
@section('content')
<!-- Start Hire Section -->
<section class="hire-area pb-2">
    <div class="container">
        <div class="hire-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hire-content position-relative z-index text-center">
                        <h2>BẢO KHÁNH</h2>
                        <h5>Công ty TNHH thương mại xây dựng - sản xuất nhôm kính</h5>
                        <h5>0912 829 510</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hire Section -->
<!-- Map Section Start -->
<div class="container">
    <div class="map-area">
        <div class="map-content">
            <div class="map-canvas" id="contact-map"></div>
        </div>
    </div>
</div>
<!-- Map Section End -->
<script>
    function initMap() {
        // create google map
        var map = new google.maps.Map(document.getElementById('contact-map'), {
            zoom: 16,
            center: new google.maps.LatLng(20.7932833, 105.8244368),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        // create marker
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(20.7932833, 105.8244368),
            draggable: false
        });
        marker.setMap(map);
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_KEY_API') }}&callback=initMap"></script>
@stop
