@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="container">
        <div class="column">
            <div class="col-lg-12 text-center">
                <p class="lead description">{{ $viewData['description'] }}</p>
            </div>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p1 class="lead description"><strong>{{ $viewData['description1'] }}</strong></p1><br>
                    <p2 class="lead description">{{ $viewData['description2'] }}</p2>
                </div>
                <div class="col-lg-12 text-center">
                    <p1 class="lead description"><strong>{{ $viewData['description3'] }}</strong></p1><br>
                    <p2 class="lead description">{{ $viewData['description4'] }}</p2>
                </div>
            </div>
            <div id="map">
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxfGteFd0S1qfzPw4bxzgWIrG2su-Ni9I"></script>
                <script>
                    function initMap() {
                        // Koordinat pusat peta
                        var center = {
                            lat: -6.123456,
                            lng: 106.789012
                        };

                        // Membuat peta
                        var map = new google.maps.Map(document.getElementById('map'), {
                            zoom: 12,
                            center: center
                        });

                        // Menambahkan marker ke lokasi yang diinginkan
                        var marker = new google.maps.Marker({
                            position: center,
                            map: map,
                            title: 'Lokasi Kami'
                        });
                    }

                    // Memanggil fungsi initMap saat halaman selesai dimuat
                    google.maps.event.addDomListener(window, 'load', initMap);
                </script>

            </div>

        </div>

        <div class="col-lg-12 text-center">
            <p class="lead author">{{ $viewData['author'] }}</p>
        </div>
    </div>

@endsection
