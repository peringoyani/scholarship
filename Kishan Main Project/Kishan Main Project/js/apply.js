function passport() {
    let pp = document.getElementById('passportPhoto');
    pp.addEventListener("change",function () {
        let files = pp.files;
        let length = files.length;
        let passport = document.getElementById("passport").innerHTML = length + " Item Selected";
    })
}

function admission() {
    let pp = document.getElementById('addmissionLetter');
    pp.addEventListener("change",function () {
        let files = pp.files;
        let length = files.length;
        let passport = document.getElementById("letter").innerHTML = length + " Item Selected";
    })
}

function fees() {
    let pp = document.getElementById('feesReciepts');
    pp.addEventListener("change",function () {
        let files = pp.files;
        let length = files.length;
        let passport = document.getElementById("fees").innerHTML = length + " Item Selected";
    })
}

function income() {
    let pp = document.getElementById('incomeCertificate');
    pp.addEventListener("change",function () {
        let files = pp.files;
        let length = files.length;
        let passport = document.getElementById("income").innerHTML = length + " Item Selected";
    })
}

function rentOrHostel() {
    let pp = document.getElementById('hostelAndRent');
    pp.addEventListener("change",function () {
        let files = pp.files;
        let length = files.length;
        let passport = document.getElementById("rentOrHostel").innerHTML = length + " Item Selected";
    })
}

function passbook() {
    let pp = document.getElementById('passbookFirstPage');
    pp.addEventListener("change",function () {
        let files = pp.files;
        let length = files.length;
        let passport = document.getElementById("passbook").innerHTML = length + " Item Selected";
    })
}

function letterPad() {
    let pp = document.getElementById('collegeLetterPad');
    pp.addEventListener("change",function () {
        let files = pp.files;
        let length = files.length;
        let passport = document.getElementById("letterPad").innerHTML = length + " Item Selected";
    })
}

function ITR() {
    let pp = document.getElementById('itr');
    pp.addEventListener("change",function () {
        let files = pp.files;
        let length = files.length;
        let passport = document.getElementById("ITR").innerHTML = length + " Item Selected";
    })
}

function rent() {
    let pp = document.getElementById('rentAgreement');
    pp.addEventListener("change",function () {
        let files = pp.files;
        let length = files.length;
        let passport = document.getElementById("rent").innerHTML = length + " Item Selected";
    });

}

function validate() {
    // let pp = document.getElementById('rentAgreement');
    // let xx = pp.value;
    if(document.getElementById("AFront").value == "") {
        alert("Aadhar Card must be uploaded");
    }
    else if(document.getElementById("ABack").value == "") {
        alert("Aadhar Card must be uploaded");
    }
    else if(document.getElementById("fname").value == "") {
        alert("Name must be filled");
    }
    else if(document.getElementById("email").value == "") {
        alert("Email must be filled");
    }
    else if(document.getElementById("passportPhoto").value == "") {
        alert("Your Photo must be uploaded");
    }
    else if(document.getElementById("addmissionLetter").value == "") {
        alert("Admission Letter must be uploaded");
    }
    else if(document.getElementById("feesReciepts").value == "") {
        alert("Fees Reciepts must be uploaded");
    }
    else if(document.getElementById("incomeCertificate").value == "") {
        alert("Income Certificate must be uploaded");
    }
    else if(document.getElementById("passbookFirstPage").value == "") {
        alert("Passbook First Page must be uploaded");
    }
    else if(document.getElementById("itr").value == "") {
        alert("ITR must be uploaded");
    }
    else if(document.getElementById("collegeLetterPad").value == "") {
        alert("College Letter Pad must be uploaded");
    }
    else if(document.getElementById("passbookFirstPage").value == "") {
        alert("Passbook First Page must be uploaded");
    }
}



