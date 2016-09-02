jQuery(document).ready(function() {
	jQuery('.wp-full-overlay-sidebar-content').prepend('<a href="http://www.nimbusthemes.com/wordpress-themes/ember/" class="button button-primary button-ember customizer-header-button" target="_blank">Get Ember Pro</a>');
	
	jQuery( ".customize-panel-back,.customize-section-back" ).click(function() {
        jQuery( ".customizer-header-button" ).removeClass( "ember-lite-hide" );
        jQuery(".wp-full-overlay-sidebar-content").css("padding-top","0px");
    });
    
    jQuery( ".control-panel .accordion-section-title,.control-panel .customize-section-back" ).click(function() {
        jQuery( ".customizer-header-button" ).addClass( "ember-lite-hide" );
        jQuery(".wp-full-overlay-sidebar-content").css("padding-top","100px");
    });
});