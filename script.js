const form = document.getElementById("contactForm");
const responseDiv = document.getElementById("response");

form.addEventListener("submit", function(e) {
    e.preventDefault();

    const formData = new FormData(form);

    fetch("save.php", {
        method: "POST",
        body: formData
    })
    .then(res => res.text())
    .then(data => {
        responseDiv.innerHTML = data;
        form.reset();
    })
    .catch(err => {
        responseDiv.innerHTML = "Error submitting form.";
    });
});
