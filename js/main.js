/*
 * Author: Pashan Irani
 * Discription: Does all function for the actual todo app.
 */

$(document).ready(function() {
    var page = document.getElementById('page'); //where todo list is stored
    var inputPage = document.getElementById('inputPage'); //the input form
    var addButton = $('.addButton'); //the add new task button
    var submit = $('.submit'); // submit button to add a new task
    var logout = $("#logout"); //the logout button
    var taskName, checkTaskName; //the input from the form | used for check if input is valid
    var doneColor = "grey"; //text color of a completed task
    var notDoneColor = "#291600"; //text color of a not completed task
    var speed = 500; //animation speed (ms)
    var boxShawdow = "0px 0px 38px -3px rgba(0,0,0,0.59)";
    var isMenuOpen = false;
    var menuCanHide = false;
    $(inputPage).hide(); //hides form when site is first created.

    //the BIG plus Sign
    addButton.click(function() {
        showInput();

    });

    $('body').click(function(e) {

        if (isMenuOpen && menuCanHide) {
            if (e.target.className != "inputMenu") {
                hideInput();
            }
        }
    });

    function hideInput() {
        menuCanHide = false;
        $(inputPage).slideUp(speed);
        addButton.fadeIn(speed * 2);
        isMenuOpen = false;
    }

    function showInput() {
        if (!isMenuOpen) {
            isMenuOpen = true;
            $(inputPage).slideDown(speed);
            addButton.fadeOut(speed / 2);
            $("#taskName").focus(); //auto focues on the input
            setTimeout(function() {
                menuCanHide = true;
            }, 200);

        }
    }
    //The Submbit Button
    submit.click(function() {
        taskName = document.getElementById("taskName").value;
        $("#err").remove(); //Removes any errors from prevoius check
        //Basic HTML structure for each item. ---------------------
        var newitem = $("<p class='task'>" + taskName + "<img  class='tick' src='images/notDone.png' /> </p> <br />").hide().fadeIn(speed);
        //-------------------------

        //Checks if input is valid, and does an appropriate action
        if (isValid(taskName)) {
            $(newitem).insertAfter("#page div");
            clearInput();
            hideInput();

            $("#info").remove(); //removes initial instruction
        } else {
            menuCanHide = false;
            $(inputPage).append($("<span id='err'><br /><i>Please enter a valid task.</i></span>")).hide().fadeIn(speed / 2);
            clearInput();
        }
    });
    //logout
    logout.click(function() {
        window.location.replace("/.."); //replace this?
    });

    //checks if ENTER is pressed
    $("#taskName").focus(function() {
        $(document).keypress(function(e) {
            if (e.which == 13 && isMenuOpen) {
                $('.submit').trigger("click");
            }
        });
    });

    //marks a task complete or not
    $(page).delegate(".tick", "click", function() {
        if ($(this).attr("src") === "images/notDone.png") {
            $(this).attr('src', 'images/done.png');
            done(this);
        } else {
            $(this).attr('src', 'images/notDone.png');
            notDone(this);
        }
    });

    //Clears form
    function clearInput() {
        document.getElementById("taskName").value = '';
    }

    //checks if input is valid
    function isValid(text) {
        checkTaskName = text.replace(/\s+/g, '').length;
        if (checkTaskName != 0) {
            return true;
        } else {
            return false;
        }
    }

    //css styling for completed tasks
    function done(name) {
        $(name).parent().css('color', doneColor);
        $(name).parent().css('text-decoration', 'line-through');
        $(name).parent().css('font-style', 'italic');
    }

    //css styling for not completed tasks
    function notDone(name) {
        $(name).parent().css('color', notDoneColor);
        $(name).parent().css('text-decoration', 'none');
        $(name).parent().css('font-style', 'normal');
    }

});
