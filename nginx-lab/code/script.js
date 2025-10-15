const form = document.getElementById("subsForm");

form.addEventListener("submit", function(e) {

    const formData = new FormData(this);

      let alertMessage = "Проверьте введённые данные:\n\n";

      for (const [name, value] of formData.entries()) {

            alertMessage += `<p>${name}: ${value}</p>`;
        }
      alert(alertMessage);
});
