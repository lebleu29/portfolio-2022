<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<main>
  <section class="hello">
    <h2>Hello, I'm Mark.</h2>
    <div class="container">
      <p>I'm a freelance designer/developer based in Sechelt, which is on the beautiful Sunshine Coast in British Columbia, Canada.</p>
      <p>I am highly experienced in designing and developing custom WordPress websites. I love what I do!</p>
    </div>
  </section>

  <section class="skills-services">
    <h2>My skills and services</h2>
    <div class="container">
      <div class="row g-5">
        <div class="col-md-6">
          <div class="bubble bubble--design-development">
            <h3>Design and development</h3>
            <p>I love building websites, whether it involves using my own design ideas or just coding up a pre-established concept or mockup.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="bubble bubble--seo-speed-optimization">
            <h3>SEO and speed optimization</h3>
            <p>I have plenty of experience fine tuning websites so that they rank highly on Google and integrate well with social. Also, I enjoy optimizing webpages for responsive screensizes and speed.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="bubble bubble--maintenance-security">
            <h3>Maintenance and security</h3>
            <p>Let me help you keep your site fresh and humming with new content while ensuring it stays up to date with plugin and theme updates. I'll make sure your site is not vulnerable to security issues and keep regular backups.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="bubble bubble--content-writing-strategy">
            <h3>Content writing and strategy</h3>
            <p>Also a bit of an English nerd, let me help you with content writing and proofreading. After all, websites are nothing without the information they contain. This facet of the user experience is often overlooked!</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col col--button mt-4 mt-md-5">
          <a href="/contact" class="btn btn-primary btn-lg" role="button">Contact me</a>
        </div>
        <div class="col col--button mt-4 mt-md-5">
          <a href="/resume" class="btn btn-primary btn-lg" role="button">View my resume</a>
        </div>
      </div>
    </div>
  </section>

  <section class="recent-work">
    <h2>Recent work</h2>
    <div class="container">
      <?php
      $args = array(
          'post_type' => 'jetpack-portfolio',
          'posts_per_page' => 6
      );
      $the_query = new WP_Query( $args ); ?>

      <?php if ( $the_query->have_posts() ) : ?>
          <div class="row g-5">
            <?php while ( $the_query->have_posts() ) :    $the_query->the_post(); ?>
              <div class="col-lg-6 col-xl-4">
                <a href="<?php the_permalink(); ?>" class="portfolio-link">
                  <div class="bubble bubble--portfolio">
                    <figure>
                      <?php the_post_thumbnail(); ?>
                    </figure>
                  </div>
                  <h3><?php the_title(); ?></h3>
                </a>
              </div>
            <?php endwhile; ?>
          </div>
          <?php wp_reset_postdata(); ?>

      <?php endif; ?>
    </div>
    <a href="/portfolio" class="btn btn-primary btn-lg" role="button">View my portfolio</a>
  </section>

  <section class="get-in-touch">
    <h2>Get in touch</h2>
    <p>Have a problem that needs solving?</p>

    <?php
    if(isset($_POST['get-in-touch-submit'])){ 
        $name = $_POST['get-in-touch-name'];
        $email = $_POST['get-in-touch-email'];
        $message = $_POST['get-in-touch-message'];

        $subject = "New form submission on mrobertsweb.ca";
        $email_body = "You have received a new message from $name.\n";
        "Here is the message:\n $message"; 

        $to = "markaaronroberts@icloud.com";

        $headers = "From: $name \r\n";

        $headers .= "Reply-To: $email \r\n";

        mail($to,$subject,$email_body,$headers);

        ?>

        <div class="container">
            <p>Thank you for your message. I will be in touch soon.</p>
        </div> <?php
    } else { ?>
        <form class="container" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="get-in-touch-name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="get-in-touch-name" placeholder="John Smith">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="get-in-touch-email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="get-in-touch-email" placeholder="name@example.com">
                    </div>
                </div>
            </div>
            <div class="mb-3 mt-md-3">
                <label for="get-in-touch-message" class="form-label">Message</label>
                <textarea class="form-control" id="get-in-touch-message" rows="3"></textarea>
            </div>
            <button class="btn btn-primary btn-lg" type="submit" name="get-in-touch-submit">Submit</button>
        </form>
    <?php } ?>
    
  </section>

  <section class="top-of-page">

  </section>

</main>

<?php

get_footer();
