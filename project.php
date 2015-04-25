<?php
  include __DIR__.'/includes/_header.php';

  if(isset($_GET['alias'])) {
    $alias = $_GET['alias'];
  }

  $parser = new \cebe\markdown\Markdown();

  if (isset($projects[$alias])) {
?>

<div class="constrain constrain--max constrain--hero space--top-double space-desk--top-triple space--bottom-double">
  <div class="grid">
    <div class="grid__item width-lap--2of3 width-desk--1of2">
      <h1 class="heading-1 headline headline--upper space--bottom-quarter">
        <?= $projects[$alias]['name']; ?>
      </h1>
      <div class="constrain constrain--small constrain--text">
        <p class="text--hero space--bottom-double space-lap--bottom-none">
          <?= $projects[$alias]['description']; ?>
        </p>
      </div>
    </div><!--
 --><div class="grid__item width-lap--1of3 width-desk--1of2">
      <div class="fading-box">
        <div class="grid">
          <div class="grid__item width--1of1">
            <div class="fading-seperator">
              <div class="labeled-text-hero">
                <span class="labeled-text-hero__label">Github Repo</span>
                <p class="space--bottom-none"><a href="<?= $projects[$alias]['github']; ?>" target="_blank"><?= preg_replace('/https:\/\/github.com\//', '', $projects[$alias]['github']); ?></a></p>
              </div>
            </div>
          </div><!--
       --><div class="grid__item width--1of4">
            <div class="labeled-text-hero">
              <span class="labeled-text-hero__label">Stars</span>
              <p class="space--bottom-none"><?= $github[$alias]['stars'] ?></p>
            </div>
          </div><!--
       --><div class="grid__item width--1of4">
            <div class="labeled-text-hero">
              <span class="labeled-text-hero__label">Forks</span>
              <p class="space--bottom-none"><?= $github[$alias]['forks'] ?></p>
            </div>
          </div><!--
       --><div class="grid__item width--1of4">
            <div class="labeled-text-hero">
              <span class="labeled-text-hero__label">Language</span>
              <p class="space--bottom-none"><?= ($github[$alias]['language']) ? $github[$alias]['language'] : 'N/A' ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="constrain constrain--max text--center">
  <img class="project-image" src="assets/images/project/<?= $alias; ?>.png" alt="Project: <?= $projects[$alias]['name']; ?>" />
</div>
<div class="constrain constrain--max">
  <div class="sheet">
    <div class="headline-wrap">
      <h1 class="headline heading-3 headline--upper space--bottom-double space-desk-wide--bottom-triple headline--wavy">Project Description</h1>
    </div>
    <div class="grid grid--large">

      <div class="grid__item width-lap--1of2">
        <h2 class="headline headline--upper heading-6">About:</h2>
        <div class="labeled-text">
          <div class="labeled-text__label-wrap">
            <span class="labeled-text__label">Name</span>
          </div>
          <p class="typewriter"><?= $projects[$alias]['name']; ?></p>
        </div>
        <div class="labeled-text">
          <div class="labeled-text__label-wrap">
            <span class="labeled-text__label">Date</span>
          </div>
          <p class="typewriter"><?= explode("-", $projects[$alias]['date'])[0]; ?><span class="typewriter__prefill">—</span><?= explode("-", $projects[$alias]['date'])[1]; ?><span class="typewriter__prefill">—</span><?= explode("-", $projects[$alias]['date'])[2]; ?></p>
        </div>
      </div><!--
   --><div class="grid__item width-lap--1of2">
        <div class="space--top-double space-lap--top-none">
          <div class="text-group">
            <h2 class="headline text-group__headline headline--upper heading-6">
              <span class="text-group__headline-inner">Language Detail:</span>
            </h2>
            <div class="grid">
              <?php

                if (isset($github[$alias]['languages'])) {

                  // Increment variable to determine if we need to open a new 1of2 div
                  $languageIncrement = 1;

                  // Loop through available languages
                  foreach ($github[$alias]['languages'] as $language => $percent) {
                    // If odd increment count
                    if($languageIncrement%2) {
                      // Close div if it's not the first
                      echo $languageIncrement > 0 ? '</div>' : '';
                      // Start new 1of2 grid container
                      echo '<div class="grid__item width-tab--1of2 width-lap--1of1 width-desk-wide--1of2">';
                    }
                    ?>

                    <div class="labeled-text">
                      <div class="labeled-text__label-wrap">
                        <span class="labeled-text__label"><?= $language ?></span>
                      </div>
                      <p class="typewriter"><?= $percent ?>%</p>
                    </div>

                    <?php
                    // Increment variable
                    $languageIncrement++;
                  }
                } else {
                  // No languages available
                  ?>
                    <div class="grid__item width-tab--1of2 width-lap--1of1 width-desk-wide--1of2">
                      <div class="labeled-text">
                        <div class="labeled-text__label-wrap">
                          <span class="labeled-text__label">N/A</span>
                        </div>
                        <p class="typewriter">??%</p>
                      </div>
                    </div>
                  <?php
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <h2 class="headline headline--upper heading-6 space--top-double">
      <span class="text-group__headline-inner">Additional Info:</span>
    </h2>
    <?php if (isset($projects[$alias]['additional']['information'])): ?>
      <div class="labeled-text">
        <div class="labeled-text__label-wrap">
          <span class="labeled-text__label">Detailed Information</span>
        </div>
        <div class="typewriter">
          <?= $parser->parse($projects[$alias]['additional']['information']); ?>
        </div>
      </div>
    <?php endif; ?>
    <?php if (isset($projects[$alias]['additional']['libraries'])): ?>
      <div class="labeled-text">
        <div class="labeled-text__label-wrap">
          <span class="labeled-text__label">Libraries</span>
        </div>
        <ul class="typewriter">
          <?php foreach ($projects[$alias]['additional']['libraries'] as $library): ?>
            <?php if (isset($library['link'])): ?>
              <li><?= $library['name']; ?> (<a href="<?= $library['link']; ?>"><?= preg_replace('/http[s]?:\/\//', '', $library['link']); ?></a>)</li>
            <?php else: ?>
              <li><?= $library['name']; ?></li>
            <?php endif; ?>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>
    <?php if (isset($projects[$alias]['additional']['dependencies'])): ?>
      <div class="labeled-text">
        <div class="labeled-text__label-wrap">
          <span class="labeled-text__label">Dependencies</span>
        </div>
        <ul class="typewriter">
          <?php foreach ($projects[$alias]['additional']['dependencies'] as $dependency): ?>
            <?php if (isset($dependency['link'])): ?>
              <li><?= $dependency['name']; ?> (<a href="<?= $dependency['link']; ?>"><?= preg_replace('/http[s]?:\/\//', '', $dependency['link']); ?></a>)</li>
            <?php else: ?>
              <li><?= $dependency['name']; ?></li>
            <?php endif; ?>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>
    <?php if (isset($projects[$alias]['additional']['license'])): ?>
      <div class="labeled-text">
        <div class="labeled-text__label-wrap">
          <span class="labeled-text__label">License</span>
        </div>
        <div class="typewriter">
          <p><a href="<?= $projects[$alias]['github']; ?>/blob/master/LICENSE" target="_blank"><?= $projects[$alias]['additional']['license']; ?></a></p>
        </div>
      </div>
    <?php endif; ?>
<?php
  } else {
    include __DIR__.'/includes/_error.php';
  }
  include __DIR__.'/includes/_footer.php';
?>
