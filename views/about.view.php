<?php require 'partials/header.php'; ?>
<body>
<!-- This example requires Tailwind CSS v3.0+ -->

<div class="isolate bg-white">
<?php require 'partials/banner.php'; ?>
  
  <div class="px-6 pt-6 lg:px-8">
    <?php require 'partials/nav.php'; ?>
  
  </div>
  <main>
    <div class="relative px-6 lg:px-8">
        <h1><?= $heading ?></h1>
     
    </div>
  </main>
</div>
</body>
<?php require 'partials/footer.php'; ?>