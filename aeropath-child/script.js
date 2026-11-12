document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("inquiry-form");
    const formMessage = document.getElementById("form-message");

    if (!form || !formMessage) {
        return;
    }

    // Capture UTM parameters from the URL.
    const params = new URLSearchParams(window.location.search);
    const utmSource = params.get("utm_source") || "";
    const utmCampaign = params.get("utm_campaign") || "";

    // Populate hidden form fields.
    const utmSourceField = document.getElementById("utm-source");
    const utmCampaignField = document.getElementById("utm-campaign");

    if (utmSourceField) {
        utmSourceField.value = utmSource;
    }

    if (utmCampaignField) {
        utmCampaignField.value = utmCampaign;
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

        // Track successful demo inquiry and campaign attribution.
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
            event: "demo_inquiry_success",
            form_name: "AeroPath Training Inquiry",
            program_selected: program,
            utm_source: utmSource,
            utm_campaign: utmCampaign
        });

        form.reset();
    });
});

// Automatically select the program when Request Information is clicked.
document.addEventListener("DOMContentLoaded", function () {
    const programDropdown = document.getElementById("program");
    const programLinks = document.querySelectorAll("[data-program]");

    programLinks.forEach(function (link) {
        link.addEventListener("click", function () {
            if (programDropdown) {
                programDropdown.value = link.getAttribute("data-program");
            }
        });
    });
});
