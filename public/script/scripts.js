/**
 * Created by Karakhanyan on 08.12.2015.
 */
var $ = jQuery.noConflict();
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

function get_links(){
    $('.loading').show();
    $.ajax({
        url:'get_links',
        type:'POST',
        data: {_token: CSRF_TOKEN},
        success:function(data){
           var links = JSON.parse(data)[0];
            if(links != undefined){
            $('#links-block').html('');
                var link;
                var link_count = links.link.length;
                $('.links_count').html(link_count);
            for(var i = 0;links.link.length > i;i++){
                link = links.link[i];
                $('#links-block').append('' +
                    '<div class="link col-ml-12 col-xs-6 col-sm-4">' +
                    '<span class="link-delete close" data-id="'+link.id+'"><i class="fa fa-times"></i></span>' +
                    '<a href="'+link.link+'" target="_blank">' +
                    '<div class="be-post">' +
                    '<a href="'+link.link+'" target="_blank" class="be-img-block">' +
                    '<iframe src="'+link.link+'"></iframe>' +
                    '</a>' +
                    '<a href="'+link.link+'" target="_blank" class="be-post-title">'+link.title+'</a>' +
                    '<span><a class="be-post-tag">'+link.tags+'</a></span>' +
                    '<div class="author-post">' +
                    '<span>by <a href="page1.html">'+links.name+' '+links.lastname+'</a></span>' +
                    '</div>' +
                    '<div class="info-block">' +
                    '<span><i class="fa fa-eye"></i>'+link.views+'</span>' +
                    '</div>' +
                    '</div>' +
                    '</a>' +
                    '</div>');
            }
                $('iframe body').css({'overflow':'hidden'});
                $('.loading').delay(1000).fadeOut();
            }
        }
    });
}

function save_link(){
    var link_value = $('.link-value').val();
    if(link_value.length > 0){
        $('.add-link').html('<i class="fa fa-refresh fa-spin"></i>');
        $.ajax({
            url: '/link/save',
            type: 'POST',
            data: {_token: CSRF_TOKEN,link:link_value},
            success: function (data) {
                if(data == 'true'){
                    $('.add-link').html('<i class="fa fa-check"></i>');
                    $('#add-link').delay(1000).slideUp(500,function(){
                        $('.link-value').val('');
                        $('.add-link').html('Add');
                        get_links();
                    });

                }else{
                    alert('false');
                }
            },
            error: function () {
                $('.add-link').html('<i class="fa fa-times"></i>').css({'backgroundColor':'#c9302c','borderColor':'#c9302c'});
                $('.link-value').css({'border-color':'#c9302c'});
                setTimeout(function () {
                    $('.link-value').val('').css({'border-color':'#ccc'});
                    $('.add-link').html('Add').css({'backgroundColor':'#2fe387','borderColor':'#2fe387'});
                },3000);


            }
        });
    }
}

$(document).ready(function () {

    get_links();

    $('#add-work-btn').click(function () {
        $('#add-link').slideToggle(300);
        $('.link-value').focus();
    });

    $('.add-link').click(function(){
       save_link();
    });
    $('.link-value').keydown(function(e){
        if(e.which == 13){
            save_link();
        }
    });
    $(document).on('click','.link-delete',function(){
        var link = $(this);
        var id = link.data('id');
        $.ajax({
            url: '/link/delete/'+id,
            type: 'POST',
            data: {_method:'DELETE',_token: CSRF_TOKEN},
            success: function (data) {
                if(data == 'true'){
                    link.parent().fadeOut();
                }else{
                    alert('false');
                }
            }
        });
    });

});
