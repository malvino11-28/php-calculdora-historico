const form = document.getElementById("form");

form.addEventListener("submit", function (e) {
  e.preventDefault();

  const formData = new FormData(this);
  formData.append("ajax", "true");
  fetch("../views/calc.view.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.text())
    .then((data) => {
      document.getElementById("result").innerHTML = data;
    })
    .catch((error) => {
      console.log(error);
    });
});
