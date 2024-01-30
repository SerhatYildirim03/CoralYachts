<footer>
    <div class="footer-content">
        <p>Contactinformatie: <a href="mailto:info@coralyachts.com">info@coralyachts.com</a></p>
    </div>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
        // Script om ervoor te zorgen dat datums in het verleden niet gekozen kunnen worden
        document.addEventListener('DOMContentLoaded', function () {
            var today = new Date().toISOString().split('T')[0];
            document.getElementsByName("departure_date")[0].setAttribute('min', today);
            document.getElementsByName("return_date")[0].setAttribute('min', today);
        });
    </script>
</footer>