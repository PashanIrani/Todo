/*
 * Author: Pashan Irani
 * Discription: Sets a random bacground color,
 * and appropriate text color to all .highlight classes.
 */
$(document).ready(function() {
    var textChangeNot = false;
    setNewColor();

    function setNewColor() {
        var ranColor = Math.round(getRandom(1, 16));

        if (ranColor == 1) {
            setHighLight("#ff2d62");
        } else if (ranColor == 2) {
            setHighLight("#2d5bff");
        } else if (ranColor == 3) {
            setHighLight("#fff02d");
            invertText();
        } else if (ranColor == 4) {
            setHighLight("#ff782d");
        } else if (ranColor == 5) {
            setHighLight("#ff2d2d");
        } else if (ranColor == 6) {
            setHighLight("#2decff");
            invertText();
        } else if (ranColor == 7) {
            setHighLight("#cf2dff");
        } else if (ranColor == 8) {
            setHighLight("#ea00ff");
            invertText();
        } else if (ranColor == 9) {
            setHighLight("#a1632b");
        } else if (ranColor == 10) {
            setHighLight("#2f693d");
        } else if (ranColor == 11) {
            setHighLight("#5e2c2c");
        } else if (ranColor == 12) {
            setHighLight("#30173e");
        } else if (ranColor == 13) {
            setHighLight("#c4ff8f");
            textChangeNot = true;
            invertText();
        } else if (ranColor == 14) {
            setHighLight("#46003f");
        } else if (ranColor == 15) {
            setHighLight("#00ffff");
            invertText();
        } else {
            setHighLight("#84e027");
            invertText();
        }
    }
    // Returns a random number between min (inclusive) and max (exclusive)
    function getRandom(min, max) {
        return Math.random() * (max - min) + min;
    }

    //sets the highlightColor
    function setHighLight(color) {
        $('.highlight').css('background-color', color);
        $('.err').css('color', '#f4f4f4');
        $('.invert').css('background-color', invertHex(color));
    }

    function invertText() {
        $('.highlight').css('color', '#291600');
        $('.err').css('color', '#291600');
        if(textChangeNot)
          $('.invert').css('color', '#f4f4f4');

    }

    function invertHex(hexnum) {
      var inhex = '#';
        for (i = 1; i < hexnum.length; i++) {
            currentNum = hexToDec(hexnum.charAt(i));

            inhex += decToHex(Math.abs(currentNum - 13));
        }

        return inhex;
    }

    function hexToDec(d) {
        return parseInt(d, 16);
    }

    function decToHex(d) {
        return (d).toString(16).toUpperCase();
    }
});
