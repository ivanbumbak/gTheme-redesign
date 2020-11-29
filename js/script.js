// Show Section Nutshell on Scroll
window.addEventListener("scroll", () => {
    const nutshell = document.getElementsByClassName('nutshell-third');

    if(window.pageYOffset > 1250) {
        // Counting up function
        function animateValue(obj, start, end, duration) {
            let startTimestamp = null;
            const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            obj.innerHTML = Math.floor(progress * (end - start) + start);
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                    }
                };
            window.requestAnimationFrame(step);
        }
        
        const obj = document.getElementById("years");
        animateValue(obj, 0, 30, 1750);  
    }

    if(window.pageYOffset >  1750) {
        for(let n = 0; n < nutshell.length; n++) {
            nutshell[n].classList.add('show');
        }
    } 
});

// Google Map
function mapLocation() {
    let location = {lat: 43.766012, lng: 15.903020};
    let map = new google.maps.Map(document.getElementById('map'), {zoom: 15, center: location});
    let marker = new google.maps.Marker({position: location, map: map});
}