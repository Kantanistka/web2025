const resultDiv = document.getElementById("result");

form.addEventListener("submit", function(e) {
    e.preventDefault();

    //const formData = new FormData(this);

    let output = "<h3>🧩 подписка успешно оформлена</h3>";


    resultDiv.innerHTML = output;
});
