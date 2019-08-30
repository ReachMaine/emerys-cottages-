(function ($) {

    jQuery(document).ready(function () {

        "use strict";

        // Package Description
        (function(){
            
            var $package_wrap = $('#tab-amenities[aria-labelledby="tab-title-amenities"]').find('.awebooking-amenities__item');

            // hidden package description
            $package_wrap.find( '.awebooking-amenities__desc' ).hide();

            $package_wrap.on( 'click', function(){
                $(this).find('.awebooking-amenities__desc').slideToggle();
            })

        })();
    });

})(jQuery);