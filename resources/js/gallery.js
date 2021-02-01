$('#x-gallery-modal-img').on('show.bs.modal', function (event) {
  
    var button = $(event.relatedTarget);
    var title = button.data('title');
    var galleryp = button.data('gallery');

    var modal = $(this);
    modal.find('#gallery-label').text(title);

    var posting = $.post( "/images-gallery", { gallery: galleryp })

    posting.done(function( data ) {
        var images = data.images;
        $( "#modal-carousel-gallery" ).html( JSON.parse(data).images );
    },"json");

    posting.fail(function( data ) {
        var images = data.images;
        $( "#modal-carousel-gallery" ).html( 'Error' );
    },"json");
    
 
})