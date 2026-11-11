
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("inquiry-form");
    const formMessage = document.getElementById("form-message");

    if (!form || !formMessage) {
        return;
    }

    form.addEventListener("submit", function (event) {
        event.preventDefault();

        const name = document.getElementById("full-name").value.trim();
        const email = document.getElementById("email").value.trim();
        const program = document.getElementById("program").value;

        if (!name || !email || !program) {
            formMessage.textContent = "Please complete all required fields.";
            formMessage.style.color = "#b42318";
            return;
        }

        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }

        formMessage.textContent =
            "Thanks, " + name + "! Your demo inquiry was completed successfully. No information was sent.";

        formMessage.style.color = "#176b52";

        form.reset();
    });
});
