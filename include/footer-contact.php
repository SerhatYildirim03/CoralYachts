<footer>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2444.9513560123905!2d5.968986312143225!3d52.207931471864235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c7b882276703df%3A0x2c7987fa5413b368!2sAventus%2C%20Laan%20van%20de%20Mensenrechten%20Apeldoorn!5e0!3m2!1snl!2snl!4v1698666446400!5m2!1snl!2snl"
        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    <p>Contactinformatie: <a href="mailto:info@coralyachts.com">info@coraljachts.com</a></p>
    <p>Telefoonnummer: <a href="tel:+3126569696">+31 26569696</a></p> <!-- Voeg je eigen telefoonnummer toe -->

    <div class="social-icons">
        <a href="https://www.instagram.com/jouwprofiel" target="_blank">
            <img src="images/icon-instagram.png" alt="Instagram" />
        </a>
        <a href="https://www.facebook.com/jouwprofiel" target="_blank">
            <img src="images/icon-facebook.png" alt="Facebook" />
        </a>
        <a href="https://twitter.com/jouwprofiel" target="_blank">
            <img src="images/icon-twitter.png" alt="X" />
        </a>
    </div>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
        function sendEmail(event) {
            event.preventDefault(); // Prevent form submission
            Email.send({
                Host: "smtp.elasticemail.com",
                Username: "yasirishier15@gmail.com , serhat_yildirim_03@hotmail.com" , // Replace with your Elastic Email username
                Password: "E58322E2D8E00A9AC62EF00CEEA1FBFF0682", // Replace with your Elastic Email password
                To: "coralyachts00@gmail.com", // Replace with the recipient's email address
                From: document.getElementById("email").value,
                Subject: "New Contact Form Enquiry",
                Body: "Name: " + document.getElementById("name").value
                    + "<br> Email: " + document.getElementById("email").value
                    + "<br> Phone no: " + document.getElementById("phone").value
                    + "<br> Message: " + document.getElementById("message").value
            }).then(function (message) {
                if (message === "OK") {
                    alert("Message Sent Successfully");
                    document.getElementById("name").value = "";
                    document.getElementById("email").value = "";
                    document.getElementById("phone").value = "";
                    document.getElementById("message").value = "";
                } else {
                    alert("Error: " + message);
                }
            });
        }

        // Script om ervoor te zorgen dat datums in het verleden niet gekozen kunnen worden
        document.addEventListener('DOMContentLoaded', function () {
            var today = new Date().toISOString().split('T')[0];
            document.getElementsByName("departure_date")[0].setAttribute('min', today);
            document.getElementsByName("return_date")[0].setAttribute('min', today);
        });
    </script>
</footer>
