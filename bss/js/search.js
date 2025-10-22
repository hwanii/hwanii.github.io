
    var inputs = document.getElementsByClassName('autocomplete');
    var autocompletes = [];

    for (var i = 0; i < inputs.length; i++) {
        applySearchAddress(inputs[i]);
    }

    function fillIn() {
        var place = this.getPlace().name + " " + this.getPlace().formatted_address;
        
        console.log(place);
    }

    function applySearchAddress($input) {
        var options = {
            types: ['lodging'],
            componentRestrictions: {country: 'vn'}
        };
    
        var autocomplete = new google.maps.places.Autocomplete($input, options);
    
        autocomplete.addListener('place_changed', function() {
    
        var place = autocomplete.getPlace();
        console.log(place);
        if (place.length == 0) {
            return;
        }
    
        var address = '';
        if (place.address_components) {
            address = [
            (place.address_components[0] && place.address_components[0].short_name || ''),
            (place.address_components[1] && place.address_components[1].short_name || ''),
            (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
        }
        // + " / " + address
        $input.value=place.name;
    
        });
    };