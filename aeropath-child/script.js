
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

        // Notify Google Tag Manager of a successful demo inquiry.
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
            event: "demo_inquiry_success",
            form_name: "AeroPath Training Inquiry",
            program_selected: program
        });

        form.reset();
    });
});
