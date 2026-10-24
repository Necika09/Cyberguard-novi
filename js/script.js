document.addEventListener("DOMContentLoaded", function () {
  const cookieBanner = document.getElementById("cookie-banner");
  const acceptBtn = document.getElementById("accept-cookies");

  if (cookieBanner && acceptBtn) {
    if (localStorage.getItem("cookies_accepted") === "true") {
      cookieBanner.classList.add("hidden");
    }

    acceptBtn.addEventListener("click", function () {
      localStorage.setItem("cookies_accepted", "true");
      cookieBanner.classList.add("hidden");
    });
  }

  const newsletterForms = document.querySelectorAll(".newsletter-form");
  newsletterForms.forEach(function (form) {
    form.addEventListener("submit", function (e) {
      e.preventDefault();
      const emailInput = form.querySelector('input[type="email"]');
      if (emailInput && emailInput.value.trim() !== "") {
        alert(
          "Hvala na prijavi! Vaš email (" +
            emailInput.value +
            ") je uspješno dodan na listu.",
        );
        emailInput.value = "";
      }
    });
  });

  const contactForms = document.querySelectorAll(".contact-form");

  contactForms.forEach(function (form) {
    const messageField = form.querySelector("textarea");

    if (!messageField) return;

    let errorElem = messageField.parentElement.querySelector(".field-error");
    if (!errorElem) {
      errorElem = document.createElement("small");
      errorElem.className = "field-error";
      messageField.parentElement.appendChild(errorElem);
    }

    messageField.addEventListener("input", function () {
      if (messageField.value.trim().length >= 20) {
        errorElem.textContent = "";
        messageField.classList.remove("input-error");
      }
    });

    form.addEventListener("submit", function (e) {
      const messageText = messageField.value.trim();

      if (messageText.length < 20) {
        e.preventDefault();
        const remaining = 20 - messageText.length;
        errorElem.textContent = `Poruka mora sadržavati najmanje 20 znakova (nedostaje još ${remaining}).`;
        messageField.classList.add("input-error");
        messageField.focus();
        return;
      }

      errorElem.textContent = "";
      messageField.classList.remove("input-error");
      e.preventDefault();
      alert(
        "Hvala vam na upitu! Naš tim za informacijsku sigurnost javit će vam se u najkraćem roku.",
      );
      form.reset();
    });
  });

  const menuToggle = document.getElementById("menu-toggle");
  const mainNav = document.getElementById("main-nav");

  if (menuToggle && mainNav) {
    menuToggle.addEventListener("click", function () {
      mainNav.classList.toggle("open");
      menuToggle.textContent = mainNav.classList.contains("open") ? "✕" : "☰";
    });
  }
});
