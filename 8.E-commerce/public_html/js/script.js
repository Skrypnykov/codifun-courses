// some scripts

// jquery ready start
$(document).ready(function() {
	// jQuery code

    
    /* ///////////////////////////////////////

    THESE FOLLOWING SCRIPTS ONLY FOR BASIC USAGE, 
    For sliders, interactions and other

    */ ///////////////////////////////////////
    
////////////////////// Owl carousel
  $('.owl-carousel').owlCarousel({
    items: 6,
    margin: 10,
    loop: true,
    autoplay: true
  });
  

	//////////////////////// Prevent closing from click inside dropdown
    $(document).on('click', '.dropdown-menu', function (e) {
      e.stopPropagation();
    });
    

	//////////////////////// Bootstrap tooltip
	if($('[data-toggle="tooltip"]').length>0) {  // check if element exists
		$('[data-toggle="tooltip"]').tooltip()
	} // end if
  
}); 

// jquery end

