const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");
var input_text = document.querySelector("#username-login");
var input_password = document.querySelector("#pw-login");
var error_msg = document.querySelector(".error_msg");


sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});

$("#signinform").submit(function (e) {
  e.preventDefault();
  if(input_text.value.length < 1){
    error_msg.style.display = "inline-block";
    input_text.style.border = "1px solid #a10014";
    return false;
  }
  if(input_password.value.length<1){
    error_msg.style.display = "inline-block";
    input_password.style.border = "1px solid #a10014";
    return false;
  }
})

