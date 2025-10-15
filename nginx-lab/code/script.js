const form = document.getElementById("subsForm");

form.addEventListener("submit", function(e) {

    const formData = new FormData(this);

    let output = "<h3>🧩 подписка успешно оформлена</h3>";

      for (const [name, value] of formData.entries()) {

            output += `<p>${name}: ${value}</p>`;
        }

});
