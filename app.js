let mapOption = {
    center:[36.7189, 10.3606],
    zoom:10
}

let map = new L.map('map',mapOption);

let layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png')
let marker = new L.Marker([36.72938,10.33455])
marker.addTo(map)
map.addLayer(layer )

