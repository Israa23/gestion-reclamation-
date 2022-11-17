let fisrtNameInput = document.getElementById("fisrtName");
let lastNameInput = document.getElementById("lastName");
let emailInput = document.getElementById("email");
let dsInput = document.getElementById("Desiredcarservicedate");
let otInput = document.getElementById("OperationType");
let odInput = document.getElementById("Ownedcar");
let carInput = document.getElementById("id_car");
let id_rdvInput = document.getElementById("id_rdv");



var letters = /^[A-Za-z]+$/;



function nameValidation() {
  if (lastNameInput.value.length < 3) {
    lastNameError = " Le nom doit compter au minimum 3 caractères.";
    document.getElementById("lastName").innerHTML = lastNameError;

    return false;
  }
  if (!lastNameInput.value.match(letters)) {
    lastNameError2 = "Veuillez entrer un nom valid ! (seulement des lettres)";
    // lNameValid2 = false;
    document.getElementById("lastName").innerHTML = lastNameError2;
    return false;
  }
  document.getElementById("LastName").innerHTML =
    "<p style='color:green'> Correct </p>";

  return true;
}

const call = () => {
  // alert("hello");
  let e;
  let t = document.querySelectorAll(".pss").value;
  //t=["123","qqd"];
  console.log(t);
  if (t.indexOf(0) == t.indexOf(1)) {
    //Sconsole.log('0'+t.indexOf[0])
    alert("same");
  } else {
    alert("not");
  }
  e.preventDefault();
};

document.forms["inscription"].addEventListener("submit", function (e) {
  var inputs = document.forms["inscription"];
  var fNameError, lNameError, lNameError2, phoneError, passError, cPassError;

  let fNameValid,
    lNameValid,
    lNameValid2,
    phoneValid,
    passValid,
    cPassValid = false;

  //Traitement cas par cas
  if (lNameInput.value.length < 3) {
    lNameError = " Le nom doit compter au minimum 3 caractères.";
    lNameValid = false;
    document.getElementById("nomEr").innerHTML = lNameError;
  } else if (!lNameInput.value.match(letters)) {
    lNameError2 = "Veuillez entrer un nom valid ! (seulement des lettres)";
    lNameValid2 = false;
    document.getElementById("nomEr").innerHTML = lNameError2;
  } else {
    lNameValid = true;
  }
  if (fNameInput.value.length < 4) {
    fNameError = " Le prénom doit compter au minimum 4 caractères";
    fNameValid = false;
    document.getElementById("prenomEr").innerHTML = fNameError;
  } else {
    fNameValid = true;
  }

  if (isNaN(phoneInput.value)) {
    phoneError = "Le numéro ne doit pas contenir des lettres";
    phoneValid = false;
    document.getElementById("phoneEr").innerHTML = phoneError;
  } else {
    phoneValid = true;
  }
  if (
    !(
      passInput.value.match(/[0-9]/g) &&
      passInput.value.match(/[A-Z]/g) &&
      passInput.value.match(/[a-z]/g) &&
      passInput.value.length >= 10
    )
  ) {
    passError = "Mot de passe faible";
    passValid = false;
    document.getElementById("passEr").innerHTML = passError;
  } else {
    passValid = true;
  }

  if (passInput.value != cPassInput.value) {
    cPassError = "Les mots de passe ne correspondent pas";
    cPassValid = false;
    document.getElementById("cPassEr").innerHTML = cPassError;
  } else {
    cPassValid = true;
  }

  //Traitement générique
  for (var i = 0; i < inputs.length; i++) {
    if (!inputs[i].value) {
      erreur = "Veuillez renseigner tous les champs";

      document.getElementById("erreur").innerHTML = erreur;
    }
  }

  if (
    fNameValid === false ||
    lNameValid === false ||
    phoneValid === false ||
    passValid === false ||
    cPassValid === false ||
    lNameValid2 === false
  ) {
    e.preventDefault();
  } else {
    alert("formulaire envoyé");
  }
});