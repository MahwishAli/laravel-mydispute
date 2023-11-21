//alert('ddddddd');

jQuery(document).ready(function() {

    jQuery('.variable').click(function(event) {
        //alert('ddddddd');
        jQuery('.listsection').slideUp('slow');
        jQuery(this).next().slideDown('slow');
        event.stopPropagation();
    });

    jQuery('.listsection').click(function(event) {

        event.stopPropagation();
    });

    jQuery(document).click(function() {

        jQuery('.listsection').slideUp('slow');
    });

    jQuery('.checkboxclass').click(function() {

        var checkstat = jQuery(this).is(':checked');

        var values = jQuery(this).parent().parent().parent().prev().val();

        //alert(values);

        var separator = (values != '') ? ', ' : '';

        if (checkstat) {
            jQuery(this).parent().parent().parent().prev().val(values + (separator + jQuery(this).val()));
            //jQuery(this).parent().parent().parent().prev().val(values+(jQuery(this).val()+', '));	
        } else {
            //jQuery(this).parent().parent().parent().prev().val(jQuery(this).parent().parent().parent().prev().val().replace(', '+jQuery(this).val(), ''));
            //jQuery(this).parent().parent().parent().prev().val(jQuery(this).parent().parent().parent().prev().val().replace(jQuery(this).val(), ''));
            jQuery(this).parent().parent().parent().prev().val(jQuery(this).parent().parent().parent().prev().val().replace(separator + jQuery(this).val(), ''));
            jQuery(this).parent().parent().parent().prev().val(jQuery(this).parent().parent().parent().prev().val().replace(jQuery(this).val(), ''));
        }
    });

});