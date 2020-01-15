<template>
    <div id="map">

    </div>
</template>

<script>
import gmapsInit from '../utils/gmaps';

export default {
    name: 'Home',
    async mounted() {
        try {
            const google = await gmapsInit();
            const geocoder = new google.maps.Geocoder();
            const map = new google.maps.Map(document.getElementById('map'));

            geocoder.geocode({ address: 'Austria' }, (results, status) => {
                if (status !== 'OK' || !results[0]) {
                    throw new Error(status);
                }

                map.setCenter(results[0].geometry.location);
                map.fitBounds(results[0].geometry.viewport);
            });
            } catch (error) {
                console.error(error);
            }
        }
    }
    

</script>

<style lang="scss">
    #map {
        height: 100vh;
        width: 100vw;
    }
</style>