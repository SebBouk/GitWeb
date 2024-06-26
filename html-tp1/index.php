<!DOCTYPE html>
<html lang="fr">
  <head>
    <link rel="stylesheet" href="assets/styles.css" />
    <link rel="stylesheet" href="assets/fonts/LovelyHome.ttf" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Frouzins Tournefeuille Taekwondo</title>
    <script src="java.js" defer></script>
  </head>

  <body>
    <header>
      <h1>Frouzins Tournefeuille Taekwondo</h1>
    </header>
    <nav>
      <ul class = "mainMenu">
        <li>
          <a class="menu active" href="#homes" data-target="homes"> Acceuil </a>
        </li>
        <li>
            <a href="#entraineur" data-target="entraineur"> Staff </a>
          </li>
        <li>
          <a class="menu" href="#actus" data-target="actus"> Actus </a>
        </li>
        <li>
          <a class="menu" href="#horaires" data-target="horaires"> Horaires </a>
        </li>
      </ul>
    </nav>
    <main>
      <section>
        <article id="homes" class="show">
          <h3>Frouzins Taekwondo</h3>
          <p>
            Le Frouzins Athletic Club Taekwondo est présidé par Mr Vigilant Rony
            et accueille ses adhérents depuis 2008 au Dojo - 10 Avenue de
            Gascogne 31270 Frouzins (sur le parking de la Salle des fêtes
            Latapie).<br />
            <br />C'est donc dans des locaux accueillants que Fanny Burguion, le
            professeur, enseigne sa passion à 190 licenciés, petits et grands.
            Cette association se complète avec une Trésorier et un secrétaire
            bénévoles.<br />
            <br />Dès 3 ans révolus, les petits taekwondoïstes peuvent venir se
            défouler sur les tapis rouges, bleus et jaunes du Dojang. Fanny est
            diplômée dans le handisport également, donc les enfants en situation
            de handicaps physiques et mentaux sont intégrés. Mais aussi des
            cours combat avec d'excellents résultats.<br />
            <br />Beaucoup de jeunes se sont pris de passion pour ce sport et
            ont évolué jusqu'à la ceinture noire, grâce au dynamisme et à la
            volonté de leur "maître" Fanny Burguion.
          </p>
          <h3>Tournefeuille Taekwondo</h3>
          <p>
            Le club de Tournefeuille a vu le jour en 2005 sous la direction
            sportive de Fanny BURGUION diplômée d'état.<br />
            <br />Aujourd'hui présidé par Jeremy Burguion avec des bénévoles
            souriants et disponibles comme Katia Pene, Severine brunet, Fabrice
            Rodriguez et Christian COUMES Un club loisirs où la bonne ambiance
            et l'occasion de se défouler sont présents.<br />
            <br />Fanny est diplômée dans le handisport également donc les
            enfants en situation de handicaps mentaux sont intégrés mais aussi
            des cours combat avec de bons résultats: Selma Sahmi double
            championne de France en minime bronze en benjamine Jean François
            Toure champion de France junior et 3 fois médaille de bronze en -21
            ans Imran Habibi champion de France minime Assya Ben saad bronze en
            France cadette Lisea vice championne de France en minime et bronze
            en benjamine par équipe Adhe Koukoui champion de France veteran.
          </p>
          <div id="entraineur">
            <ul class="carousel-items">
              <li class="carousel-item">
                <div class="fanny">
                  <img src="assets/img.jpg" alt="Fanny Burguion" />
                  <h5>BURGUION FANNY</h5>
                  <ul>
                    <li>8 fois championne de France consécutive</li>
                    <li>2 fois vice championne de France</li>
                    <li>1 fois médaillée de bronze championnat de France</li>
                    <li>
                      Podiums internationaux et quart de finaliste au
                      championnat d'Europe junior
                    </li>
                    <li>Ceinture noire 2eme dan</li>
                  </ul>
                </div>
              </li>
              <li class="carousel-item">
                <div class="jeremy">
                  <img src="assets/jeremy.webp" alt="Jeremy Burguion" />
                  <h5>BURGUION JEREMY</h5>
                  <ul>
                    <li>5 fois champion de France combat</li>
                    <li>Plusieurs fois médaillé internationnal</li>
                    <li>2nd à la coupe du monde francophone en senior</li>
                    <li>Ceinture noire 1re dan</li>
                  </ul>
                </div>
              </li>
              <li class="carousel-item">
                <div class="thomas">
                  <img src="assets/thomas.webp" alt="Boé Thomas" />
                  <h5>BOE THOMAS</h5>
                  <ul>
                    <li>2 fois champion de France artistique</li>
                    <li>2 fois vice champion de France artistique</li>
                    <li>2 fois premier au région artistique.</li>
                    <li>Ceinture noire 3eme dan</li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </article>
        <article id="actus"></article>
        <article id="horaires">
          <div class="slide-container">
            <div class="custom-slider fade">
              <div class="slide-index">1 / 2</div>
              <img
                class="slide-img"
                src="assets/horaires/frouzins.jpg.webp"
                alt="Horaires Frouzins"
              />
              <div class="slide-text">Horraires Frouzins</div>
            </div>
            <div class="custom-slider fade">
              <div class="slide-index">2 / 2</div>
              <img
                class="slide-img"
                src="assets/horaires/tournefeuille.jpg.webp"
                alt="Horaires Tournefeuille"
              />
              <div class="slide-text">Horaires Tournefeuille</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
          </div>
          <br />
          <div class="slide-dot">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
          </div>
        </article>
      </section>
    </main>
  </body>
  <footer>
    <?php include 'footer.php';?>
  </footer>
</html>
