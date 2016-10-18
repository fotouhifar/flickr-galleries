/*
 * Author: Amir Far
 * Email fotouhifar@gmail.com.au
 * 
 */

var FLICKR_KEY = '065f5e2cfd6a68b0a5055db556216e67';
var user_id = '148286433@N02'
var flickr = 'https://api.flickr.com/services/rest';
/*
var EMAIL = 'LFG4567845312@yahoo.com';
var FLICKR_SECRET = 'f76b8a6c2a136134';
var username = 'LFG4567845312';
*/
window.onload = function setUp() {
    $.ajax({
        url: flickr,
        type: 'POST',
        data: {
            api_key: FLICKR_KEY,
            user_id: user_id,
            method: 'flickr.galleries.getList'        },
        success: function (response) {
            $xml = $(response);
            $($xml).find('gallery').each(function () {
                id = $(this).attr('id');
                title = $(this).find('title').text();
                description = $(this).find('description').text();
                $("#sidebar").prepend('<div class="gallery-title">' + title + '</div>');
            });
        },
        error: function (errorThrown) {
            console.log(errorThrown);
        }
    });
}

$("#create_new_gallery").change(function () {
    $.ajax({
        url: flickr,
        type: 'POST',
        data: {
            api_key: FLICKR_KEY,
            user_id: user_id,
            method: 'flickr.galleries.create',
            title : $("#create_new_gallery").val()
        },
        success: function (response) {
            $xml = $(response);
            console.log(response);
        },
        error: function (errorThrown) {
            console.log(errorThrown);
        }
    });
});






