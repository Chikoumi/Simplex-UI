//Pop-Up code
                               jQuery(function($){
                                   
                                    //Lorsque vous cliquez sur un lien de la classe pop-me
                                    $('a.pop-me').on('click', function() {
                                        var popID = $(this).data('rel'); //Recupération de la valeur data-rel
                                        var popWidth = $(this).data('width'); //Récupération de la valeur date-width

                                        //Apparition de la popup et génération du lien de fermeture
                                        $('#' + popID).fadeIn().css({ 'width': popWidth}).prepend('<a href="#" class="close">X</a>');
                                        
                                        //Récupération du margin
                                        var popMargTop = ($('#' + popID).height() + 50) / 2;
                                        var popMargLeft = ($('#' + popID).width() + 80) / 2;
                                        
                                        //Application des marges
                                        $('#' + popID).css({ 
                                            'margin-top' : -popMargTop,
                                            'margin-left' : -popMargLeft
                                        });
                                        
                                        //Apparition du fond & compatibilité avec ancienne version d'IE
                                        $('body').append('<div id="fade"></div>');
                                        $('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn();
                                        
                                        return false;
                                    });
                                    
                                    $('body').on('click', 'a.close, #fade, #cancel', function() { //Fermeture de la Pop-Up
                                        $('#fade , .popup').fadeOut(function() { 
                                            $('#fade, a.close').remove(); //Fermeture du fade.
                                    }); 
                                        
                                        return false;
                                    });
                                });
//Scrabble change letter
$('.scrabble').each(function() {
    var letters = $(this).text().split(''),
    $container = $(this).empty();

    $.each(letters, function(_, letter) {
       $('<span>', {text: letter}).appendTo($container);
    });
});