// $(document).ready(function(){
//   console.log('vid.js')
//   $('.modal-vid-area').on('shown.bs.modal', function () {
//     $('.cr-main-video')[0].play();
//     $(".cr-main-video-btn-play").css({
//       display: "none",
//     });
//     $(".cr-main-video-btn-pause").css({
//       display: "inline-block",
//     });
//     console.log('modal opened')
// });
// })
$(document).ready(function(){
    if($('.cr-main-video')){
        $('.cr-main-video').css({
            'display':'none',
        })
    }
})
