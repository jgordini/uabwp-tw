<?php
/**
 * Title: Google Map
 * Slug: uabwp-tw/google-map
 * Categories: media, embed, uab
 * Block Types: core/html
 * Viewport Width: 1386
 * Inserter: yes
 * Keywords: map, google map, location
 */
?>
<!-- wp:html -->
<div id="uab-google-map" style="height: 450px; width: 100%;"></div>
<script>
    function initMap() {
        const address = "1720 2nd Ave South, Birmingham, AL 35294";
        const geocoder = new google.maps.Geocoder();
        const mapElement = document.getElementById("uab-google-map");

        geocoder.geocode({ 'address': address }, function(results, status) {
            if (status === 'OK') {
                const location = results[0].geometry.location;
                const mapOptions = {
                    zoom: 17, // Adjusted zoom slightly for address precision
                    center: location,
                    mapId: 'UAB_MAP_ID' // Optional: Add a Map ID for Cloud-based Maps Styling
                };
                const map = new google.maps.Map(mapElement, mapOptions);

                const marker = new google.maps.Marker({
                    map: map,
                    position: location,
                    title: address // Use address as marker title
                });
            } else {
                console.error('Geocode was not successful for the following reason: ' + status);
                // Optionally display an error message to the user in mapElement
                mapElement.innerHTML = 'Error: Could not find the specified address.';
            }
        });
    }

    // Ensure the initMap function is globally accessible
    window.initMap = initMap;
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCt5bWM1A4UIg24vuWNHzUzD0CHhsekd9w&callback=initMap&loading=async">
    </script>
<!-- /wp:html -->