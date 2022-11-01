$('#close-btn').click(function () {
    $('.alert').removeClass("show");
    $('.alert').addClass("hide");

})
setTimeout(function () {
    $('.alert').removeClass("show");
    $('.alert').addClass("hide");
    $('.alert').addClass("hideAlert");
}, 3000);