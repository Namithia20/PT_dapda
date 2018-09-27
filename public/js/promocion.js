
$(document).ready(function(){
    /**
     * Change car brand
     */
    $('.carType').change(
        function(){        
            var car_type = $(this).val();

            if(car_type)
            {
                $('.car').prop('disabled', false);
                if(car_type == 1)
                {
                    $('.car').empty();
                    $('.car').append('<option value="">Seleccione marca</option>');
                    $('.car').append('<option value="'+0+'">Mokka</option>');
                    $('.car').append('<option value="'+1+'">Crossland</option>');
                }
                else
                {
                    $('.car').empty();
                    $('.car').append('<option value="">Seleccione marca</option>');
                    $('.car').append('<option value="'+0+'">Corsa</option>');
                    $('.car').append('<option value="'+1+'">Astra</option>');
                }
            }
            else
            {
                $('.car').empty();
                $('.car').append('<option value="">Seleccione marca</option>');
                $('.car').prop('disabled', true);
            }

        }
    );

    /**
     * Loading experience
     */
    $(function() {
        $('#promoForm').on('submit', function() {
            $('#wait_lightbox').show(0);
        });
    });
});