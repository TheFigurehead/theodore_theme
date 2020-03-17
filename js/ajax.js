jQuery(document).ready(function($) {

    var counter = 1;

    const loadVehicles = (load_more = true, car_class = 0, manufacturer = 0) =>{

        if(load_more){
            counter++;
        }

        const data = {
            'action': 'load_vehicles',
            'screen': counter
        };

        if(car_class !== 0){
            data.car_class = car_class;
        }

        if(manufacturer !== 0){
            data.manufacturer = manufacturer;
        }
    
        jQuery.post(ajax_object.ajaxurl, data, function(response) {
            response = JSON.parse(response);
            console.dir(response);
            $('#vehicles').html(response.content);
            if(!response.show_next){
                document.getElementById('load_more').style.display = 'none';
            }
        });

    }

    document.getElementById('load_more').addEventListener(
        'click',
        () => {

            loadVehicles();
            
        }
    );

    document.getElementById('cr_filter_form_submit').addEventListener('click', (event)=>{
        
        event.preventDefault();
        
        const car_class = event.target.closest('form').querySelector('[name=class]').value;
        const manufacturer = event.target.closest('form').querySelector('[name=manufacturer]').value;

        loadVehicles(false, car_class, manufacturer);

    });
});