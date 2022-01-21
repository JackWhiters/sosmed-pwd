//untuk melihat preview foto poster
var input = document.querySelector("#select_post_img");

input.addEventListener("change", preview);

function preview() {
  var fileobject = this.files[0];
  var filereader = new FileReader();

  filereader.readAsDataURL(fileobject);

  filereader.onload = function () {
    var image_src = filereader.result;
    var image = document.querySelector("#post_img");
    image.setAttribute("src", image_src);
    image.setAttribute("style", "display:");
  };
}

//untuk follow user

$(".followbtn").click(function () {
  var user_id_v = $(this).data("userId");
  var button = this;
  $(button).attr("disabled", true);

  $.ajax({
    url: "assets/php/ajax.php?follow",
    method: "post",
    dataType: "json",
    data: { user_id: user_id_v },
    success: function (response) {
      if (response.status) {
        // $(button).attr('disabled', true);
        $(button).data("userId", 0);
        $(button).html('<i class="bi bi-check-circle-fill"></i> Followed');
      } else {
        $(button).attr("disabled", false);
        alert("Ada yang salah, Coba beberapa saat lagi");
      }
    },
  });
});

//untuk unfollow user

$(".unfollowbtn").click(function () {
  var user_id_v = $(this).data("userId");
  var button = this;
  $(button).attr("disabled", true);

  $.ajax({
    url: "assets/php/ajax.php?unfollow",
    method: "post",
    dataType: "json",
    data: { user_id: user_id_v },
    success: function (response) {
      if (response.status) {
        // $(button).attr('disabled', true);
        $(button).data("userId", 0);
        $(button).html('<i class="bi bi-check-circle-fill"></i> Unfollowed');
      } else {
        $(button).attr("disabled", false);
        alert("Ada yang salah, Coba beberapa saat lagi");
      }
    },
  });
});

//Untuk Like post
$(".like_btn").click(function () {
  // alert('testing');
  // return
  var post_id_v = $(this).data("postId");
  var button = this;
  $(button).attr("disabled", true);

  $.ajax({
    url: "assets/php/ajax.php?like",
    method: "post",
    dataType: "json",
    data: { post_id: post_id_v },
    success: function (response) {
      console.log(response);
      if (response.status) {
        $(button).attr("disabled", false);

        // $(button).data('userId', 0);
        // $(button).attr('class', 'bi bi-heart-fill unlike_btn')
        // button = null;
        $(button).hide();
        $(button).siblings(".unlike_btn").show();
        location.reload();
      } else {
        $(button).attr("disabled", false);
        alert("Ada yang salah, Coba beberapa saat lagi");
      }
    },
  });
});

//Untuk Unlike post
$(".unlike_btn").click(function () {
  // alert('testing');
  // return
  var post_id_v = $(this).data("postId");
  var button = this;
  $(button).attr("disabled", true);

  $.ajax({
    url: "assets/php/ajax.php?unlike",
    method: "post",
    dataType: "json",
    data: { post_id: post_id_v },
    success: function (response) {
      console.log(response);
      if (response.status) {
        $(button).attr("disabled", false);

        // $(button).data('userId', 0);
        // $(button).attr('class', 'bi bi-heart like_btn')
        // button = null;
        $(button).hide();
        $(button).siblings(".like_btn").show();
        location.reload();
      } else {
        $(button).attr("disabled", false);
        alert("Ada yang salah, Coba beberapa saat lagi");
      }
    },
  });
});

//untuk menambahkan komentar
$(".add-comment").click(function () {
  // alert('testing');
  // return
  var button = this;
  var comment_v = $(button).siblings(".comment-input").val();
  if (comment_v == "") {
    return 0;
  }
  var post_id_v = $(this).data("postId");
  var cs = $(this).data("cs");
  var page = $(this).data("page");
  // $("#"+cs).append('test');
  $(button).attr("disabled", true);
  $(button).siblings(".comment-input").attr("disabled", true);

  $.ajax({
    url: "assets/php/ajax.php?addcomment",
    method: "post",
    dataType: "json",
    data: { post_id: post_id_v, comment: comment_v },
    success: function (response) {
      console.log(response);

      if (response.status) {
        $(button).attr("disabled", false);
        $(button).siblings(".comment-input").attr("disabled", false);
        $(button).siblings(".comment-input").val("");
        $("#" + cs).append(response.comment);
        $(".nocomment").hide();
        if (page == "wall") {
          location.reload();
        }
      } else {
        $(button).attr("disabled", false);
        button.siblings(".comment-input").attr("disabled", false);

        alert("Ada yang salah, Coba beberapa saat lagi");
      }
    },
  });
});

//untuk menampilkan hasil pencarian
var sr = false;
$("#search").focus(function () {
  $("#search_result").show();
});

//untuk menutup hasil pencarian
$("#close_search").click(function () {
  $("#search_result").hide();
});

//untuk manajement pencarian
$("#search").keyup(function () {
  var keyword_v = $(this).val();

  $.ajax({
    url: "assets/php/ajax.php?search",
    method: "post",
    dataType: "json",
    data: { keyword: keyword_v },
    success: function (response) {
      console.log(response);
      if (response.status) {
        $("#sra").html(response.users);
      } else {
        $("#sra").html('<p class="text-center text-muted">no user found !</p>');
      }
    },
  });
});

jQuery(document).ready(function () {
  jQuery("time.timeago").timeago();
});

$("#show_not").click(function () {
  $.ajax({
    url: "assets/php/ajax.php?notread",
    method: "post",
    dataType: "json",
    success: function (response) {
      if (response.status) {
        $(".un-count").hide();
      }
    },
  });
});

//untuk tombol unblock
$(".unblockbtn").click(function () {
  var user_id_v = $(this).data("userId");
  var button = this;
  $(button).attr("disabled", true);
  console.log("clicked");
  $.ajax({
    url: "assets/php/ajax.php?unblock",
    method: "post",
    dataType: "json",
    data: { user_id: user_id_v },
    success: function (response) {
      console.log(response);
      if (response.status) {
        location.reload();
      } else {
        $(button).attr("disabled", false);

        alert("ada yang salah coba beberapa saat lagi");
      }
    },
  });
});


//variable deklarasi user untuk chat berdasarkan id
let chatting_user_id = 0;

$(".chatlist_item").click();
function popchat(user_id) {
  $("#user_chat").html(`<div class="spinner-border text-center" role="status"></div>`);
        $("#chatter_username").text('Tunggu Sebentar..');
        $("#chatter_name").text('');
        $("#chatter_pic").attr('src', 'assets/images/profile/default_profile.jpg');
  chatting_user_id = user_id;
  $("#sendmsg").attr('data-user-id',user_id);
  console.log(user_id);
}


$("#sendmsg").click(function () {
  let user_id = chatting_user_id;
  let msg = $("#msginput").val();
  if(!msg) return;
  // console.log(user_id);
  // console.log(msg);

  $("#sendmsg").attr("disabled",true);
  $("#msginput").attr("disabled",true);
  $.ajax({
    url:'assets/php/ajax.php?kirimpesan',
    method:'post',
    dataType:'json',
    data:{ user_id: user_id,msg: msg},
    success: function(response) {
      console.log(response);
     if(response.status){
      $("#sendmsg").attr("disabled",false);
      $("#msginput").attr("disabled",false);
      $("#msginput").val('');
     }
     else{
        alert("ada yang salah, silahkan coba lagi");  
     }
      }
  })
})

function synmsg() {
  $.ajax({
    url:'assets/php/ajax.php?pesan',
    method:'post',
    dataType:'json',
    data:{ chatter_id: chatting_user_id},
    success: function(response) {
      console.log(response);
      $("#chatlist").html(response.chatlist);
      if(response.newmsgcount==0)
      {
        $("#msgcounter").hide();
      } else {
        $("#msgcounter").show();
        $("#msgcounter").html("<small>"+ response.newmsgcount + "</small>");
      }
      // $("#user_chat").html(response.chat.msgs);
      if(response.blocked)
      {
        $("#msgsender").hide();
        $("#blocked_chat").show();
      } else {
        $("#msgsender").show();
        $("#blocked_chat").hide();
      }

      if(chatting_user_id!=0)
      {
        $("#user_chat").html(response.chat.msgs);
        $("#chatter_username").text(response.chat.userdata.username);
        $("#chatter_name").text(response.chat.userdata.first_name +' ' + response.chat.userdata.last_name);
        $("#chatter_pic").attr('src', 'assets/images/profile/' + response.chat.userdata.profile_pic);
      }

    }
  })
}

//interval refresh memanggil ulang fungsi synchronous pesan
setInterval(() => {
  synmsg();
}, 1000)

