function sendEmail() {
  var params = {
    name: document.getElementById("name").value,
    email: document.getElementById("email").value,
    subject: document.getElementById("subject").value,
  };

  const serviceID = "service_k3qz6ir";
  const templateID = "template_4uj5qua";

  emailjs
    .send(serviceID, templateID, params)
    .then((res) => {
      document.getElementById("name").value = "";
      document.getElementById("email").value = "";
      document.getElementById("subject").value = "";
      console.log(res);
      alert("nice");
    })
    .catch((err) => console.log(err));
}
