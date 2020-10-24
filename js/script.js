//Show Section Nutshell on Scroll
window.addEventListener("scroll", () => {
    const nutshell = document.getElementsByClassName('nutshell-third');
    const sectionNutshell = document.getElementsByClassName('section-nutshell');

    if(window.pageYOffset >  1000) {
        for(let n = 0; n < nutshell.length; n++) {
            nutshell[n].classList.add('show');
        }
    }
});

//Google Map
function mapLocation() {
    let location = {lat: 43.766012, lng: 15.903020};
    let map = new google.maps.Map(document.getElementById('map'), {zoom: 15, center: location});
    let marker = new google.maps.Marker({position: location, map: map});
}