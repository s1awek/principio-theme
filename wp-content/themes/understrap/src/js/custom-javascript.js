jQuery(function($){
    console.log('in');
    $('.menu-item a').hover(function(){
        var titleText = $(this).attr('title');
        if(titleText.length > 0){
            $(this).attr('title','').attr('data-title',titleText);
        }        
    }, function(){
        var dataText = $(this).attr('data-title');
        console.log('hover-out');
        if(dataText.length > 0){
            var that = $(this);
            $(this).attr('title',dataText).attr('data-title','');
        }   
    });
});
