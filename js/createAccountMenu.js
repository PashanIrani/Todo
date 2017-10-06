$(document).ready(function() {
    var menu = ".createAccountPage";
    var link = "#createAccountLink";
    var speed = '1000';
    var cancel = "#cancel"
    var loginBut = "#loginSubmit";
    $(menu).hide();

    $(link).click(function() {
        showMenu();
    });

    function showMenu() {
        $(menu).hide().slideDown(speed);
        $(loginBut).fadeOut(speed / 2);
        setTimeout(function() {
            canHide = true;
        }, 200);
    }

    function hideMenu() {
        $(menu).slideUp(speed);
        $(loginBut).fadeIn(speed * 2);
    }

    $(cancel).click(function(e) {
        hideMenu();
    });
});
