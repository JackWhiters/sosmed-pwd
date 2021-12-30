//untuk melihat preview foto poster
var input = document.querySelector("#select_post_img");

input.addEventListener("change",preview);

function preview()
{
    var fileobject = this.files[0];
    var filereader = new FileReader();

    filereader.readAsDataURL(fileobject);

    filereader.onload = function()
    {
        var image_src = filereader.result;
        var image = document.querySelector("#post_img");
        image.setAttribute('src',image_src);
        image.setAttribute('style','display:');
    }
}


//untuk follow user

$(".followbtn").click(function(){
    var user_id_v = $(this).data('userId');
    var button = this;
    $(button).attr('disabled', true);

    $.ajax({
        url:'assets/php/ajax.php?follow',
        method:'post',
        dataType:'json',
        data:{user_id: user_id_v },
        success: function (response) {
            if(response.status) {
                // $(button).attr('disabled', true);
                $(button).data('userId', 0);
                $(button).html('<i class="bi bi-check-circle-fill"></i> Followed');
            }
            else
            {
                $(button).attr('disabled', false);
                alert("Ada yang salah, Coba beberapa saat lagi");
            }
        }

    });
});

//untuk unfollow user

$(".unfollowbtn").click(function(){
    var user_id_v = $(this).data('userId');
    var button = this;
    $(button).attr('disabled', true);

    $.ajax({
        url:'assets/php/ajax.php?unfollow',
        method:'post',
        dataType:'json',
        data:{user_id: user_id_v },
        success: function (response) {
            if(response.status) {
                // $(button).attr('disabled', true);
                $(button).data('userId', 0);
                $(button).html('<i class="bi bi-check-circle-fill"></i> Unfollowed');
            }
            else
            {
                $(button).attr('disabled', false);
                alert("Ada yang salah, Coba beberapa saat lagi");
            }
        }

    });
});