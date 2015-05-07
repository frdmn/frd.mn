<?php $this->layout('layouts/default', compact('data', 'alias')) ?>

<?php
  $headingClass = 'heading-1';

  // if name contains a word with more than 11 characters
  if (max(array_map('strlen', explode(' ', str_replace('-', ' ', $data['projects'][$alias]['name'])))) >= 11) {
    $headingClass = 'heading-2 space--top';
  }

  // if name itself has more than 24 characters
  if (strlen($data['projects'][$alias]['name']) >= 24) {
    $headingClass = 'heading-2 space--top';
  }
?>

      <div class="constrain constrain--max constrain--hero space--bottom">
        <div class="grid">
          <div class="grid__item width-lap--2of3 width-desk--1of2">
            <h1 class="<?= $headingClass ?> headline headline--upper space--bottom-quarter">
              <?= $data['projects'][$alias]['name']; ?>
            </h1>
            <div class="constrain constrain--small constrain--text">
              <p class="text--hero space--bottom-double space-lap--bottom-none">
                <?= $data['projects'][$alias]['description']; ?>
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
                      <p class="space--bottom-none"><a href="<?= $data['projects'][$alias]['github']; ?>" target="_blank"><?= preg_replace('/https:\/\/github.com\//', '', $data['projects'][$alias]['github']); ?></a></p>
                    </div>
                  </div>
                </div><!--
             --><div class="grid__item width--1of4">
                  <div class="labeled-text-hero">
                    <span class="labeled-text-hero__label">Stars</span>
                    <p class="space--bottom-none"><?= $data['github'][$data['projects'][$alias]['owner'].'/'.$alias]['stars'] ?></p>
                  </div>
                </div><!--
             --><div class="grid__item width--1of4">
                  <div class="labeled-text-hero">
                    <span class="labeled-text-hero__label">Forks</span>
                    <p class="space--bottom-none"><?= $data['github'][$data['projects'][$alias]['owner'].'/'.$alias]['forks'] ?></p>
                  </div>
                </div><!--
             --><div class="grid__item width--1of4">
                  <div class="labeled-text-hero">
                    <span class="labeled-text-hero__label">Language</span>
                    <p class="space--bottom-none"><?= (isset($data['github'][$data['projects'][$alias]['owner'].'/'.$alias]['language'])) ? $data['github'][$data['projects'][$alias]['owner'].'/'.$alias]['language'] : 'N/A' ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php if (file_exists($data['meta']['dir'].'/assets/images/project/'.$alias.'.png')): ?>
        <div class="constrain constrain--max text--center">
          <?php
          $img = getimagesize($data['meta']['dir'].'/assets/images/project/'.$alias.'.png');
          ?>

          <img class="project-image <?= ((substr( $alias, 0, 6 ) !== "alfred") ? 'project-image--pullup' : '');?> " src="assets/images/project/<?= $alias; ?>.png" alt="Project: <?= $data['projects'][$alias]['name']; ?>" width="<?= $img[0]/2 ?>" height="<?= $img[1]/2 ?>"/>
        </div>
      <?php endif; ?>

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
                <p class="typewriter"><?= $data['projects'][$alias]['name']; ?></p>
              </div>
              <div class="labeled-text">
                <div class="labeled-text__label-wrap">
                  <span class="labeled-text__label">Date</span>
                </div>
                <p class="typewriter"><?= explode("-", $data['projects'][$alias]['date'])[0]; ?><span class="typewriter__prefill">—</span><?= explode("-", $data['projects'][$alias]['date'])[1]; ?><span class="typewriter__prefill">—</span><?= explode("-", $data['projects'][$alias]['date'])[2]; ?></p>
              </div>
            </div><!--
         --><div class="grid__item width-lap--1of2">
              <div class="space--top-double space-lap--top-none">
                <div class="text-group">
                  <h2 class="headline text-group__headline headline--upper heading-6">
                    <span class="text-group__headline-inner">Language Detail:</span>
                  </h2>
                  <div class="grid">
                    <?php if (isset($data['github'][$data['projects'][$alias]['owner'].'/'.$alias]['languages'])): ?>
                      <?php foreach ($data['github'][$data['projects'][$alias]['owner'].'/'.$alias]['languages'] as $language => $percent):
                        ?><div class="grid__item width-tab--1of2 width-lap--1of1 width-desk-wide--1of2">

                          <div class="labeled-text">
                            <div class="labeled-text__label-wrap">
                              <span class="labeled-text__label"><?= $language ?></span>
                            </div>
                            <p class="typewriter"><?= $percent ?>%</p>
                          </div>
                        </div><?php
                      endforeach; ?>
                    <?php else:
                      ?><div class="grid__item">
                        <div class="labeled-text">
                          <div class="labeled-text__label-wrap">
                            <span class="labeled-text__label">N/A</span>
                          </div>
                          <p class="typewriter">??%</p>
                        </div>
                      </div><?php
                    endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <h2 class="headline headline--upper heading-6 space--top-double">
            <span class="text-group__headline-inner">Additional Info:</span>
          </h2>
          <?php if (isset($data['projects'][$alias]['additional']['information'])): ?>
            <div class="labeled-text">
              <div class="labeled-text__label-wrap">
                <span class="labeled-text__label">Detailed Information</span>
              </div>
              <div class="typewriter">
                <?= $markdown->parse($data['projects'][$alias]['additional']['information']); ?>
              </div>
            </div>
          <?php endif; ?>
          <?php if (isset($data['projects'][$alias]['additional']['libraries'])): ?>
            <div class="labeled-text">
              <div class="labeled-text__label-wrap">
                <span class="labeled-text__label">Libraries</span>
              </div>
              <ul class="typewriter">
                <?php foreach ($data['projects'][$alias]['additional']['libraries'] as $library): ?>
                  <?php if (isset($library['link'])): ?>
                    <li><?= $library['name']; ?> (<a href="<?= $library['link']; ?>"><?= preg_replace('/http[s]?:\/\//', '', $library['link']); ?></a>)</li>
                  <?php else: ?>
                    <li><?= $library['name']; ?></li>
                  <?php endif; ?>
                <?php endforeach; ?>
              </ul>
            </div>
          <?php endif; ?>
          <?php if (isset($data['projects'][$alias]['additional']['dependencies'])): ?>
            <div class="labeled-text">
              <div class="labeled-text__label-wrap">
                <span class="labeled-text__label">Dependencies</span>
              </div>
              <ul class="typewriter">
                <?php foreach ($data['projects'][$alias]['additional']['dependencies'] as $dependency): ?>
                  <?php if (isset($dependency['link'])): ?>
                    <li><?= $dependency['name']; ?> (<a href="<?= $dependency['link']; ?>"><?= preg_replace('/http[s]?:\/\//', '', $dependency['link']); ?></a>)</li>
                  <?php else: ?>
                    <li><?= $dependency['name']; ?></li>
                  <?php endif; ?>
                <?php endforeach; ?>
              </ul>
            </div>
          <?php endif; ?>
          <?php if (isset($data['projects'][$alias]['additional']['license'])): ?>
            <div class="labeled-text">
              <div class="labeled-text__label-wrap">
                <span class="labeled-text__label">License</span>
              </div>
              <div class="typewriter">
                <p><a href="<?= $data['projects'][$alias]['github']; ?>/blob/master/LICENSE" target="_blank"><?= $data['projects'][$alias]['additional']['license']; ?></a></p>
              </div>
            </div>
          <?php endif; ?>
