<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="assets/images/favicon-32x32.png"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Eamon Napier's Portfolio</title>
  </head>
  <body>
    <header class="header">
      <h2 class="visually-hidden">Header</h2>
      <div class="wrapper">
        <nav class="header__nav">
          <h2 class="visually-hidden">Navigation</h2>
          <a href="/" class="header__home">
            eamonnapier
            <span class="visually-hidden">(to home page)</span>
          </a>
          <a href="https://github.com/enapier06" class="header__social github">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="25"
              height="24"
              aria-labelledby="socialGitHub"
              role="img"
            >
              <title id="socialGitHub">GitHub</title>
              <path
                fill="#FFF"
                fill-rule="evenodd"
                d="M12.304 0C5.506 0 0 5.506 0 12.304c0 5.444 3.522 10.042 8.413 11.672.615.108.845-.261.845-.584 0-.292-.015-1.261-.015-2.291-3.091.569-3.891-.754-4.137-1.446-.138-.354-.738-1.446-1.261-1.738-.43-.23-1.046-.8-.016-.815.97-.015 1.661.892 1.892 1.261 1.107 1.86 2.876 1.338 3.584 1.015.107-.8.43-1.338.784-1.646-2.738-.307-5.598-1.368-5.598-6.074 0-1.338.477-2.446 1.26-3.307-.122-.308-.553-1.569.124-3.26 0 0 1.03-.323 3.383 1.26.985-.276 2.03-.415 3.076-.415 1.046 0 2.092.139 3.076.416 2.353-1.6 3.384-1.261 3.384-1.261.676 1.691.246 2.952.123 3.26.784.861 1.26 1.953 1.26 3.307 0 4.721-2.875 5.767-5.613 6.074.446.385.83 1.123.83 2.277 0 1.645-.015 2.968-.015 3.383 0 .323.231.708.846.584a12.324 12.324 0 0 0 8.382-11.672C24.607 5.506 19.101 0 12.304 0Z"
              />
            </svg>
          </a>
          <a href="https://www.linkedin.com/in/eamon-napier-b50042333/" class="header__social linkedin">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="25"
              height="24"
              aria-labelledby="socialLinkedIn"
              role="img"
            >
              <title id="socialLinkedIn">LinkedIn</title>
              <path
                fill="#FFF"
                fill-rule="evenodd"
                d="M5.551 3.304c-1.14 0-2.067.926-2.067 2.064 0 1.14.928 2.066 2.067 2.066a2.066 2.066 0 0 0 0-4.13ZM3.767 8.998v11.453h3.562L7.33 8.998H3.767Zm5.798 0V20.45l3.554.002.002-5.668c0-1.454.253-2.941 2.132-2.941 1.851 0 1.851 1.755 1.851 3.036v5.571l3.559-.001v-6.28c0-2.834-.517-5.457-4.27-5.457-1.763 0-2.916.997-3.368 1.85h-.05V8.997h-3.41ZM22.435 24H1.982c-.976 0-1.77-.777-1.77-1.732V1.731C.212.776 1.006 0 1.982 0h20.453c.98 0 1.777.776 1.777 1.73v20.538c0 .955-.797 1.732-1.777 1.732Z"
              />
            </svg>
          </a>
        </nav>
      </div>
    </header>

    <main id="main">
      <section class="hero">
        <div class="wrapper hero__wrapper bottom-border">
          <div class="hero__content">
            <picture>
              <source
                media="(min-width: 62.5em)"
                srcset="assets/images/image-profile-mono.webp" 
              /> <!-- Upload Desktop Image -->
              <source
                media="(min-width: 37.5em)"
                srcset="assets/images/image-profile-mono.webp"
              /> <!-- Upload Tablet Image --> 
              <img
                class="hero__image"
                src="assets/images/image-profile-mono.webp"
                alt="picture of Eamon Napier"
                width-="174"
                height="383"
              /> <!-- Upload Mobile Image -->
            </picture>
            <img
              class="hero__rings"
              src="assets/images/pattern-rings.svg"
              alt=""
              width="530"
              height="129"
            />
            <img
              class="hero__circle"
              src="assets/images/pattern-circle.svg"
              alt=""
              width="129"
              height="129"
            />
            <div class="hero__text">
              <h1 class="hero__headline header-xl">
                Nice to<br />
                meet you! I'm <span class="name_span">Eamon Napier</span>.
              </h1>
              <p class="hero__description">
                Based in Brighton, United Kingdom, I'm a software developer passionate about
                building applications that users love.
              </p>
              <a href="#contact" class="hero__contact underline">Contact me</a>
            </div>
          </div>
        </div>
      </section>

      <section class="skills">
        <div class="wrapper skills__wrapper bottom-border">
          <h2 class="visually-hidden">Skills</h2>
          <div class="skills__item">
            <div class="skills__title-wrapper">
              <img src="assets/images/python.svg" alt="Python Icon" class="skills__icon" />
              <h3 class="skills__title">Python</h3>
            </div>
            <p class="skills__description">5 Years Experience</p>
          </div>
          <div class="skills__item">
            <div class="skills__title-wrapper">
              <img src="assets/images/javascript.svg" alt="JavaScript Icon" class="skills__icon" />
              <h3 class="skills__title">JavaScript</h3>
            </div>
            <p class="skills__description">5 Years Experience</p>
          </div>
          <div class="skills__item">
            <div class="skills__title-wrapper">
              <img src="assets/images/html.svg" alt="HTML & CSS Icon" class="skills__icon" />
              <h3 class="skills__title">HTML & CSS</h3>
            </div>
            <p class="skills__description">4 Years Experience</p>
          </div>
          <div class="skills__item">
            <div class="skills__title-wrapper">
              <img src="assets/images/sql.svg" alt="SQL Icon" class="skills__icon" />
              <h3 class="skills__title">SQL</h3>
            </div>
            <p class="skills__description">4 Years Experience</p>
          </div>
          <div class="skills__item">
            <div class="skills__title-wrapper">
              <img src="assets/images/react.svg" alt="React Icon" class="skills__icon" />
              <h3 class="skills__title">React</h3>
            </div>
            <p class="skills__description">3 Years Experience</p>
          </div>
          <div class="skills__item">
            <div class="skills__title-wrapper">
              <img src="assets/images/csharp.svg" alt="C# Icon" class="skills__icon" />
              <h3 class="skills__title">C#</h3>
            </div>
            <p class="skills__description">3 Years Experience</p>
          </div>
        </div>
        <img
          class="skills__rings"
          src="assets/images/pattern-rings.svg"
          alt=""
          width="530"
          height="129"
        />
      </section>

      <section class="projects">
        <div class="wrapper projects__wrapper">
          <div class="projects__grid">
            <h2 class="projects__headline header-xl">Projects</h2>
            <a href="#contact" class="projects__contact underline"
              >Contact me</a
            >

            <div class="projects__item">
              <picture class="projects__picture">
                <source
                  media="(min-width: 62.5em)"
                  srcset="assets/images/thumbnail-project-1-large.webp"
                />
                <img
                  class="projects__image"
                  src="assets/images/thumbnail-project-1-small.webp"
                  alt="screenshot of design portfolio website"
                  width-="343"
                  height="253"
                />
              </picture>
              <h3 class="projects__name">Design Portfolio</h3>
              <p class="projects__tags">
                <span>HTML</span>
                <span>CSS</span>
              </p>
              <div class="projects__links">
                <a href="" class="underline">View Project</a>
                <a href="" class="underline">View Code</a>
              </div>
            </div>

            <div class="projects__item">
              <picture class="projects__picture">
                <source
                  media="(min-width: 62.5em)"
                  srcset="assets/images/thumbnail-project-2-large.webp"
                />
                <img
                  class="projects__image"
                  src="assets/images/thumbnail-project-2-small.webp"
                  alt="screenshot of learning platform website with different courses"
                  width-="343"
                  height="253"
                />
              </picture>
              <h3 class="projects__name">E-Learning Landing Page</h3>
              <p class="projects__tags">
                <span>HTML</span>
                <span>CSS</span>
              </p>
              <div class="projects__links">
                <a href="" class="underline">View Project</a>
                <a href="" class="underline">View Code</a>
              </div>
            </div>

            <div class="projects__item">
              <picture class="projects__picture">
                <source
                  media="(min-width: 62.5em)"
                  srcset="assets/images/thumbnail-project-3-large.webp"
                />
                <img
                  class="projects__image"
                  src="assets/images/thumbnail-project-3-small.webp"
                  alt="screenshot of To Do App showing a list of active and complete tasks"
                  width-="343"
                  height="253"
                />
              </picture>
              <h3 class="projects__name">Todo Web App</h3>
              <p class="projects__tags">
                <span>HTML</span>
                <span>CSS</span>
                <span>JavaScript</span>
              </p>
              <div class="projects__links">
                <a href="" class="underline">View Project</a>
                <a href="" class="underline">View Code</a>
              </div>
            </div>

            <div class="projects__item">
              <picture class="projects__picture">
                <source
                  media="(min-width: 62.5em)"
                  srcset="assets/images/thumbnail-project-4-large.webp"
                />
                <img
                  class="projects__image"
                  src="assets/images/thumbnail-project-4-small.webp"
                  alt="screenshot of video player app with grid of thumbnails of movies and TV shows"
                  width-="343"
                  height="253"
                />
              </picture>
              <h3 class="projects__name">Entertainment Web App</h3>
              <p class="projects__tags">
                <span>HTML</span>
                <span>CSS</span>
                <span>JavaScript</span>
              </p>
              <div class="projects__links">
                <a href="" class="underline">View Project</a>
                <a href="" class="underline">View Code</a>
              </div>
            </div>

            <div class="projects__item">
              <picture class="projects__picture">
                <source
                  media="(min-width: 62.5em)"
                  srcset="assets/images/thumbnail-project-5-large.webp"
                />
                <img
                  class="projects__image"
                  src="assets/images/thumbnail-project-5-small.webp"
                  alt="screenshot of 4-player memory game with circular tiles that have symbols"
                  width-="343"
                  height="253"
                />
              </picture>
              <h3 class="projects__name">Memory Game</h3>
              <p class="projects__tags">
                <span>HTML</span>
                <span>CSS</span>
                <span>JavaScript</span>
              </p>
              <div class="projects__links">
                <a href="" class="underline">View Project</a>
                <a href="" class="underline">View Code</a>
              </div>
            </div>

            <div class="projects__item">
              <picture class="projects__picture">
                <source
                  media="(min-width: 62.5em)"
                  srcset="assets/images/thumbnail-project-6-large.webp"
                />
                <img
                  class="projects__image"
                  src="assets/images/thumbnail-project-6-small.webp"
                  alt="grid of thumbnails of famous works of art"
                  width-="343"
                  height="253"
                />
              </picture>
              <h3 class="projects__name">Art Gallery Showcase</h3>
              <p class="projects__tags">
                <span>HTML</span>
                <span>CSS</span>
                <span>JavaScript</span>
              </p>
              <div class="projects__links">
                <a href="" class="underline">View Project</a>
                <a href="" class="underline">View Code</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="contact" class="contact bg-less-dark">
        <div class="wrapper contact__wrapper bottom-border">
          <div class="contact__text">
            <h2 class="contact__headline header-lg">Contact Me</h2>
            <p class="contact__description">
              Fill out the form and reach out to me if you feel that I'd be a good fit for your team, 
              or if you have any opportunities for me. I would love to hear from you.
            </p>
          </div>
          <form action="" class="contact__form">
            <div class="contact__control">
              <label for="name" class="visually-hidden">Name</label>
              <input
                type="text"
                id="name"
                name="name"
                placeholder="Name"
                required
              />
              <img
                src="assets/images/icon-invalid.svg"
                alt=""
                class="contact__invalid-icon"
                width="24"
                height="24"
              />
            </div>
            <div class="contact__control">
              <label for="email" class="visually-hidden">Email</label>
              <input
                type="email"
                id="email"
                name="email"
                placeholder="Email"
                required
              />
              <img
                src="assets/images/icon-invalid.svg"
                alt=""
                class="contact__invalid-icon"
                width="24"
                height="24"
              />
            </div>
            <div class="contact__control">
              <label for="message" class="visually-hidden">Message</label>
              <textarea
                name="message"
                id="message"
                cols="30"
                rows="3"
                placeholder="Message"
                required
              ></textarea>
              <img
                src="assets/images/icon-invalid.svg"
                alt=""
                class="contact__invalid-icon"
                width="24"
                height="24"
              />
            </div>
            <div class="contact__control align-right">
              <button type="submit">Send Message</button>
            </div>
          </form>
        </div>
        <img
          class="contact__rings"
          src="assets/images/pattern-rings.svg"
          alt=""
          width="530"
          height="129"
        />
      </section>
    </main>

    <footer class="footer bg-less-dark">
      <h2 class="visually-hidden">Footer</h2>
      <div class="wrapper">
        <nav class="header__nav">
          <h2 class="visually-hidden">Navigation</h2>
          <a href="/" class="header__home">
            eamonnapier
            <span class="visually-hidden">(to home page)</span>
          </a>
          <a href="" class="header__social github">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="25"
              height="24"
              aria-labelledby="socialGitHub"
              role="img"
            >
              <title id="socialGitHub">GitHub</title>
              <path
                fill="#FFF"
                fill-rule="evenodd"
                d="M12.304 0C5.506 0 0 5.506 0 12.304c0 5.444 3.522 10.042 8.413 11.672.615.108.845-.261.845-.584 0-.292-.015-1.261-.015-2.291-3.091.569-3.891-.754-4.137-1.446-.138-.354-.738-1.446-1.261-1.738-.43-.23-1.046-.8-.016-.815.97-.015 1.661.892 1.892 1.261 1.107 1.86 2.876 1.338 3.584 1.015.107-.8.43-1.338.784-1.646-2.738-.307-5.598-1.368-5.598-6.074 0-1.338.477-2.446 1.26-3.307-.122-.308-.553-1.569.124-3.26 0 0 1.03-.323 3.383 1.26.985-.276 2.03-.415 3.076-.415 1.046 0 2.092.139 3.076.416 2.353-1.6 3.384-1.261 3.384-1.261.676 1.691.246 2.952.123 3.26.784.861 1.26 1.953 1.26 3.307 0 4.721-2.875 5.767-5.613 6.074.446.385.83 1.123.83 2.277 0 1.645-.015 2.968-.015 3.383 0 .323.231.708.846.584a12.324 12.324 0 0 0 8.382-11.672C24.607 5.506 19.101 0 12.304 0Z"
              />
            </svg>
          </a>
          <a href="" class="header__social linkedin">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="25"
              height="24"
              aria-labelledby="socialLinkedIn"
              role="img"
            >
              <title id="socialLinkedIn">LinkedIn</title>
              <path
                fill="#FFF"
                fill-rule="evenodd"
                d="M5.551 3.304c-1.14 0-2.067.926-2.067 2.064 0 1.14.928 2.066 2.067 2.066a2.066 2.066 0 0 0 0-4.13ZM3.767 8.998v11.453h3.562L7.33 8.998H3.767Zm5.798 0V20.45l3.554.002.002-5.668c0-1.454.253-2.941 2.132-2.941 1.851 0 1.851 1.755 1.851 3.036v5.571l3.559-.001v-6.28c0-2.834-.517-5.457-4.27-5.457-1.763 0-2.916.997-3.368 1.85h-.05V8.997h-3.41ZM22.435 24H1.982c-.976 0-1.77-.777-1.77-1.732V1.731C.212.776 1.006 0 1.982 0h20.453c.98 0 1.777.776 1.777 1.73v20.538c0 .955-.797 1.732-1.777 1.732Z"
              />
            </svg>
          </a>
        </nav>
      </div>
    </footer>
  <script src="scripts.js"></script>
  </body>
</html>

<?php
  echo 'I like pizza';
?>