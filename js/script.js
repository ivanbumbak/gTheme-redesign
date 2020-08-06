function mapLocation() {
    let location = {lat: 43.766012, lng: 15.903020};
    let map = new google.maps.Map(document.getElementById('map'), {zoom: 15, center: location});
    let marker = new google.maps.Marker({position: location, map: map});
}