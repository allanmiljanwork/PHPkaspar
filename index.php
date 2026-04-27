<?php

$title = 'World news';
$posts = [

  [
    'title' => 'World News 1',
    'author' => 'Billy',
    'published' => '27.04.2026',
    'body' => 'world news body'
  ],

  [
    'title' => 'World News 2',
    'author' => 'Calico',
    'published' => '26.04.2026',
    'body' => 'world news body'
  ],

  [
    'title' => 'World News 3',
    'author' => 'Wraith',
    'published' => '25.04.2026',
    'body' => 'world news body'
  ],
  
]

  ?>


<?php include 'partials/header.php'; ?>
<main class="container">
  <?php include 'partials/hero.php'; ?>
  <?php include 'partials/featured.php'; ?>
  <div class="row g-5">
    <div class="col-md-8">
      <?php include 'partials/posts.php'; ?>
    </div>
    <div class="col-md-4">
      <?php include 'partials/sidebar.php'; ?>
    </div>
  </div>
</main>
<?php include 'partials/footer.php'; ?>