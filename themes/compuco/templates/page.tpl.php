<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

  <header class="container-fluid bg-primary text-white p-3">
    <div class="container">
      <h1><?php print $site_name; ?></h1>
    </div>
  </header>

  <main class="container mt-4">
    <div class="row">
      <?php if ($page['sidebar_first']): ?>
        <aside class="col-md-3">
          <?php print render($page['sidebar_first']); ?>
        </aside>
      <?php endif; ?>

      <section class="col-md-<?php print ($page['sidebar_first'] && $page['sidebar_second']) ? 6 : 9; ?>">
        <?php print $messages; ?>
        <?php print render($page['content']); ?>
      </section>

      <?php if ($page['sidebar_second']): ?>
        <aside class="col-md-3">
          <?php print render($page['sidebar_second']); ?>
        </aside>
      <?php endif; ?>
    </div>
  </main>

  <footer class="container-fluid bg-dark text-white text-center p-3 mt-4">
    <div class="container text-center">
      <div class="row align-items-start">
        <div class="col">
          One of three columns
        </div>
        <div class="col">
          One of three columns
        </div>
        <div class="col">
          One of three columns
        </div>
      </div>
    </div>

  </footer>

</body>

</html>
