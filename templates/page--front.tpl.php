<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php isset($head_title) ? print $head_title : 'Home'; ?></title>
  <?php
  if (isset($styles)) {
    print $styles;
  }
  if (isset($scripts)) {
    print $scripts;
  }
  ?>
</head>

<body class="<?php print $classes; ?>" <?php print $attributes; ?>>

  <header class="header-wrapper container-fluid bg-light text-white">
    <nav>
      <section class="section-class">
        <?php print render($page['navigation']); ?>
        <?php if ($main_menu): ?>
          <div id="main-menu" class="navigation">
            <?php print theme('links__system_main_menu', array(
              'links' => $main_menu,
              'attributes' => array(
                'id' => 'main-menu-links',
                'class' => array('links', 'clearfix'),
              ),
              'heading' => array(
                'text' => t('Main menu'),
                'level' => 'h2',
                'class' => array('element-invisible'),
              ),
            )); ?>
          </div> <!-- /#main-menu -->
        <?php endif; ?>

        <?php if ($secondary_menu): ?>
          <div id="secondary-menu" class="navigation">
            <?php print theme('links__system_secondary_menu', array(
              'links' => $secondary_menu,
              'attributes' => array(
                'id' => 'secondary-menu-links',
                'class' => array('links', 'inline', 'clearfix'),
              ),
              'heading' => array(
                'text' => t('Secondary menu'),
                'level' => 'h2',
                'class' => array('element-invisible'),
              ),
            )); ?>
          </div> <!-- /#secondary-menu -->
        <?php endif; ?>
      </section>
    </nav>
  </header>

  <section class="container-fluid hero-banner--wrapper px-0">
    <?php print render($page['content_first']); ?>
  </section>

  <main class="container main-wrapper">
    <div class="row">
      <section class="section-class px-0">
        <?php print $messages; ?>
        <?php print render($page['content']); ?>
      </section>

    </div>
  </main>

  <footer class="bg-primary-compuco text-white text-center">
    <div class="parent-container">
      <div class="row align-items-start">
        <div class="col-1 px-0">
          <?php print render($page['footer_left']); ?>
        </div>
        <div class="col-2 px-0">
          <?php print render($page['footer_middle']); ?>
        </div>
        <div class="col-3 px-0">
          <?php print render($page['footer_right']); ?>
        </div>
      </div>
    </div>
    <div class="policy-wrapper text-center">
      <?php print render($page['footer']); ?>
    </div>
    <div class="copy-right--outer">
      <?php print render($page['footer_bottom']); ?>
    </div>
  </footer>
</body>

</html>
