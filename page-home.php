<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<main>
  <section class="hello reveal">
    <h2>Hello, I'm Mark.</h2>
    <div class="container">
      <p>I'm a freelance designer/developer based in Sechelt, on the beautiful Sunshine Coast in British Columbia, Canada.</p>
      <p>Formerly a developer at both Thompson Rivers University and Athabasca University, I am highly experienced in designing and developing custom websites.</p>
      <p>Get in touch with me for any project ideas. I'd love to work with you!</p>
    </div>
  </section>

  <section class="skills-services">
    <h2>My skills and services</h2>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="bubble bubble--design-development reveal">
            <h3>Design and development</h3>
            <p>I love building websites, whether it involves using my own design ideas or just coding up a pre-established concept or mockup.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="bubble bubble--seo-speed-optimization reveal">
            <h3>SEO and speed optimization</h3>
            <p>I have plenty of experience fine tuning websites so that they rank highly on Google and integrate well with social. Also, I enjoy optimizing webpages for responsive screensizes and speed.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="bubble bubble--maintenance-security reveal">
            <h3>Maintenance and security</h3>
            <p>Let me help you keep your site fresh and humming with new content while ensuring it stays up to date with plugin and theme updates. I'll make sure your site is not vulnerable to security issues and keep regular backups.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="bubble bubble--content-writing-strategy reveal">
            <h3>Content writing and strategy</h3>
            <p>Also a bit of an English nerd, let me help you with content writing and proofreading. After all, websites are nothing without the information they contain. This facet of the user experience is often overlooked!</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col col--button mt-4 mt-md-5">
          <a href="#contact" class="btn btn-primary btn-lg reveal" role="button">Contact me</a>
        </div>
        <div class="col col--button mt-4 mt-md-5">
          <a href="/resume" class="btn btn-primary btn-lg reveal" role="button">View my resume</a>
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
          <div class="row">
            <?php while ( $the_query->have_posts() ) :    $the_query->the_post(); ?>
              <div class="col-lg-6 col-xl-4">
                <a href="<?php the_permalink(); ?>" class="portfolio-link">
                  <div class="bubble bubble--portfolio reveal">
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
    <a href="/portfolio/" class="btn btn-primary btn-lg reveal" role="button">View my portfolio</a>
  </section>

  <section id="contact" class="get-in-touch reveal">
    <h2>Get in touch</h2>

    <?php echo apply_shortcodes( '[contact-form-7 id="427" title="Contact form 1"]' ); ?>
    
  </section>

  <?php the_content(); ?>

</main>

<?php

get_footer();
