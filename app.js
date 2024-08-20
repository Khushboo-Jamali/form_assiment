// const togglepassword = document.querySelector("#togglePassword");
// const password = document.querySelector("#id_password");
// togglepassword.addEventListener("click", function (e) {
//   const type =
//     password.getAttribute("type") === "password" ? "text" : "password";
//   const tittle =
//     togglepassword.getAttribute("tittle") == "show password"
//       ? "hide password"
//       : "show password";
//   this.classList.toggle("fa-eye-slash");
// });
$(document).ready(function () {
  const password = $("#password");
  const cpassword = $("#cpassword");

  $("#eye").click(function () {
    if (password.prop("type") == "password") {
      $(this).removeClass("fa-eye");
      $(this).addClass("fa-eye-slash");
      password.attr("type", "text");
    } else {
      $(this).removeClass("fa-eye-slash");
      $(this).addClass("fa-eye");
      password.attr("type", "password");
    }
  });
  $("#Eye").click(function () {
    if (cpassword.prop("type") == "password") {
      $(this).removeClass("fa-eye");
      $(this).addClass("fa-eye-slash");
      cpassword.attr("type", "text");
    } else {
      $(this).removeClass("fa-eye-slash");
      $(this).addClass("fa-eye");
      cpassword.attr("type", "password");
    }
  });
});
