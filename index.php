<?php
session_start(); // Start the session

// Check if the user is logged in
if (isset($_SESSION['first_name'])!=1) {
      header("Location: login.php");// Redirect to login if not logged in
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ebook</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-theme-neutral-dark);
        background: var(--dl-color-theme-neutral-light);

        fill: var(--dl-color-theme-neutral-dark);
      }
    </style>
    <link
      rel="stylesheet"
      href="https://unpkg.com/animate.css@4.1.1/animate.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=STIX+Two+Text:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/@teleporthq/teleport-custom-scripts/dist/style.css"
    />
    <style>
      @keyframes fade-in-left {
        0% {
          opacity: 0;
          transform: translateX(-20px);
        }
        100% {
          opacity: 1;
          transform: translateX(0);
        }
      }
    </style>
  </head>
  <body>
    <link rel="stylesheet" href="./style.css" />
    <div>
      <link href="./index.css" rel="stylesheet" />

      <div class="home-container">
        <navbar-wrapper class="navbar-wrapper">
          <!--Navbar component-->
          <header class="navbar-container">
            <header data-thq="thq-navbar" class="navbar-navbar-interactive">
              <svg height="128" width="128" viewBox="0 0 128 128">
                <path
                  fill="#01579B"
                  d="M118.03 102.32L72.29 123c-2.82 1.33-5.76 1.2-8.46-.36L6.09 93.32c-1.65-1.06-2.14-2.61-2.04-3.69s.35-2.25 3.25-3.09l4.28-1.58l57.92 31.57l41.16-16.82z"
                ></path>
                <path
                  fill="#F5F5F5"
                  d="M71.74 119.69a7.95 7.95 0 0 1-7.26-.26L8.11 91.03c-.8-.44-1.04-1.45-.56-2.23c1.24-2.05 3.52-8.53-.24-13.91l63.66 30.65z"
                ></path>
                <path
                  fill="#94C6D6"
                  d="m115.59 99.98l-43.85 19.71c-1.45.63-4.34 1.75-7.67-.49c2.63.19 4.48-.9 5.43-2.67c.93-1.72.65-4.54-.48-6.13c-.69-.96-2.54-2.49-3.35-3.35L113.1 88.5c4.2-1.73 8.14.86 8.77 4.01c.7 3.56-3.84 6.47-6.28 7.47"
                ></path>
                <path
                  fill="#01579B"
                  d="m117.78 86.96l-45.27 20.2c-2.85 1.13-6.04.98-8.77-.4L5.9 77.38c-.56-.28-1.39-1.05-1.72-2.1c-.54-1.75.14-3.95 2.19-4.65l62.68 31.95l42.92-18.37z"
                ></path>
                <path
                  fill="#0091EA"
                  d="m121.19 89.89l-4.93-1.79l-10.16.59l-33.58 14.99c-2.85 1.13-6.04.98-8.77-.4L5.9 73.91c-1.49-.76-1.17-2.97.47-3.28l41.69-18.65c1.19-.22 2.41-.09 3.52.38l59.49 28.36s9.45 6.47 10.12 9.17"
                ></path>
                <path
                  fill="#616161"
                  d="M105.53 88.98s6.26-2.45 11.18-2.23s6.63 3.67 6.63 3.67c-.93-4.23-5.3-6.39-5.3-6.39l-65-32.73c-.45-.19-2.11-.58-4.66.47c-2.06.85-8.79 4-8.79 4z"
                ></path>
                <path
                  fill="#424242"
                  d="M123.62 91.22c-.47-1.87-1.63-3.87-3.77-4.84c-2.82-1.27-6.84-.94-9.41.4l-4.91 2.18v3.46l6.21-2.76c6.04-2.69 8.72 1.34 8.95 2.29c.96 3.87-.9 6.11-6.39 8.63l-8.92 4.02v3.48l10.26-4.57c4.54-1.82 9.72-5.24 7.98-12.29"
                ></path>
                <path
                  fill="#01579B"
                  d="M33.01 90.31L15.74 66.44l2.71-1.21l19.43 26.7zm22.15 11l-3.08-2.44l53.45-10.91v1.75l-7.49 2.84z"
                ></path>
                <path
                  fill="#9CCC65"
                  d="M14.8 46.18L82.31 34.9l29.49 32.47c1.49 1.57.68 4.17-1.44 4.6l-69.7 14.3z"
                ></path>
                <path
                  fill="#689F38"
                  d="M110.36 69.17L41.14 83.19l-.22 3.3l69.44-14.24c1.96-.41 2.78-2.65 1.71-4.23c-.38.56-.96 1-1.71 1.15m3.73 15.13c.73 1.16.07 2.69-1.27 2.96L49.1 100.18c-3.83.79-7.59-1.72-7.93-5.62c-.29-3.3 1.94-6.29 5.19-6.97l61.28-13.76z"
                ></path>
                <path
                  fill="#616161"
                  d="M55.59 80.1L30.21 43.78l-14.48 3.83c-3.35 3.33-2.1 8.8-2.1 8.8S35.8 91.99 39.3 96.54s8.61 3.84 8.61 3.84l8.63-1.74l-.9-16.1z"
                ></path>
                <path
                  fill="#424242"
                  d="M55.59 80.34L43.4 82.86c-3.33.75-3.93 3.88-3.93 3.88L10.04 44.57s-4.19 5.07-1.41 9.38L39.3 96.54c3.35 4.77 8.61 3.88 8.61 3.88l8.63-1.74l-.89-15.78z"
                ></path>
                <path
                  fill="#B9E4EA"
                  d="M110.25 83c.31.68-.09 1.47-.82 1.62L48.5 97.12c-3.83.79-6.54-1.75-6.4-5.21c.18-4.37 2.63-6.22 5.87-6.89l61.23-12.51s-2.08 2.34-.49 6.72c.54 1.51 1.12 2.85 1.54 3.77"
                ></path>
                <path
                  fill="none"
                  stroke="#424242"
                  stroke-miterlimit="10"
                  stroke-width="2.071"
                  d="M45.21 83.7L19.1 46.76"
                ></path>
                <path
                  fill="#424242"
                  d="M47.26 67.95L13.68 51.03l-1.36 2.68l38.8 19.77z"
                ></path>
                <path
                  fill="#689F38"
                  d="m108.79 64.03l-2.46-2.7L68.5 78.69L47.26 68.18l3.62 5.18l14.07 7.19l10.48-1.61z"
                ></path>
                <path
                  fill="#C62828"
                  d="M118.02 57.35L72.29 78.03c-2.82 1.33-5.76 1.2-8.46-.36L6.09 48.35c-1.65-1.06-2.14-2.61-2.04-3.69s.35-2.25 3.25-3.09l2.71-1l59.32 29.11l48.17-19.93z"
                ></path>
                <path
                  fill="#F5F5F5"
                  d="M71.73 74.72a7.95 7.95 0 0 1-7.26-.26L8.1 46.06c-.8-.44-1.04-1.45-.56-2.23c1.24-2.05 3.52-8.53-.24-13.91l62.24 31.66z"
                ></path>
                <path
                  fill="#94C6D6"
                  d="M115.58 55.01L71.73 74.72c-1.45.63-4.34 1.75-7.67-.49c2.63.19 4.48-.9 5.43-2.67c.93-1.72.65-4.54-.48-6.13c-.69-.96-2.54-2.49-3.35-3.35l47.43-18.55c4.2-1.73 8.14.86 8.77 4.01c.7 3.56-3.84 6.47-6.28 7.47"
                ></path>
                <path
                  fill="#C62828"
                  d="m117.78 41.99l-45.27 20.2c-2.85 1.13-6.04.98-8.77-.4L5.89 32.41c-.6-.3-1.5-1.07-1.79-2.16c-.43-1.62.13-3.75 2.26-4.59l53.01-11.23z"
                ></path>
                <path
                  fill="#F44336"
                  d="m121.18 44.92l-4.93-1.79l-10.16.59l-33.58 14.99c-2.85 1.13-6.04.98-8.77-.4L5.89 28.93c-1.49-.76-.96-2.77.47-3.28l41.7-18.64c1.19-.22 2.41-.09 3.52.38l59.49 28.36s9.44 6.46 10.11 9.17"
                ></path>
                <path
                  fill="#616161"
                  d="M105.53 44s5.21-1.83 10.13-1.61s7.69 3.05 7.69 3.05c-1.01-4.52-5.3-6.39-5.3-6.39l-65-32.73c-.45-.19-2.11-.58-4.66.47c-2.06.85-8.79 4-8.79 4z"
                ></path>
                <path
                  fill="#424242"
                  d="M111.48 41.86L44.97 8.31l2.2-.99l67.64 33.9z"
                ></path>
                <path
                  fill="#424242"
                  d="M123.61 46.25c-.47-1.87-1.26-3.68-3.49-4.62c-2.85-1.2-5.45-1.45-9.69.18l-4.91 2.18v3.46l6.21-2.76c3.15-1.48 7.79-1.16 8.95 2.29c1.27 3.78-.9 6.11-6.39 8.63l-8.92 4.02v3.48l10.26-4.57c4.55-1.82 9.73-5.24 7.98-12.29"
                ></path>
              </svg>
              <div data-thq="thq-navbar-nav" class="navbar-desktop-menu">
                <nav class="navbar-links1">
                  <span class="thq-link thq-body-small"><span>Home</span></span>
                  <span class="thq-link thq-body-small">
                    <span>Books</span>
                  </span>
                  <span class="thq-link thq-body-small">
                    <span>About Us</span>
                  </span>
                  <span class="thq-link thq-body-small">
                    <span>Contact</span>
                  </span>
                </nav>
                <div class="navbar-buttons1">
                  
                  <button type="submit"
                    class="navbar-action11 thq-button-animated thq-button-filled"
                  >
                    <a class="thq-body-small" href="login.php">LOG IN&nbsp;&nbsp;</a>
                  </button>
                
                
                  <button
                  type="submit"
                    class="navbar-action21 thq-button-outline thq-button-animated"
                  >
                    <span class="thq-body-small">
                      <a href="signup.php">SIGN UP</a>
                      
                    </span>
                  </button>
                </form>
                  </div>
                
                </div>
              </div>
              <div data-thq="thq-burger-menu" class="navbar-burger-menu">
                <svg viewBox="0 0 1024 1024" class="navbar-icon35">
                  <path
                    d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
                  ></path>
                </svg>
              </div>
              <div data-thq="thq-mobile-menu" class="navbar-mobile-menu">
                <div class="navbar-nav">
                  <div class="navbar-top">
                    <img
                      alt="E-Book Website"
                      src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?ixid=M3w5MTMyMXwwfDF8c2VhcmNofDN8fEJPT0t8ZW58MHx8fHwxNzMwNTcwODgwfDA&amp;ixlib=rb-4.0.3&amp;w=1500"
                      class="navbar-logo"
                    />
                    <div data-thq="thq-close-menu" class="navbar-close-menu">
                      <svg viewBox="0 0 1024 1024" class="navbar-icon37">
                        <path
                          d="M810 274l-238 238 238 238-60 60-238-238-238 238-60-60 238-238-238-238 60-60 238 238 238-238z"
                        ></path>
                      </svg>
                    </div>
                  </div>
                  <nav class="navbar-links2">
                    <span class="thq-link thq-body-small">
                      <span>Home</span>
                    </span>
                    <span class="thq-link thq-body-small">
                      <span>Books</span>
                    </span>
                    <span class="thq-link thq-body-small">
                      <span>About Us</span>
                    </span>
                    <span class="thq-link thq-body-small">
                    <span><?php echo $_SESSION['first_name']; ?></span>
                    <span><?php echo $_SESSION['last_name']; ?></span>
                    </span>
                  </nav>
                </div>
                <div class="navbar-buttons2">
                  <button class="thq-button-filled">Login</button>
                  <button class="thq-button-outline">Register</button>
                </div>
              </div>
            </header>
          </header>
        </navbar-wrapper>
        <hero-wrapper class="hero-wrapper">
          <!--Hero component-->
          <div class="hero-header78">
            <div class="hero-column thq-section-padding thq-section-max-width">
              <div class="hero-content1">
                <h1 class="hero-text1 thq-heading-1">
                  <span>Discover Your Next Favorite E-Book</span>
                </h1>
                <p class="hero-text2 thq-body-large">
                  <span>
                    Explore a vast collection of e-books across various genres
                    and topics. Find your next captivating read today.
                  </span>
                </p>
              </div>
              <div class="hero-actions">
                <button class="thq-button-filled hero-button1">
                  <span class="thq-body-small">
                    <span>Browse E-Books</span>
                  </span>
                </button>
                <button class="thq-button-outline hero-button2">
                  <span class="thq-body-small">
                    <span>Join Our Reading Community</span>
                  </span>
                </button>
              </div>
            </div>
            <div class="hero-content2">
              <div
                class="hero-row-container1 thq-animated-group-container-horizontal thq-mask-image-horizontal"
              >
                <div class="thq-animated-group-horizontal">
                  <img
                    alt="E-Book Collection"
                    src="https://images.unsplash.com/photo-1476275466078-4007374efbbe?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTczMDU3MDU3Mnw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                    class="hero-placeholder-image10 thq-img-scale thq-img-ratio-1-1"
                  />
                  <img
                    alt="Hero Image"
                    src="https://images.unsplash.com/photo-1503551723145-6c040742065b-v2?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTczMDU3MDU2N3w&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                    class="hero-placeholder-image11 thq-img-scale thq-img-ratio-1-1"
                  />
                  <img
                    alt="Hero Image"
                    src="https://images.unsplash.com/photo-1507652955-f3dcef5a3be5?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTczMDU3MDU2Nnw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                    class="hero-placeholder-image12 thq-img-scale thq-img-ratio-1-1"
                  />
                  <img
                    alt="Hero Image"
                    src="https://images.unsplash.com/photo-1499244571948-7ccddb3583f1?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTczMDU3MDU3MXw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                    class="hero-placeholder-image13 thq-img-scale thq-img-ratio-1-1"
                  />
                  <img
                    alt="Hero Image"
                    src="https://images.unsplash.com/photo-1515325595179-59cd5262ca53?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTczMDU3MDU3MHw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                    class="hero-placeholder-image14 thq-img-scale thq-img-ratio-1-1"
                  />
                  <img
                    alt="Hero Image"
                    src="https://images.unsplash.com/photo-1474631245212-32dc3c8310c6?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTczMDU3MDU2OXw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                    class="hero-placeholder-image15 thq-img-scale thq-img-ratio-1-1"
                  />
                </div>
                <div class="thq-animated-group-horizontal">
                  <img
                    alt="E-Book Collection"
                    src="https://images.unsplash.com/photo-1476275466078-4007374efbbe?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTczMDU3MDU3Mnw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                    class="hero-placeholder-image16 thq-img-scale thq-img-ratio-1-1"
                  />
                  <img
                    alt="Hero Image"
                    src="https://images.unsplash.com/photo-1503551723145-6c040742065b-v2?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTczMDU3MDU2N3w&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                    class="hero-placeholder-image17 thq-img-scale thq-img-ratio-1-1"
                  />
                  <img
                    alt="Hero Image"
                    src="https://images.unsplash.com/photo-1507652955-f3dcef5a3be5?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTczMDU3MDU2Nnw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                    class="hero-placeholder-image18 thq-img-scale thq-img-ratio-1-1"
                  />
                  <img
                    alt="Hero Image"
                    src="https://images.unsplash.com/photo-1499244571948-7ccddb3583f1?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTczMDU3MDU3MXw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                    class="hero-placeholder-image19 thq-img-scale thq-img-ratio-1-1"
                  />
                  <img
                    alt="Hero Image"
                    src="https://images.unsplash.com/photo-1515325595179-59cd5262ca53?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTczMDU3MDU3MHw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                    class="hero-placeholder-image20 thq-img-scale thq-img-ratio-1-1"
                  />
                  <img
                    alt="Hero Image"
                    src="https://images.unsplash.com/photo-1534312527009-56c7016453e6?ixid=M3w5MTMyMXwwfDF8c2VhcmNofDIxfHxhYnN0cmFjdHxlbnwwfHx8fDE3MTA4NzA5MzB8MA&amp;ixlib=rb-4.0.3&amp;w=1500"
                    class="hero-placeholder-image21 thq-img-scale thq-img-ratio-1-1"
                  />
                </div>
              </div>
              <div
                class="hero-row-container2 thq-animated-group-container-horizontal thq-mask-image-horizontal"
              >
                <div class="thq-animated-group-horizontal-reverse">
                  <img
                    alt="Hero Image"
                    src="https://images.unsplash.com/photo-1546521343-4eb2c01aa44b?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTczMDU3MDU2OXw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                    class="hero-placeholder-image22 thq-img-scale thq-img-ratio-1-1"
                  />
                  <img
                    alt="Hero Image"
                    src="https://images.unsplash.com/photo-1524401597352-ec4463663233?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTczMDU3MDU3MHw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                    class="hero-placeholder-image23 thq-img-scale thq-img-ratio-1-1"
                  />
                  <img
                    alt="Hero Image"
                    src="https://images.unsplash.com/photo-1517673132405-a56a62b18caf?ixid=M3w5MTMyMXwwfDF8c2VhcmNofDI0fHxCT09LfGVufDB8fHx8MTczMDU3MDg4MHww&amp;ixlib=rb-4.0.3&amp;w=1500"
                    class="hero-placeholder-image24 thq-img-scale thq-img-ratio-1-1"
                  />
                  <img
                    alt="Hero Image"
                    src="https://images.unsplash.com/photo-1543002588-bfa74002ed7e?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTczMDU3MDU3MXw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                    class="hero-placeholder-image25 thq-img-scale thq-img-ratio-1-1"
                  />
                  <img
                    alt="Hero Image"
                    src="https://images.unsplash.com/photo-1488190211105-8b0e65b80b4e?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTczMDU3MDU2OHw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                    class="hero-placeholder-image26 thq-img-scale thq-img-ratio-1-1"
                  />
                  <img
                    alt="Hero Image"
                    src="https://images.unsplash.com/photo-1556761175-b413da4baf72?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTczMDU3MDU2OXw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                    class="hero-placeholder-image27 thq-img-scale thq-img-ratio-1-1"
                  />
                </div>
                <div class="thq-animated-group-horizontal-reverse">
                  <img
                    alt="Hero Image"
                    src="https://images.unsplash.com/photo-1546521343-4eb2c01aa44b?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTczMDU3MDU2OXw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                    class="hero-placeholder-image28 thq-img-scale thq-img-ratio-1-1"
                  />
                  <img
                    alt="Hero Image"
                    src="https://images.unsplash.com/photo-1524401597352-ec4463663233?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTczMDU3MDU3MHw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                    class="hero-placeholder-image29 thq-img-scale thq-img-ratio-1-1"
                  />
                  <img
                    alt="Hero Image"
                    src="https://images.unsplash.com/photo-1517673132405-a56a62b18caf?ixid=M3w5MTMyMXwwfDF8c2VhcmNofDI0fHxCT09LfGVufDB8fHx8MTczMDU3MDg4MHww&amp;ixlib=rb-4.0.3&amp;w=1500"
                    class="hero-placeholder-image30 thq-img-scale thq-img-ratio-1-1"
                  />
                  <img
                    alt="Hero Image"
                    src="https://images.unsplash.com/photo-1543002588-bfa74002ed7e?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTczMDU3MDU3MXw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                    class="hero-placeholder-image31 thq-img-scale thq-img-ratio-1-1"
                  />
                  <img
                    alt="Hero Image"
                    src="https://images.unsplash.com/photo-1488190211105-8b0e65b80b4e?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTczMDU3MDU2OHw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                    class="hero-placeholder-image32 thq-img-scale thq-img-ratio-1-1"
                  />
                  <img
                    alt="Hero Image"
                    src="https://images.unsplash.com/photo-1568214379698-8aeb8c6c6ac8?ixid=M3w5MTMyMXwwfDF8c2VhcmNofDEyfHxncmFmaWN8ZW58MHx8fHwxNzE1Nzk0OTk5fDA&amp;ixlib=rb-4.0.3&amp;w=1500"
                    class="hero-placeholder-image33 thq-img-scale thq-img-ratio-1-1"
                  />
                </div>
              </div>
            </div>
            <div>
              <div class="hero-container2">
                <style>
                  @keyframes scroll-x {
                    from {
                      transform: translateX(0);
                    }
                    to {
                      transform: translateX(calc(-100% - 16px));
                    }
                  }

                  @keyframes scroll-y {
                    from {
                      transform: translateY(0);
                    }
                    to {
                      transform: translateY(calc(-100% - 16px));
                    }
                  }
                </style>
              </div>
            </div>
          </div>
        </hero-wrapper>
        <features1-wrapper class="features1-wrapper">
          <!--Features1 component-->
          <div class="thq-section-padding">
            <div class="features1-container2 thq-section-max-width">
              <div class="features1-image-container">
                <img
                  alt="Ebook on tablet"
                  src="https://images.unsplash.com/photo-1552664730-d307ca884978?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTczMDU3MDU2N3w&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                  class="features1-image1 thq-img-ratio-16-9"
                />
                <img
                  alt="User-friendly interface"
                  src="https://images.unsplash.com/uploads/14122810486321888a497/1b0cc699?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTczMDU3MDU2OHw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                  class="features1-image2 thq-img-ratio-16-9"
                />
                <img
                  alt="Diverse content selection"
                  src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTczMDU3MDU2N3w&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                  class="features1-image3 thq-img-ratio-16-9"
                />
              </div>
              <div class="features1-tabs-menu">
                <div class="features1-tab-horizontal1">
                  <div class="features1-divider-container1">
                    <div class="features1-container3"></div>
                  </div>
                  <div class="features1-content1">
                    <h2 class="thq-heading-2"><span>Read Anywhere</span></h2>
                    <span class="thq-body-small">
                      <span>Enjoy reading on multiple devices</span>
                    </span>
                  </div>
                </div>
                <div class="features1-tab-horizontal2">
                  <div class="features1-divider-container2">
                    <div class="features1-container4"></div>
                  </div>
                  <div class="features1-content2">
                    <h2 class="thq-heading-2"><span>Easy Navigation</span></h2>
                    <span class="thq-body-small">
                      <span>User-friendly interface for easy navigation</span>
                    </span>
                  </div>
                </div>
                <div class="features1-tab-horizontal3">
                  <div class="features1-divider-container3">
                    <div class="features1-container5"></div>
                  </div>
                  <div class="features1-content3">
                    <h2 class="thq-heading-2"><span>Diverse Content</span></h2>
                    <span class="thq-body-small">
                      <span>Access to a wide range of genres and topics</span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </features1-wrapper>
        <cta-wrapper class="cta-wrapper">
          <!--CTA component-->
          <div class="thq-section-padding">
            <div class="thq-section-max-width">
              <div class="cta-accent2-bg">
                <div class="cta-accent1-bg">
                  <div class="cta-container2">
                    <div class="cta-content">
                      <span class="thq-heading-2">
                        <span>Get Your Free E-Book Now!</span>
                      </span>
                      <p class="thq-body-large">
                        <span>
                          Discover the secrets to success with our exclusive
                          e-book. Sign up now to receive your free copy.
                        </span>
                      </p>
                    </div>
                    <div class="cta-actions">
                      <button
                        type="button"
                        class="thq-button-filled cta-button"
                      >
                        <span>Download Now</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </cta-wrapper>
        <features2-wrapper class="features2-wrapper">
          <!--Features2 component-->
          <div class="thq-section-padding">
            <div class="features2-container2 thq-section-max-width">
              <div class="features2-tabs-menu">
                <div class="features2-tab-horizontal1">
                  <div class="features2-divider-container1">
                    <div class="features2-container3"></div>
                  </div>
                  <div class="features2-content1">
                    <h2 class="thq-heading-2"><span>Feature #1</span></h2>
                    <span class="thq-body-small">
                      <span>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Suspendisse varius enim in eros elementum tristique.
                        Duis cursus, mi quis viverra ornare, eros dolor interdum
                        nulla, ut commodo diam libero vitae erat.
                      </span>
                    </span>
                  </div>
                </div>
                <div class="features2-tab-horizontal2">
                  <div class="features2-divider-container2">
                    <div class="features2-container4"></div>
                  </div>
                  <div class="features2-content2">
                    <h2 class="thq-heading-2">
                      <span>Wide Selection of E-books</span>
                    </h2>
                    <span class="thq-body-small">
                      <span>
                        Explore a vast library of e-books covering various
                        genres and topics to cater to every reader's
                        preferences.
                      </span>
                    </span>
                  </div>
                </div>
                <div class="features2-tab-horizontal3">
                  <div class="features2-divider-container3">
                    <div class="features2-container5"></div>
                  </div>
                  <div class="features2-content3">
                    <h2 class="thq-heading-2"><span>Feature #3</span></h2>
                    <span class="thq-body-small">
                      <span>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Suspendisse varius enim in eros elementum tristique.
                        Duis cursus, mi quis viverra ornare, eros dolor interdum
                        nulla, ut commodo diam libero vitae erat.
                      </span>
                    </span>
                  </div>
                </div>
              </div>
              <div class="features2-image-container">
                <img
                  alt="feature 1"
                  src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTczMDU3MDU2N3w&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                  class="features2-image1 thq-img-ratio-16-9"
                />
                <img
                  alt="Illustration of diverse e-books"
                  src="https://images.unsplash.com/photo-1432821596592-e2c18b78144f?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTczMDU3MDU2OHw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                  class="features2-image2 thq-img-ratio-16-9"
                />
                <img
                  alt="image"
                  src="https://images.unsplash.com/photo-1515163842884-3c780ba91d1a?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTczMDU3MDU2OHw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                  class="features2-image3 thq-img-ratio-16-9"
                />
              </div>
            </div>
          </div>
        </features2-wrapper>
        <pricing-wrapper class="pricing-wrapper">
          <!--Pricing component-->
          <div class="pricing-pricing23 thq-section-padding">
            <div class="pricing-max-width thq-section-max-width">
              <div class="pricing-section-title">
                <span class="pricing-text10 thq-body-small">
                  <span>Choose the perfect plan for you</span>
                </span>
                <div class="pricing-content">
                  <h2 class="pricing-text11 thq-heading-2">
                    <span>Pricing plan</span>
                  </h2>
                  <p class="pricing-text12 thq-body-large">
                    <span>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </span>
                  </p>
                </div>
              </div>
              <div class="pricing-tabs">
                <button
                  class="pricing-button10 thq-button-animated thq-button-filled"
                >
                  <span class="thq-body-small">Monthly</span>
                </button>
                <button
                  class="pricing-button11 thq-button-outline thq-button-animated"
                >
                  <span class="thq-body-small">Monthly</span>
                </button>
                <button
                  class="pricing-button12 thq-button-animated thq-button-filled"
                >
                  <span class="thq-body-small">Yearly</span>
                </button>
                <button
                  class="pricing-button13 thq-button-outline thq-button-animated"
                >
                  <span class="thq-body-small">Yearly</span>
                </button>
              </div>
              <div class="pricing-container1">
                <div class="pricing-column1 thq-card">
                  <div class="pricing-price10">
                    <div class="pricing-price11">
                      <p class="pricing-text17 thq-body-large">
                        <span>Basic plan</span>
                      </p>
                      <h3 class="pricing-text18 thq-heading-3">
                        <span>$9.99</span>
                      </h3>
                      <p class="thq-body-large"><span>or $200 yearly</span></p>
                    </div>
                    <div class="pricing-list1">
                      <div class="pricing-list-item10">
                        <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                          <path
                            d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                          ></path>
                        </svg>
                        <span class="thq-body-small">
                          <span>Access to 100+ e-books</span>
                        </span>
                      </div>
                      <div class="pricing-list-item11">
                        <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                          <path
                            d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                          ></path>
                        </svg>
                        <span class="thq-body-small">
                          <span>Exclusive author interviews</span>
                        </span>
                      </div>
                      <div class="pricing-list-item12">
                        <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                          <path
                            d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                          ></path>
                        </svg>
                        <span class="thq-body-small">
                          <span>Weekly book recommendations</span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <button
                    class="pricing-button14 thq-button-outline thq-button-animated"
                  >
                    <span class="thq-body-small"><span>Buy Now</span></span>
                  </button>
                </div>
                <div class="pricing-column2 thq-card">
                  <div class="pricing-price12">
                    <div class="pricing-price13">
                      <p class="pricing-text24 thq-body-large">
                        <span>Business plan</span>
                      </p>
                      <h3 class="pricing-text25 thq-heading-3">
                        <span>$19.99</span>
                      </h3>
                      <p class="thq-body-large"><span>or $299 yearly</span></p>
                    </div>
                    <div class="pricing-list2">
                      <div class="pricing-list-item13">
                        <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                          <path
                            d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                          ></path>
                        </svg>
                        <span class="thq-body-small">
                          <span>Access to 250+ e-books</span>
                        </span>
                      </div>
                      <div class="pricing-list-item14">
                        <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                          <path
                            d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                          ></path>
                        </svg>
                        <span class="thq-body-small">
                          <span>Author Q&amp;A sessions</span>
                        </span>
                      </div>
                      <div class="pricing-list-item15">
                        <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                          <path
                            d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                          ></path>
                        </svg>
                        <span class="thq-body-small">
                          <span>Customized reading lists</span>
                        </span>
                      </div>
                      <div class="pricing-list-item16">
                        <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                          <path
                            d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                          ></path>
                        </svg>
                        <span class="thq-body-small">
                          <span>Feature text goes here</span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <button
                    class="pricing-button15 thq-button-animated thq-button-filled"
                  >
                    <span class="thq-body-small"><span>Buy Now</span></span>
                  </button>
                </div>
                <div class="pricing-column3 thq-card">
                  <div class="pricing-price14">
                    <div class="pricing-price15">
                      <p class="pricing-text32 thq-body-large">
                        <span>Enterprise plan</span>
                      </p>
                      <h3 class="pricing-text33 thq-heading-3">
                        <span>$29.99</span>
                      </h3>
                      <p class="thq-body-large"><span>or $499 yearly</span></p>
                    </div>
                    <div class="pricing-list3">
                      <div class="pricing-list-item17">
                        <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                          <path
                            d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                          ></path>
                        </svg>
                        <span class="thq-body-small">
                          <span>Unlimited access to all e-books</span>
                        </span>
                      </div>
                      <div class="pricing-list-item18">
                        <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                          <path
                            d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                          ></path>
                        </svg>
                        <span class="thq-body-small">
                          <span>Live virtual book club membership</span>
                        </span>
                      </div>
                      <div class="pricing-list-item19">
                        <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                          <path
                            d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                          ></path>
                        </svg>
                        <span class="thq-body-small">
                          <span>Personalized reading suggestions</span>
                        </span>
                      </div>
                      <div class="pricing-list-item20">
                        <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                          <path
                            d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                          ></path>
                        </svg>
                        <span class="thq-body-small">
                          <span>Feature text goes here</span>
                        </span>
                      </div>
                      <div class="pricing-list-item21">
                        <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                          <path
                            d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                          ></path>
                        </svg>
                        <span class="thq-body-small">
                          <span>Feature text goes here</span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <button
                    class="pricing-button16 thq-button-animated thq-button-filled"
                  >
                    <span class="thq-body-small"><span>Buy Now</span></span>
                  </button>
                </div>
              </div>
              <div class="pricing-container2">
                <div class="pricing-column4 thq-card">
                  <div class="pricing-price16">
                    <div class="pricing-price17">
                      <span class="pricing-text41 thq-body-large">
                        <span>Basic plan</span>
                      </span>
                      <h3 class="pricing-text42 thq-heading-3">
                        <span>$200/yr</span>
                      </h3>
                      <span class="thq-body-large">
                        <span>or $20 monthly</span>
                      </span>
                    </div>
                    <div class="pricing-list4">
                      <div class="pricing-list-item22">
                        <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                          <path
                            d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                          ></path>
                        </svg>
                        <span class="thq-body-small">
                          <span>Feature text goes here</span>
                        </span>
                      </div>
                      <div class="pricing-list-item23">
                        <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                          <path
                            d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                          ></path>
                        </svg>
                        <span class="thq-body-small">
                          <span>Feature text goes here</span>
                        </span>
                      </div>
                      <div class="pricing-list-item24">
                        <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                          <path
                            d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                          ></path>
                        </svg>
                        <span class="thq-body-small">
                          <span>Feature text goes here</span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <button
                    class="pricing-button17 thq-button-outline thq-button-animated"
                  >
                    <span class="thq-body-small"><span>Get started</span></span>
                  </button>
                </div>
                <div class="pricing-column5 thq-card">
                  <div class="pricing-price18">
                    <div class="pricing-price19">
                      <span class="pricing-text48 thq-body-large">
                        <span>Business plan</span>
                      </span>
                      <h3 class="pricing-text49 thq-heading-3">
                        <span>$299/yr</span>
                      </h3>
                      <span class="thq-body-large">
                        <span>or $29 monthly</span>
                      </span>
                    </div>
                    <div class="pricing-list5">
                      <div class="pricing-list-item25">
                        <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                          <path
                            d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                          ></path>
                        </svg>
                        <span class="thq-body-small">
                          <span>Feature text goes here</span>
                        </span>
                      </div>
                      <div class="pricing-list-item26">
                        <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                          <path
                            d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                          ></path>
                        </svg>
                        <span class="thq-body-small">
                          <span>Feature text goes here</span>
                        </span>
                      </div>
                      <div class="pricing-list-item27">
                        <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                          <path
                            d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                          ></path>
                        </svg>
                        <span class="thq-body-small">
                          <span>Feature text goes here</span>
                        </span>
                      </div>
                      <div class="pricing-list-item28">
                        <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                          <path
                            d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                          ></path>
                        </svg>
                        <span class="thq-body-small">
                          <span>Feature text goes here</span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <button
                    class="pricing-button18 thq-button-animated thq-button-filled"
                  >
                    <span class="thq-body-small"><span>Get started</span></span>
                  </button>
                </div>
                <div class="pricing-column6 thq-card">
                  <div class="pricing-price20">
                    <div class="pricing-price21">
                      <span class="pricing-text56 thq-body-large">
                        <span>Enterprise plan</span>
                      </span>
                      <h3 class="pricing-text57 thq-heading-3">
                        <span>$499/yr</span>
                      </h3>
                      <span class="thq-body-large">
                        <span>or $49 monthly</span>
                      </span>
                    </div>
                    <div class="pricing-list6">
                      <div class="pricing-list-item29">
                        <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                          <path
                            d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                          ></path>
                        </svg>
                        <span class="thq-body-small">
                          <span>Feature text goes here</span>
                        </span>
                      </div>
                      <div class="pricing-list-item30">
                        <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                          <path
                            d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                          ></path>
                        </svg>
                        <span class="thq-body-small">
                          <span>Feature text goes here</span>
                        </span>
                      </div>
                      <div class="pricing-list-item31">
                        <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                          <path
                            d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                          ></path>
                        </svg>
                        <span class="thq-body-small">
                          <span>Feature text goes here</span>
                        </span>
                      </div>
                      <div class="pricing-list-item32">
                        <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                          <path
                            d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                          ></path>
                        </svg>
                        <span class="thq-body-small">
                          <span>Feature text goes here</span>
                        </span>
                      </div>
                      <div class="pricing-list-item33">
                        <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                          <path
                            d="M384 690l452-452 60 60-512 512-238-238 60-60z"
                          ></path>
                        </svg>
                        <span class="thq-body-small">
                          <span>Feature text goes here</span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <button
                    class="pricing-button19 thq-button-animated thq-button-filled"
                  >
                    <span class="thq-body-small"><span>Get started</span></span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </pricing-wrapper>
        <steps-wrapper class="steps-wrapper">
          <!--Steps component-->
          <div class="steps-container1 thq-section-padding">
            <div class="steps-max-width thq-section-max-width">
              <div class="steps-container2 thq-grid-2">
                <div class="steps-section-header">
                  <h2 class="thq-heading-2">
                    Discover the Power of Our Products
                  </h2>
                  <p class="thq-body-large">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Suspendisse varius enim in eros elementum tristique. Duis
                    cursus, mi quis viverra ornare, eros dolor interdum nulla,
                    ut commodo diam libero vitae erat.
                  </p>
                  <div class="steps-actions">
                    <button
                      class="thq-button-animated thq-button-filled steps-button"
                    >
                      <span class="thq-body-small">Main action</span>
                    </button>
                  </div>
                </div>
                <div class="steps-container3">
                  <div class="steps-container4 thq-card">
                    <h2 class="thq-heading-2">
                      <span>Browse E-Book Collection</span>
                    </h2>
                    <span class="steps-text14 thq-body-small">
                      <span>
                        Explore our vast collection of e-books covering various
                        genres and topics.
                      </span>
                    </span>
                    <label class="steps-text15 thq-heading-3">01</label>
                  </div>
                  <div class="steps-container5 thq-card">
                    <h2 class="thq-heading-2">
                      <span>Select Your E-Book</span>
                    </h2>
                    <span class="steps-text17 thq-body-small">
                      <span>
                        Choose the e-book that interests you the most from our
                        curated selection.
                      </span>
                    </span>
                    <label class="steps-text18 thq-heading-3">02</label>
                  </div>
                  <div class="steps-container6 thq-card">
                    <h2 class="thq-heading-2">
                      <span>Purchase and Download</span>
                    </h2>
                    <span class="steps-text20 thq-body-small">
                      <span>
                        Complete the purchase process securely and download your
                        chosen e-book instantly.
                      </span>
                    </span>
                    <label class="steps-text21 thq-heading-3">03</label>
                  </div>
                  <div class="steps-container7 thq-card">
                    <h2 class="thq-heading-2"><span>Enjoy Reading</span></h2>
                    <span class="steps-text23 thq-body-small">
                      <span>
                        Start reading your e-book on your preferred device and
                        immerse yourself in the content.
                      </span>
                    </span>
                    <label class="steps-text24 thq-heading-3">04</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </steps-wrapper>
        <testimonial-wrapper class="testimonial-wrapper">
          <!--Testimonial component-->
          <div class="thq-section-padding">
            <div class="testimonial-max-width thq-section-max-width">
              <div class="testimonial-container10">
                <h2 class="thq-heading-2"><span>Testimonials</span></h2>
                <span class="testimonial-text11 thq-body-small">
                  <span>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                    do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua.
                  </span>
                </span>
              </div>
              <div class="thq-grid-2">
                <div class="thq-animated-card-bg-2">
                  <div class="thq-animated-card-bg-1">
                    <div
                      data-animated="true"
                      class="thq-card testimonial-card1"
                    >
                      <div class="testimonial-container12">
                        <img
                          alt="Image of John Doe"
                          src="https://images.unsplash.com/photo-1531300185372-b7cbe2eddf0b?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTczMDU3MDU2Nnw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                          class="testimonial-image1"
                        />
                        <div class="testimonial-container13">
                          <strong class="thq-body-large">
                            <span>John Doe</span>
                          </strong>
                          <span class="thq-body-small">
                            <span>CEO, Company ABC</span>
                          </span>
                        </div>
                      </div>
                      <span class="testimonial-text14 thq-body-small">
                        <span>
                          This e-book has completely transformed the way we
                          approach marketing strategies. Highly recommended!
                        </span>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="thq-animated-card-bg-2">
                  <div class="thq-animated-card-bg-1">
                    <div
                      data-animated="true"
                      class="thq-card testimonial-card2"
                    >
                      <div class="testimonial-container14">
                        <img
                          alt="Image of Jane Smith"
                          src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTczMDU3MDU2N3w&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                          class="testimonial-image2"
                        />
                        <div class="testimonial-container15">
                          <strong class="thq-body-large">
                            <span>Jane Smith</span>
                          </strong>
                          <span class="thq-body-small">
                            <span>Marketing Manager, XYZ Inc.</span>
                          </span>
                        </div>
                      </div>
                      <span class="testimonial-text17 thq-body-small">
                        <span>
                          I have learned so much from this e-book. It's a
                          must-read for anyone in the marketing field.
                        </span>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="thq-animated-card-bg-2">
                  <div class="thq-animated-card-bg-1">
                    <div
                      data-animated="true"
                      class="thq-card testimonial-card3"
                    >
                      <div class="testimonial-container16">
                        <img
                          alt="Image of David Johnson"
                          src="https://images.unsplash.com/photo-1542909168-82c3e7fdca5c?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTczMDU3MDU2N3w&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                          class="testimonial-image3"
                        />
                        <div class="testimonial-container17">
                          <strong class="thq-body-large">
                            <span>David Johnson</span>
                          </strong>
                          <span class="thq-body-small">
                            <span>Digital Marketing Specialist</span>
                          </span>
                        </div>
                      </div>
                      <span class="testimonial-text20 thq-body-small">
                        <span>
                          The insights shared in this e-book are invaluable. I
                          have already seen a positive impact on our campaigns.
                        </span>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="thq-animated-card-bg-2">
                  <div class="thq-animated-card-bg-1">
                    <div
                      data-animated="true"
                      class="thq-card testimonial-card4"
                    >
                      <div class="testimonial-container18">
                        <img
                          alt="Image of Emily Brown"
                          src="https://images.unsplash.com/photo-1646831520727-3dc0dec96bab?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTczMDU3MDU2N3w&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=1080"
                          class="testimonial-image4"
                        />
                        <div class="testimonial-container19">
                          <strong class="thq-body-large">
                            <span>Emily Brown</span>
                          </strong>
                          <span class="thq-body-small">
                            <span>Social Media Coordinator, LMN Corp.</span>
                          </span>
                        </div>
                      </div>
                      <span class="testimonial-text23 thq-body-small">
                        <span>
                          I can't thank the authors enough for putting together
                          such a comprehensive guide. It's been a game-changer
                          for me.
                        </span>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </testimonial-wrapper>
        <contact-wrapper class="contact-wrapper">
          <!--Contact component-->
          <div class="contact-contact20 thq-section-padding">
            <div class="contact-max-width thq-section-max-width">
              <div class="contact-section-title">
                <span class="thq-body-small">
                  <span>
                    Our customer service team is available Monday to Friday, 9am
                    to 5pm.
                  </span>
                </span>
                <div class="contact-content1">
                  <h2 class="thq-heading-2"><span>Contact Us</span></h2>
                  <p class="contact-text3 thq-body-large">
                    <span>
                      Have a question or need support? Feel free to reach out to
                      us.
                    </span>
                  </p>
                </div>
              </div>
              <div class="contact-row">
                <div class="contact-content2">
                  <svg viewBox="0 0 1024 1024" class="thq-icon-medium">
                    <path
                      d="M854 342v-86l-342 214-342-214v86l342 212zM854 170q34 0 59 26t25 60v512q0 34-25 60t-59 26h-684q-34 0-59-26t-25-60v-512q0-34 25-60t59-26h684z"
                    ></path>
                  </svg>
                  <div class="contact-contact-info1">
                    <div class="contact-content3">
                      <h3 class="contact-text4 thq-heading-3">Email</h3>
                      <p class="contact-text5 thq-body-large">
                        <span>
                          For inquiries about our e-books or assistance with
                          your purchases, please contact us using the
                          information provided.
                        </span>
                      </p>
                    </div>
                    <span class="contact-email thq-body-small">
                      <span>info@ebookwebsite.com</span>
                    </span>
                  </div>
                </div>
                <div class="contact-content4">
                  <svg viewBox="0 0 1024 1024" class="thq-icon-medium">
                    <path
                      d="M282 460q96 186 282 282l94-94q20-20 44-10 72 24 152 24 18 0 30 12t12 30v150q0 18-12 30t-30 12q-300 0-513-213t-213-513q0-18 12-30t30-12h150q18 0 30 12t12 30q0 80 24 152 8 26-10 44z"
                    ></path>
                  </svg>
                  <div class="contact-contact-info2">
                    <div class="contact-content5">
                      <h3 class="contact-text6 thq-heading-3">Phone</h3>
                      <p class="contact-text7 thq-body-large">
                        <span>
                          Follow us on social media for updates and promotions.
                        </span>
                      </p>
                    </div>
                    <span class="contact-phone thq-body-small">
                      <span>+1-123-456-7890</span>
                    </span>
                  </div>
                </div>
                <div class="contact-content6">
                  <svg viewBox="0 0 1024 1024" class="thq-icon-medium">
                    <path
                      d="M512 0c-176.732 0-320 143.268-320 320 0 320 320 704 320 704s320-384 320-704c0-176.732-143.27-320-320-320zM512 512c-106.040 0-192-85.96-192-192s85.96-192 192-192 192 85.96 192 192-85.96 192-192 192z"
                    ></path>
                  </svg>
                  <div class="contact-contact-info3">
                    <div class="contact-content7">
                      <h3 class="contact-text8 thq-heading-3">Office</h3>
                      <p class="contact-text9 thq-body-large">
                        <span>
                          We value your feedback and strive to provide the best
                          service to our customers.
                        </span>
                      </p>
                    </div>
                    <span class="contact-address thq-body-small">
                      <span>123 Main Street, City, Country</span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </contact-wrapper>
        <footer-wrapper class="footer-wrapper">
          <!--Footer component-->
          <footer class="footer-footer1 thq-section-padding">
            <div class="footer-max-width thq-section-max-width">
              <div class="footer-content">
                <div class="footer-newsletter">
                  <span class="thq-body-small">
                    Subscribe to our newsletter for the latest updates on new
                    features and product releases.
                  </span>
                  <div class="footer-actions">
                    <div class="footer-form">
                      <div class="footer-container">
                        <input
                          type="email"
                          placeholder="Enter your email"
                          class="footer-text-input thq-input"
                        />
                      </div>
                      <button class="thq-button-outline footer-button">
                        <span class="thq-body-small">
                          <span>Subscribe to Newsletter</span>
                        </span>
                      </button>
                    </div>
                    <span class="footer-content2 thq-body-small">
                      <span>© 2022 E Book Website. All Rights Reserved.</span>
                    </span>
                  </div>
                </div>
                <div class="footer-links">
                  <div class="footer-column1">
                    <strong class="thq-body-large footer-column1-title">
                      <span>Explore</span>
                    </strong>
                    <div class="footer-footer-links1">
                      <a
                        href="https://example.com"
                        target="_blank"
                        rel="noreferrer noopener"
                        class="thq-body-small"
                      >
                        <span>Home</span>
                      </a>
                      <a
                        href="https://example.com"
                        target="_blank"
                        rel="noreferrer noopener"
                        class="thq-body-small"
                      >
                        <span>About Us</span>
                      </a>
                      <a
                        href="https://example.com"
                        target="_blank"
                        rel="noreferrer noopener"
                        class="thq-body-small"
                      >
                        <span>Contact Us</span>
                      </a>
                      <a
                        href="https://example.com"
                        target="_blank"
                        rel="noreferrer noopener"
                        class="thq-body-small"
                      >
                        <span>Terms of Service</span>
                      </a>
                      <a
                        href="https://example.com"
                        target="_blank"
                        rel="noreferrer noopener"
                        class="thq-body-small"
                      >
                        <span>Privacy Policy</span>
                      </a>
                    </div>
                  </div>
                  <div class="footer-column2">
                    <strong class="thq-body-large footer-column2-title">
                      <span>Legal</span>
                    </strong>
                    <div class="footer-footer-links2">
                      <a
                        href="https://example.com"
                        target="_blank"
                        rel="noreferrer noopener"
                        class="thq-body-small"
                      >
                        <span>Cookies Policy</span>
                      </a>
                      <a
                        href="https://example.com"
                        target="_blank"
                        rel="noreferrer noopener"
                        class="thq-body-small"
                      >
                        <span>Disclaimer</span>
                      </a>
                      <a
                        href="https://example.com"
                        target="_blank"
                        rel="noreferrer noopener"
                        class="thq-body-small"
                      >
                        <span>Refund Policy</span>
                      </a>
                      <a
                        href="https://example.com"
                        target="_blank"
                        rel="noreferrer noopener"
                        class="thq-body-small"
                      >
                        <span>Copyright Policy</span>
                      </a>
                      <a
                        href="https://example.com"
                        target="_blank"
                        rel="noreferrer noopener"
                        class="thq-body-small"
                      >
                        <span>DMCA Policy</span>
                      </a>
                    </div>
                  </div>
                  <div class="footer-column3">
                    <strong class="thq-body-large footer-social-link1-title">
                      <span>Connect with Us</span>
                    </strong>
                    <div class="footer-social-links">
                      <div class="footer-link14">
                        <svg
                          viewBox="0 0 877.7142857142857 1024"
                          class="thq-icon-small"
                        >
                          <path
                            d="M713.143 73.143c90.857 0 164.571 73.714 164.571 164.571v548.571c0 90.857-73.714 164.571-164.571 164.571h-107.429v-340h113.714l17.143-132.571h-130.857v-84.571c0-38.286 10.286-64 65.714-64l69.714-0.571v-118.286c-12-1.714-53.714-5.143-101.714-5.143-101.143 0-170.857 61.714-170.857 174.857v97.714h-114.286v132.571h114.286v340h-304c-90.857 0-164.571-73.714-164.571-164.571v-548.571c0-90.857 73.714-164.571 164.571-164.571h548.571z"
                          ></path>
                        </svg>
                        <span class="thq-body-small">Facebook</span>
                      </div>
                      <div class="footer-link15">
                        <svg
                          viewBox="0 0 877.7142857142857 1024"
                          class="thq-icon-small"
                        >
                          <path
                            d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
                          ></path>
                        </svg>
                        <span class="thq-body-small">Instagram</span>
                      </div>
                      <div class="footer-link16">
                        <svg
                          viewBox="0 0 950.8571428571428 1024"
                          class="thq-icon-small"
                        >
                          <path
                            d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
                          ></path>
                        </svg>
                        <span class="thq-body-small">X</span>
                      </div>
                      <div class="footer-link17">
                        <svg
                          viewBox="0 0 877.7142857142857 1024"
                          class="thq-icon-small"
                        >
                          <path
                            d="M135.429 808h132v-396.571h-132v396.571zM276 289.143c-0.571-38.857-28.571-68.571-73.714-68.571s-74.857 29.714-74.857 68.571c0 37.714 28.571 68.571 73.143 68.571h0.571c46.286 0 74.857-30.857 74.857-68.571zM610.286 808h132v-227.429c0-121.714-65.143-178.286-152-178.286-70.857 0-102.286 39.429-119.429 66.857h1.143v-57.714h-132s1.714 37.143 0 396.571v0h132v-221.714c0-11.429 0.571-23.429 4-32 9.714-23.429 31.429-48 68-48 47.429 0 66.286 36 66.286 89.714v212zM877.714 237.714v548.571c0 90.857-73.714 164.571-164.571 164.571h-548.571c-90.857 0-164.571-73.714-164.571-164.571v-548.571c0-90.857 73.714-164.571 164.571-164.571h548.571c90.857 0 164.571 73.714 164.571 164.571z"
                          ></path>
                        </svg>
                        <span class="thq-body-small">LinkedIn</span>
                      </div>
                      <div class="footer-link18">
                        <svg viewBox="0 0 1024 1024" class="thq-icon-small">
                          <path
                            d="M406.286 644.571l276.571-142.857-276.571-144.571v287.429zM512 152c215.429 0 358.286 10.286 358.286 10.286 20 2.286 64 2.286 102.857 43.429 0 0 31.429 30.857 40.571 101.714 10.857 82.857 10.286 165.714 10.286 165.714v77.714s0.571 82.857-10.286 165.714c-9.143 70.286-40.571 101.714-40.571 101.714-38.857 40.571-82.857 40.571-102.857 42.857 0 0-142.857 10.857-358.286 10.857v0c-266.286-2.286-348-10.286-348-10.286-22.857-4-74.286-2.857-113.143-43.429 0 0-31.429-31.429-40.571-101.714-10.857-82.857-10.286-165.714-10.286-165.714v-77.714s-0.571-82.857 10.286-165.714c9.143-70.857 40.571-101.714 40.571-101.714 38.857-41.143 82.857-41.143 102.857-43.429 0 0 142.857-10.286 358.286-10.286v0z"
                          ></path>
                        </svg>
                        <span class="thq-body-small">Youtube</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="footer-credits">
                <div class="thq-divider-horizontal"></div>
                <div class="footer-row">
                  <span class="thq-body-small">
                    <span>Stay updated with our latest news and offers.</span>
                  </span>
                  <div class="footer-footer-links3">
                    <span class="thq-body-small"><span>/privacy</span></span>
                    <span class="thq-body-small"><span>/terms</span></span>
                    <span class="thq-body-small"><span>/cookies</span></span>
                  </div>
                </div>
              </div>
            </div>
          </footer>
        </footer-wrapper>
      </div>
    </div>
    <script
      data-section-id="navbar"
      src="https://unpkg.com/@teleporthq/teleport-custom-scripts"
    ></script>
  </body>
</html>
