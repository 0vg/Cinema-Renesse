function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 51.7331556792974, lng: 3.788707262258235 },
    zoom: 16,
    mapId: "c627a9ba47d4b985",
  });

  new google.maps.Marker({
    position: { lat: 51.7336314576977, lng: 3.78645678868486 },
    map,
    title: "Fast Movies",
    icon: {
      url: "http://cinemahd.onl/wp-content/uploads/2021/05/cinemahd-300x300.png",
      scaledSize: new google.maps.Size(90, 90),
    },
  });
}
