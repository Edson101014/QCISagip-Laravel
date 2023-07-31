import React from 'react';
import ReactDOM from 'react-dom/client';


function Example() {
    return (

<header>

    <div class="main-nav">

      <div class="mobile-nav-show">
        <i class="fa-solid fa-bars fa-3x show-icon"></i>
      </div>
      <div class="logo">
        <a href="index.php">
          <img src="assets/adopt-logo.png" alt="logo" />
        </a>
      </div>

      <nav class="web-nav">
        <ul>
          <li>
            <a href="index.php">Home </a>
          </li>
          <li>
            <a href="adopt.php">
              Pet Gallery

            </a>
          </li>

          <li class="web-services-container">

            <span class="web-services">
              Services
              <i class="fa-solid fa-angle-down"></i>
            </span>



            <div class="web-services-toggle">

              <ul class="ul-items">



                  <li> Service1</li>
                  <li> Service2</li>
                  <li> Service3</li>

              </ul>
            </div>
          </li>


          <li><a href="contact.php">Contact Us</a></li>
          <li>
            <a href="about.php">
              About

            </a>
          </li>
          <li>
            <a href="mobile-report-2.apk" class="border-white-button button"> Download The App </a>
          </li>

        </ul>
      </nav>
      <div class="cta-button">

          <div class="cta-button">
            <form action="./signin.php">
              <button class="gradient-button button" type="submit">Sign In</button>
            </form>
          </div>


      </div>

    </div>
  </header>


    );
}

export default Example;

if (document.getElementById('example')) {
    const Index = ReactDOM.createRoot(document.getElementById("example"));

    Index.render(
        <React.StrictMode>
            <Example/>
        </React.StrictMode>
    )
}
