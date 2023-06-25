const map = L.map('mapid').setView([-3.691891635591662, -40.34098961976575], 10);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

map.on("click", e => {
    const {lat, lng} = e.latlng
    console.log(lat, lng)
})