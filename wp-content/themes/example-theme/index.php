<?php

get_header();
get_footer();
get_sidebar();

?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"> />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Example WordPress Theme</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  </head>

  <body>
    <div class="container">
      <header class="page-header">
        <div class="header-top-left">
          <img src="//place-hold.it/200x100?text=Logo" alt="Logo" />
        </div>
        <div class="header-top-right">
          <nav>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Products</a></li>
              <li><a href="#">About us</a></li>
            </ul>
          </nav>
        </div>
        <section class="hero">
          <div class="hero-text">
            <h1>Welcome to our website</h1>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Quisquam, quos.
            </p>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/map.svg" alt="Hero" />
        </section>
      </header>
      <main>
        <section class="products">
          <h2>Featured Products</h2>
          <article class="product">
            <img src="//place-hold.it/200x200?text=Product" alt="Product" />
            <h3>Product 1</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Quisquam, quos.
            </p>
            <a href="#">Read More</a>
          </article>
          <article class="product">
            <img src="//place-hold.it/200x200?text=Product" alt="Product" />
            <h3>Product 2</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Quisquam, quos.
            </p>
            <a href="#">Read More</a>
          </article>
          <article class="product">
            <img src="//place-hold.it/200x200?text=Product" alt="Product" />
            <h3>Product 3</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Quisquam, quos.
            </p>
            <a href="#">Read More</a>
          </article>
        </section>
      </main>
      <aside>
        <section class="contact">
          <h2>Contact Us</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam,
            quos.
          </p>
          <a href="#">Contact Us</a>
        </section>
      </aside>
      <footer>
        <p>&copy; 2024 ILE</p>
      </footer>
    </div>
  </body>
</html>
