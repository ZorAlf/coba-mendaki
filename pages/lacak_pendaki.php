<!DOCTYPE html>
<html>
<head>
  <title>Lacak Pendaki</title>
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
</head>
<body>
  <input type="text" id="id_pendaki" placeholder="Masukkan ID Pendaki">
  <button onclick="lacak()">Lacak</button>
  <div id="map" style="height: 400px;"></div>
  <script>
    function lacak() {
      const id = document.getElementById('id_pendaki').value;
      fetch('../get_location.php?id=' + id)
        .then(response => response.json())
        .then(data => {
          const map = L.map('map').setView([data.latitude, data.longitude], 15);
          L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
          L.marker([data.latitude, data.longitude]).addTo(map).bindPopup("Lokasi Pendaki");
        });
    }
  </script>
</body>
</html>