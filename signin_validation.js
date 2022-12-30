var user_name_veri = "";
var email_name_veri = "";
var mobile_name_veri = "";
function server() {
  document.getElementById("server_side_warning").style.display = "block";
  window.scroll(0, 400);
}
function fname_validation(str) {
  if (str.match(/^[A-Za-z]+$/) && str.length < 15) {
    document.getElementById("fname_warning").innerHTML = "";
  } else {
    document.getElementById("fname_warning").innerHTML =
      "* name only contain charters and don't include space and it must be less then 16 charters";
  }
}

function lname_validation(str) {
  if (str.match(/^[A-Za-z]+$/) && str.length < 15) {
    document.getElementById("lname_warning").innerHTML = "";
  } else {
    document.getElementById("lname_warning").innerHTML =
      "* last name only contain charters and don't include space and it must be less then 16 charters";
  }
}

function uname_validation(str) {
  l = str.length;
  if (l > 4 && l < 11) {
    document.getElementById("uname_warning").innerHTML = "";
  } else {
    document.getElementById("uname_warning").innerHTML =
      "* username length must be between 5-10 charters";
  }
}

function email_validation(str) {
  if (str.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
    document.getElementById("email_warning").innerHTML = "";
  } else {
    document.getElementById("email_warning").innerHTML = "* Invaild email";
  }
}

function password_validation(str) {
  if (
    str.match(
      /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/
    ) &&
    str.length < 15
  ) {
    document.getElementById("password_warning").innerHTML = "";
  } else {
    document.getElementById("password_warning").innerHTML =
      "* Password length must be of minium 8 digits and <br> 1 uppercase letter and <br> 1 lowercase letter and one specail symbol required ";
  }
}
function password_strenth(str) {
  document.getElementById("password_strenth_image").createElement =
    "<center></center>";

  l = str.length;
  if (l < 6) {
    document.getElementById("password_strenth_image").style.width = "50px";

    document.getElementById("password_strenth_image").style.color = "white";
    document.getElementById("password_strenth_image").style.display = "block";
    document.getElementById("password_strenth_image").style.backgroundColor =
      "red";
    document.getElementById("password_strenth_image").innerHTML = "Week";
  } else {
    if (l >= 6) {
      document.getElementById("password_strenth_image").style.width = "100px";

      document.getElementById("password_strenth_image").style.color = "white";
      document.getElementById("password_strenth_image").style.display = "block";
      document.getElementById("password_strenth_image").style.backgroundColor =
        "orange";
      document.getElementById("password_strenth_image").innerHTML = "meduim";
    }
    if (l > 10) {
      document.getElementById("password_strenth_image").style.width = "200px";

      document.getElementById("password_strenth_image").style.color = "white";
      document.getElementById("password_strenth_image").style.display = "block";
      document.getElementById("password_strenth_image").style.backgroundColor =
        "green";
      document.getElementById("password_strenth_image").innerHTML = "strong";
    }
  }
}
function re_password_validation(str) {
  var pass = document.signin_form.pass1.value;

  if (str.match(pass)) {
    document.getElementById("re-password_warning").innerHTML = "";
  } else {
    document.getElementById("re-password_warning").innerHTML =
      "* Password not matched";
  }
}

function pincode_validation(str) {
  if (str.match(/^[0-9]+$/) && str.length < 10) {
    document.getElementById("pincode_warning").innerHTML = "";
  } else {
    document.getElementById("pincode_warning").innerHTML =
      "* Pincode should only contain numbers and don't include space and it must be less then 11 digits";
  }
}

function select_state(str_cou) {
  var countery = new Array();
  countery["india"] = new Array(
    "select state",
    "maharastra",
    "punjab",
    "rajasthan",
    "+91"
  );
  countery["usa"] = new Array("select state", "fetch", "gokil", "royal", "+01");
  countery["canda"] = new Array(
    "select state",
    "hoityo",
    "hell",
    "pipo",
    "+02"
  );
  countery["russia"] = new Array(
    "select state",
    "solud",
    "lodd",
    "rajthan",
    "+33"
  );

  document.getElementById("countery_mobile_code").innerHTML =
    countery[str_cou][4];
  selectField = document.getElementById("state");
  selectField.options.length = 0;
  for (i = 0; i < 4; i++) {
    selectField.options[selectField.length] = new Option(
      countery[str_cou][i],
      countery[str_cou][i]
    );
  }
}

function select_city(str_cou) {
  var state = new Array();

  state["india"] = new Array();

  state["india"]["maharastra"] = new Array(
    "select city",
    "nagpur",
    "mumbai",
    "pune"
  );
  state["india"]["punjab"] = new Array(
    "select city",
    "amritsar",
    "lodiyana",
    "chandighar"
  );
  state["india"]["rajasthan"] = new Array(
    "select city",
    "jaipur",
    "jodhpur",
    "jaisalmer"
  );

  state["usa"] = new Array();

  state["usa"]["fetch"] = new Array(
    "select city",
    "king",
    "calighjt",
    "skfjhksd"
  );
  state["usa"]["gokil"] = new Array("select city", "mokhj", "dsfjk", "mgdtf");
  state["usa"]["royal"] = new Array("select city", "wew", "dfffd", "dsfkos");

  state["canda"] = new Array();

  state["canda"]["hoityo"] = new Array("select city", "sdfsd", "cxc", "cxvxc");
  state["canda"]["hell"] = new Array("select city", "ytuy", "eda", "ujhnj");
  state["canda"]["pipo"] = new Array("select city", "ikuyjk", "qwe", "dgd");

  state["russia"] = new Array();

  state["russia"]["solud"] = new Array("select city", "ewq", "mum", "pue");
  state["russia"]["lodd"] = new Array(
    "select city",
    "amrir",
    "lyana",
    "chaghar"
  );
  state["russia"]["rajthan"] = new Array(
    "select city",
    "jaidfd",
    "jodpu",
    "jaisdder"
  );

  var country = document.signin_form.country.value;
  var sta = document.signin_form.state.value;

  selectField = document.getElementById("city");
  selectField.options.length = 0;

  for (var i = 0; i < state[country][sta].length; i++) {
    selectField.options[selectField.length] = new Option(
      state[country][sta][i],
      state[country][sta][i]
    );
  }
}

function mobile_validation(str) {
  if (str.match(/^[0-9]+$/) && str.length == 10) {
    document.getElementById("mobile_warning").innerHTML = "";
  } else {
    document.getElementById("mobile_warning").innerHTML =
      "* Mobile Number should only contain numbers and it must of 10 digits and don't include space ";
  }
}

function full_checking_validation() {
  var gen;
  gen = document.signin_form.sex.value;
  if (gen == "") {
    document.getElementById("validation_warning").style.display = "block";
    window.scroll(0, 400);
    document.getElementById("gender_warning").innerHTML =
      "*must select your gender";
    return false;
  }

  var bod = document.signin_form.month.value;

  if (bod == "") {
    document.getElementById("gender_warning").innerHTML = "";
    document.getElementById("validation_warning").style.display = "block";
    window.scroll(0, 400);
    document.getElementById("bod_warning").innerHTML =
      "*must select your birth date in proper format";
    return false;
  }

  var fname;
  fname = document.getElementById("fname").value;
  if (fname.match(/^[A-Za-z]+$/) && fname != "" && fname.length < 15) {
    document.getElementById("gender_warning").innerHTML = "";
    document.getElementById("bod_warning").innerHTML = "";
  } else {
    document.getElementById("validation_warning").style.display = "block";
    window.scroll(0, 400);
    return false;
  }
  var lname;
  lname = document.getElementById("lname").value;
  if (lname.match(/^[A-Za-z]+$/) && lname != "" && lname.length < 15) {
  } else {
    document.getElementById("validation_warning").style.display = "block";
    window.scroll(0, 400);
    return false;
  }
  var uname;
  uname = document.getElementById("uname").value;

  if (
    uname !== "" &&
    uname.length < 11 &&
    uname.length > 4 &&
    window.user_name_veri.match("verified")
  ) {
  } else {
    document.getElementById("validation_warning").style.display = "block";
    window.scroll(0, 400);
    return false;
  }

  var email;
  email = document.getElementById("email").value;
  if (
    email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/) &&
    email != "" &&
    window.email_name_veri.match("verified")
  ) {
  } else {
    document.getElementById("validation_warning").style.display = "block";
    window.scroll(0, 400);
    return false;
  }

  var pass1;
  pass1 = document.getElementById("pass1").value;
  if (
    pass1.match(
      /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/
    ) &&
    pass1 != "" &&
    pass1.length < 15
  ) {
  } else {
    document.getElementById("validation_warning").style.display = "block";
    window.scroll(0, 400);
    return false;
  }

  var pass2;
  pass2 = document.getElementById("pass2").value;
  if (pass2.match(pass1) && pass2 != "" && pass1.length < 15) {
  } else {
    document.getElementById("validation_warning").style.display = "block";
    window.scroll(0, 400);
    return false;
  }

  var add1 = document.signin_form.add1.value;

  if (add1 == "") {
    document.getElementById("validation_warning").style.display = "block";
    window.scroll(0, 400);
    document.getElementById("add1_warning").innerHTML = "*Provide address line";
    return false;
  }
  var pincode;
  pincode = document.getElementById("pin").value;
  if (pincode.match(/^[0-9]+$/) && pincode != "" && pincode.length < 10) {
    document.getElementById("add1_warning").innerHTML = "";
  } else {
    document.getElementById("validation_warning").style.display = "block";
    window.scroll(0, 400);
    return false;
  }

  var couu = document.signin_form.country.value;
  if (couu == "") {
    document.getElementById("validation_warning").style.display = "block";
    window.scroll(0, 400);
    document.getElementById("cou_warning").innerHTML =
      " * Must select country,state,city";
    return false;
  }
  var couu = document.signin_form.state.value;

  if (couu == "select state") {
    document.getElementById("validation_warning").style.display = "block";
    window.scroll(0, 400);
    document.getElementById("cou_warning").innerHTML =
      " * Must select your state";
    return false;
  }
  var couu = document.signin_form.city.value;

  if (couu == "select city") {
    document.getElementById("validation_warning").style.display = "block";
    window.scroll(0, 400);
    document.getElementById("cou_warning").innerHTML =
      " * Must select your city";
    return false;
  }

  var mob;
  mob = document.getElementById("mobile").value;
  if (
    mob.match(/^[0-9]+$/) &&
    mob.length == 10 &&
    mob != "" &&
    window.mobile_name_veri.match("verified")
  ) {
  } else {
    document.getElementById("validation_warning").style.display = "block";
    window.scroll(0, 400);
    return false;
  }

  var tac;
  tac = document.getElementById("tanc").checked;

  if (tac == false) {
    document.getElementById("tanc_warning").innerHTML =
      " * You Must Agree  with Our T&C ";
    document.getElementById("validation_warning").style.display = "block";
    window.scroll(0, 400);
    return false;
  } else {
    return true;
  }
}

function user_name_selection(str) {
  if (str.length > 4 && str.length < 11) {
    if (window.XMLHttpRequest) {
      xmlhttp = new XMLHttpRequest();
    } else {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
      if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        if (xmlhttp.responseText.match("yes")) {
          window.user_name_veri = "nonever";
          document.getElementById("uname_exists").style.display =
            "inline-block";
          document.getElementById("uname_not_exists").style.display = "none";
        } else {
          window.user_name_veri = "verified";
          document.getElementById("uname_not_exists").style.display =
            "inline-block";
          document.getElementById("uname_exists").style.display = "none";
        }
      }
    };
    xmlhttp.open(
      "GET",
      "check_username_available_or_not.php?username=" + str,
      true
    );
    xmlhttp.send();
  }
}

function email_selection(str) {
  if (str.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
    if (window.XMLHttpRequest) {
      xmlhttp_email = new XMLHttpRequest();
    } else {
      xmlhttp_email = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp_email.onreadystatechange = function () {
      if (xmlhttp_email.readyState == 4 && xmlhttp_email.status == 200) {
        if (xmlhttp_email.responseText.match("yes")) {
          window.email_name_veri = "nonever";
          document.getElementById("email_exists").style.display =
            "inline-block";
          document.getElementById("email_not_exists").style.display = "none";
        } else {
          window.email_name_veri = "verified";
          document.getElementById("email_not_exists").style.display =
            "inline-block";
          document.getElementById("email_exists").style.display = "none";
        }
      }
    };
    xmlhttp_email.open(
      "GET",
      "check_email_available_or_not.php?emailaddress=" + str,
      true
    );
    xmlhttp_email.send();
  }
}
function mobile_number_selection(str) {
  if (str.match(/^[0-9]+$/) && str.length == 10) {
    if (window.XMLHttpRequest) {
      xmlhttp_email = new XMLHttpRequest();
    } else {
      xmlhttp_email = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp_email.onreadystatechange = function () {
      if (xmlhttp_email.readyState == 4 && xmlhttp_email.status == 200) {
        if (xmlhttp_email.responseText.match("yes")) {
          window.mobile_name_veri = "nonever";
          document.getElementById("mobile_exists").style.display =
            "inline-block";
          document.getElementById("mobile_not_exists").style.display = "none";
        } else {
          window.mobile_name_veri = "verified";
          document.getElementById("mobile_not_exists").style.display =
            "inline-block";
          document.getElementById("mobile_exists").style.display = "none";
        }
      }
    };
    xmlhttp_email.open(
      "GET",
      "check_mobile_available_or_not.php?mobile=" + str,
      true
    );
    xmlhttp_email.send();
  }
  if (!str.match(/^[0-9]+$/) || str.length !== 10) {
    document.getElementById("mobile_not_exists").style.display = "none";
    document.getElementById("mobile_exists").style.display = "none";
  }
}
function empty_officle_form_data() {
  document.signin_form.pass1.value = "";
  document.signin_form.user_name.value = "";
  document.signin_form.email.value = "";
}

/*function auto_fill()
{

    
  
  
    
   document.getElementById("fname").value="KING";
  
 document.getElementById("lname").value="SINGH";
   
   
 document.getElementById("email").value="sinha@gmail.com";

    
document.getElementById("pass1").value="saxud3sldnb";
   
    
 document.getElementById("pass2").value="saxud3sldnb";
  
    
 
  document.signin_form.add1.value="hiqwridss";
    
     
 document.getElementById("pin").value="440008";
   
 
   
  	
  

	document.getElementById("mobile").value="9325112536";
   
  
	
	
	

}*/
