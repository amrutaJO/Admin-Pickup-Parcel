<?php require_once __DIR__ . "/header.php"; ?>
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-header-title">
                    <?= translate('Statistics On Map')?>
                </h1>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
    
    <div class="map-container mt-3 border rounded mx-auto" style="width: 80%; height: 550px; position: relative;">
        <div id="map" style="width: 100%; height: 100%;"></div>
    </div>
</div>
<!-- End Content -->

<!-- Include Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

<!-- Include Leaflet JS -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    function initMap() {
        var map = L.map('map').setView([20.5937, 78.9629], 5); // Center of India
        
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var rideRequests = [
            {lat: 28.7041, lng: 77.1025, title: 'New Delhi'},
            {lat: 19.0760, lng: 72.8777, title: 'Mumbai'},
            {lat: 12.9716, lng: 77.5946, title: 'Bengaluru'},
            {lat: 17.3850, lng: 78.4867, title: 'Hyderabad'},
            {lat: 13.0827, lng: 80.2707, title: 'Chennai'},
            {lat: 22.5726, lng: 88.3639, title: 'Kolkata'},
            {lat: 26.9124, lng: 75.7873, title: 'Jaipur'},
            {lat: 18.5204, lng: 73.8567, title: 'Pune'},
            {lat: 23.0225, lng: 72.5714, title: 'Ahmedabad'},
            {lat: 30.7333, lng: 76.7794, title: 'Chandigarh'}
        ];

        rideRequests.forEach(function(request) {
            L.marker([request.lat, request.lng]).addTo(map)
                .bindPopup(request.title);
        });
    }

    window.onload = initMap;
</script>

<?php require_once __DIR__ . '/footer.php'; ?>