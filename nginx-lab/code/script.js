const form = document.getElementById("subsForm");

const resultDiv = document.getElementById("result");

form.addEventListener("submit", function(e) {
    e.preventDefault();

    const formData = new FormData(this);

    let output = "<h3>🧩 подписка успешно оформлена</h3>";

      for (const [name, value] of formData.entries()) {

            let displayValue = value;
            output += `<p>${name}: ${displayValue}</p>`;
        }


    resultDiv.innerHTML = output;
});
