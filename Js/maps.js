
const argCoord = { lat: -34.91379259972302, lng: -57.95452028322609 };
const mapDiv = document.getElementById('map');
let map;
let marker;
async function initMap() {

    const { Map } = await google.maps.importLibrary("maps");

    map = new Map(document.getElementById("map"), {
    center: { lat: -34.91379259972302, lng: -57.95452028322609 },
    zoom: 16,
    });

    marker = new google.maps.Marker({
        position: argCoord,
        map: map,
    });
}

initMap();
