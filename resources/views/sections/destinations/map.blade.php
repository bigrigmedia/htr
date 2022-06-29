<div id="map" class="destinations-layout destinations-layout-map"></div>
@php
  $json = [];

  foreach ($getDestinations as $destination) {
    if (get_geocode_lat($destination->ID) && get_geocode_lng($destination->ID)) {
      $states = get_the_terms($destination, 'state');
      $state = $states[0]->name;

      $json[] = [
        'position' => [
          'lat' => trim(get_geocode_lat($destination->ID)) ?? null,
          'lng' => trim(get_geocode_lng($destination->ID)) ?? null
        ],
        'address'   => get_geocode_address($destination->ID) ?? null,
        'image'     => wp_get_attachment_image_src( get_post_thumbnail_id($destination->ID), 'w313x168' )[0] ?? null,
        'url'       => get_permalink($destination->ID) ?? null,
        'title'     => $destination->post_title ?? null,
        'icon'      => @asset('marker.svg')->uri(),
        'state'     => $state ?? null,
      ];
    }
  }
@endphp
<script>
  let map, marker, bounds, LatLng, infoWindow

  const destinations = @json($json)

  /**
   * Initialize the Google Map
   */
  function initMap() {
    const styles = [
      {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [
          {
            "color": "#f1f1ec"
          },
          {
            "weight": 2
          }
        ]
      },
      {
        "featureType": "landscape",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "featureType": "poi",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "featureType": "road",
        "stylers": [
          {
            "color": "#dadada"
          }
        ]
      },
      {
        "featureType": "transit",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "featureType": "water",
        "stylers": [
          {
            "color": "#a9cdc7"
          }
        ]
      }
    ]

    map = new google.maps.Map(document.getElementById('map'), {
      zoom: 12,
      center: { lat: 36.7783, lng: -119.4179 },
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      fullscreenControl: false,
      mapTypeControl: false,
      zoomControl: false,
      zoomControlOptions: {
        position: google.maps.ControlPosition.LEFT_TOP
      },
      streetViewControl: false,
      styles: styles
    })

    createMarkers()
  }

  /**
   * createMarkers
   *
   * Create the map markers
   */
  const createMarkers = () => {
    bounds = new google.maps.LatLngBounds()

    destinations.forEach(destination => {
      const { icon } = destination
      const position = {
        lat: parseFloat(destination.position.lat),
        lng: parseFloat(destination.position.lng)
      }

      marker = new google.maps.Marker({
        position,
        map,
        icon,
      })

      LatLng = new google.maps.LatLng(position)

      bounds.extend(LatLng)
      map.fitBounds(bounds)

      markerEvent(marker, destination)
    })
  }

  /**
   * markerEvent
   *
   * Create a map marker infoWindow event
   *
   * @param {object} marker - The map marker
   * @param {object} content - The map marker's content
   */
  const markerEvent = (marker, content) => {
    infoWindow = new google.maps.InfoWindow

    const { image, url, title, state } = content

    let html

    html =  `<div class='text-md font-poppins font-semibold uppercase tracking-wider'>
                <img src='${image}' alt='${title}' />
                <div class='flex items-center justify-between p-[18px]'>
                  <span>${title}, ${state}</span>
                  <a href='${url}'>
                    <svg width='34' height='16' viewBox='0 0 34 16' fill='none' xmlns='http://www.w3.org/2000/svg'>
                      <path class='fill-htr-charcoal' d='M33.4817 8.88853C33.8723 8.49801 33.8723 7.86484 33.4817 7.47432L27.1178 1.11036C26.7273 0.719835 26.0941 0.719835 25.7036 1.11036C25.313 1.50088 25.313 2.13405 25.7036 2.52457L31.3604 8.18143L25.7036 13.8383C25.313 14.2288 25.313 14.862 25.7036 15.2525C26.0941 15.643 26.7273 15.643 27.1178 15.2525L33.4817 8.88853ZM0.78125 9.18143H32.7746V7.18143H0.78125V9.18143Z' />
                    </svg>
                  </a>
                </div>
             </div>`

    marker.addListener('click', () => {
      infoWindow.setContent(html)
      infoWindow.open(map, marker)
    })
  }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key={{ GOOGLE_MAPS }}&callback=initMap" async defer></script>
