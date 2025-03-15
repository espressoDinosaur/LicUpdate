@include('includes.head')

<body>
    <div id="map"></div>
    @include('components.navbar')
    <div class="content-container">
        <div class="container-fluid pt-3">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 mb-3">
                    <div class="card h-100 shadow-sm" style="border-radius:10px">
                        <div class="card-body d-flex align-items-center">
                            <i class="bx bx-droplet me-3 fs-1 text-primary"></i>
                            <div>
                                <div class="card-title text-secondary mb-0">Precipitation</div>
                                <span class="fw-bold text-primary">XX.XX mm/min</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-3">
                    <div class="card h-100 shadow-sm" style="border-radius:10px">
                        <div class="card-body d-flex align-items-center">
                            <i class="bx bx-cloud-rain me-3 fs-1 text-primary"></i>
                            <div>
                                <div class="card-title text-secondary mb-0">Weather Condition</div>
                                <span class="fw-bold text-primary">Sunny/Cloudy</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-3">
                    <div class="card h-100 shadow-sm" style="border-radius:10px">
                        <div class="card-body d-flex align-items-center">
                            <i class="bx bx-calendar me-3 fs-1 text-primary"></i>
                            <div>
                                <div class="card-title text-secondary mb-0">Date</div>
                                <span class="fw-bold text-primary">March 15, 2025</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        var map = L.map('map').setView([15.4806, 120.7683], 15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
    </script>
</body>