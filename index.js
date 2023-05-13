// have alert message
function sendEmail() {
  const form = document.getElementById("contact-form");
  const btn = form.querySelector("button[type=submit]");

  btn.innerHTML = "Sending...";

  const serviceID = "service_k3qz6ir";
  const templateID = "template_4uj5qua";

  emailjs.sendForm(serviceID, templateID, form).then(
    () => {
      btn.innerHTML = "Send Message";
      form.reset();
      alert("Your message has been sent!");
    },
    (err) => {
      btn.innerHTML = "Send Message";
      alert(JSON.stringify(err));
    }
  );
}

// have alert message
