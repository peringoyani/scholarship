function mainValidate() {
    var m = false;
    $.each($('select'), function () {
        if ($(this).val() == 'open') {
            m = true;
            document.getElementById("specialDiv").style.display = "block";
            document.getElementById("specialDiv2").style.display = "none";
        }
        else if ($(this).val() == 'st') {
            document.getElementById("specialDiv").style.display = "none";
            document.getElementById("specialDiv2").style.display = "block";
        }
    });

    return (m);
    return check;
}
function selectValidate() {
    var m = false;
    $.each($('select'), function () {
        if ($(this).val() == '>6_lakh') {
            m = true;
            document.getElementById("Myalert").style.display = "block";
            document.getElementById("qualification").style.display = "none";
            document.getElementById("Myalert3").style.display = "none";
            document.getElementById("Myalert2").style.display = "none";
            document.getElementById("Myalert4").style.display = "none";
        }
        else if ($(this).val() == '<6_lakh') {
            document.getElementById("Myalert").style.display = "none";
            document.getElementById("qualification").style.display = "block";
        }
    });

    return (m);
    return check;
}

function selectValidate2() {
    var m = false;
    $.each($('select'), function () {
        if ($(this).val() == '<6_lakh') {
            m = true;
            document.getElementById("qualification").style.display = "block";
            document.getElementById("Myalert4").style.display = "none";
        }
        else if ($(this).val() == '6_to_8_lakh') {
            document.getElementById("Myalert4").style.display = "block";
            document.getElementById("Myalert3").style.display = "none";
            document.getElementById("Myalert2").style.display = "none";
            document.getElementById("Myalert").style.display = "none";
            document.getElementById("qualification").style.display = "none";
        }
    });

    return (m);
    return check;
}

function scholarshipValidate() {
    var s = false;
    $.each($('select'), function () {
        if ($(this).val() == '>80_percentile') {
            s = true;
            document.getElementById("Myalert2").style.display = "block";
            document.getElementById("Myalert3").style.display = "none";
            document.getElementById("Myalert").style.display = "none";
            document.getElementById("Myalert4").style.display = "none";
        }
        else if ($(this).val() == '<80_percentile') {
            document.getElementById("Myalert3").style.display = "block";
            document.getElementById("Myalert2").style.display = "none";
            document.getElementById("Myalert").style.display = "none";
            document.getElementById("Myalert4").style.display = "none";
        }
    });

    return (s);
    return check;
}

function genderValidate() {
    var k = false;
    $.each($('select'), function () {
        if ($(this).val() == 'male') {
            k = true;
            document.getElementById("qualification").style.display = "none";
            document.getElementById("income").style.display = "block";
            document.getElementById("income2").style.display = "none";
            document.getElementById("Myalert4").style.display = "none";
            document.getElementById("Myalert3").style.display = "none";
            document.getElementById("Myalert2").style.display = "none";
            document.getElementById("Myalert").style.display = "none";

        }
        else if ($(this).val() == 'female') {
            document.getElementById("income").style.display = "none";
            document.getElementById("qualification").style.display = "none";
            document.getElementById("income2").style.display = "block";
            document.getElementById("Myalert4").style.display = "none";
            document.getElementById("Myalert3").style.display = "none";
            document.getElementById("Myalert2").style.display = "none";
            document.getElementById("Myalert").style.display = "none";
        }
    });

    return (k);
    return check

}