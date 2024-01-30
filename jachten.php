<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onze Jachten - Coral Jachten</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/jachten.css">
</head>

<body>
    <?php include_once 'include/header.php'; ?>
    <section class="hero">
        <h1>Onze jachten</h1>
        <p>Wij hebben in totaal <strong>5</strong> prachtige yachten in onze collectie.</p>
        <form id="search-form">
            <input type="text" id="search-input" placeholder="Zoek een jacht...">
            <button type="button" id="search-button">Zoeken</button>
        </form>
    </section>
    <section class="yachts">
        <article class="testYachts">
            <img src="images/jacht1.jpg" alt="Motorjacht afbeelding" class="yacht-image1">
            <h2>Motoryachten</h2>
            <p>Dit motorjacht biedt een krachtige motor en comfortabele accommodaties voor lange reizen op zee.</p>
            <p><strong>Prijs:</strong> €2.912</p>
            <p><strong>Betalingsvoorwaarden:</strong> 30% aanbetaling, saldo voor levering.</p>
        </article>

        <article class="testYachts">
            <img src="images/jacht2.jpg" alt="Zeiljacht afbeelding" class="yacht-image2">
            <h2>Zeilyachten</h2>
            <p>Een elegant zeiljacht dat perfect is voor diegenen die van een traditionele zeilervaring houden.</p>
            <p><strong>Prijs:</strong> €5.450</p>
            <p><strong>Betalingsvoorwaarden:</strong> 50% aanbetaling, saldo binnen 60 dagen.</p>
        </article>

        <article class="testYachts">
            <img src="images/jacht3.jpeg" alt="Superyacht afbeelding" class="yacht-image">
            <h2>Superyachten</h2>
            <p>Dit superyacht biedt ultieme luxe en faciliteiten voor een uitzonderlijke ervaring op het water.</p>
            <p><strong>Prijs:</strong> €2.520</p>
            <p><strong>Betalingsvoorwaarden:</strong> 40% aanbetaling, saldo voor levering.</p>
        </article>

        <article class="testYachts">
            <img src="images/jacht4.webp" alt="Luxe jacht afbeelding" class="yacht-image">
            <h2>Luxeyachten</h2>
            <p>Een jacht met alle voorzieningen om je reis buitengewoon comfortabel en plezierig te maken.</p>
            <p><strong>Prijs:</strong> €3.000</p>
            <p><strong>Betalingsvoorwaarden:</strong> 20% aanbetaling, saldo binnen 90 dagen.</p>
        </article>

        <article class="testYachts">
            <img src="images/jacht5.jpg" alt="Speedboot afbeelding" class="yacht-image5">
            <h2>Speedboten</h2>
            <p>Deze speedboot is ontworpen voor snelheid en een opwindende ervaring op het water.</p>
            <p><strong>Prijs:</strong> €3.500</p>
            <p><strong>Betalingsvoorwaarden:</strong> Volledige betaling vooraf.</p>
        </article>
    </section>

    <?php include_once 'include/footer.php'; ?>

    <script>
        tempfun()
        async function tempfun() {
            let term = sessionStorage.getItem('searchterm')
            let temp = await waitForElm('.testYachts')
            console.log(temp)
            if (term && temp) {
                sessionStorage.removeItem('searchterm')
                articles.forEach(function (article) {
                    var yachtType = article.querySelector('h2').textContent.toLowerCase();
                    console.log(yachtType, " ", term)
                    if (yachtType.includes(term)) {
                        article.style.display = 'show';
                    } else {
                        article.style.display = 'none';
                    }
                });
            }
        }


        document.getElementById('search-button').addEventListener('click', function () {
            var searchTerm = document.getElementById('search-input').value.toLowerCase();
            var articles = document.querySelectorAll('.yachts article');

            articles.forEach(function (article) {
                var yachtType = article.querySelector('h2').textContent.toLowerCase();

                if (yachtType.includes(searchTerm)) {
                    article.style.display = 'show';
                } else {
                    article.style.display = 'none';
                }
            });
        });

        async function waitForElm(selector) {
            return new Promise(resolve => {
                if (document.querySelector(selector)) {
                    return resolve(document.querySelector(selector));
                }

                const observer = new MutationObserver(mutations => {
                    if (document.querySelector(selector)) {
                        observer.disconnect();
                        resolve(document.querySelector(selector));
                    }
                });

                observer.observe(document.body, {
                    childList: true,
                    subtree: true
                });
            });
        }
    </script>

</body>

</html>
