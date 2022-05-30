function mainValidate() {
    var m = false;
    $.each($('select'), function () {
        if ($(this).val() == 'open') {
            m = true;
            document.getElementById("specialDiv").style.display = "block";
            document.getElementById("specialDiv2").style.display = "none";
            document.getElementById("SMyalert5").style.display = "none";
        }
        else if ($(this).val() == 'st') {
            document.getElementById("specialDiv").style.display = "none";
            document.getElementById("specialDiv2").style.display = "block";
            document.getElementById("SMyalert5").style.display = "none";
        }
        else if ($(this).val() == 'sc' || $(this).val() == 'sebc') {
            document.getElementById("specialDiv2").style.display = "none";
            document.getElementById("specialDiv").style.display = "none";
            document.getElementById("SMyalert5").style.display = "block";
        }
    });

    return (m);
    return check;
}
function SselectValidate() {
    var m = false;
    $.each($('select'), function () {
        if ($(this).val() == '>2.5_lakh') {
            m = true;
            document.getElementById("SMyalert").style.display = "block";
            document.getElementById("SMyalert2").style.display = "none";

        }
        else if ($(this).val() == '<2.5_lakh') {
            document.getElementById("SMyalert").style.display = "none";
            document.getElementById("SMyalert2").style.display = "block";
        }
    });

    return (m);
    return check;
}

function SselectValidate2() {
    var m = false;
    $.each($('select'), function () {
        if ($(this).val() == '>2.5_lakh') {
            m = true;
            document.getElementById("SMyalert2").style.display = "block";
        }
        else if ($(this).val() == '<2.5_Lakh') {
            document.getElementById("SMyalert2").style.display = "block";
        }
    });

    return (m);
    return check;
}

function SgenderValidate() {
    var k = false;
    $.each($('select'), function () {
        if ($(this).val() == 'male') {
            k = true;

            document.getElementById("Sincome").style.display = "block";
            document.getElementById("Sincome2").style.display = "none";
            document.getElementById("SMyalert2").style.display = "none";
            document.getElementById("SMyalert").style.display = "none";
        }
        else if ($(this).val() == 'female') {
            document.getElementById("Sincome").style.display = "none";
            document.getElementById("Sincome2").style.display = "block";
            document.getElementById("SMyalert2").style.display = "none";
            document.getElementById("SMyalert").style.display = "none";

        }
    });

    return (k);
    return check

}
