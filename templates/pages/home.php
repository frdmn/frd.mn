<?php $this->layout('layouts/default', compact('data', 'alias')) ?>
  <div class="constrain constrain--large space--bottom-double space-desk-wide--bottom-triple">
    <div class="flag flag--spaced flag--responsive">
      <div class="flag__image">
        <img class="rounded-image" src="assets/images/jonas.jpg" alt="Jonas Friedmann" />
      </div>
      <div class="flag__body">
        <div class="fading-seperator">
          <h1 class="headline heading-2 space--bottom-half"><?= $data['info']['about']['name']; ?></h1>
        </div>
        <p class="text--hero space--bottom-none">
          <?= $data['info']['about']['bio']; ?> <span class="emoji">😫</span>
        </p>
      </div>
    </div>
  </div>
  <div class="constrain constrain--max">
    <div class="sheet">


      <div class="headline-wrap">
        <h1 class="headline heading-3 headline--upper headline--wavy space-lap--bottom-none">Projects</h1>
      </div>

      <div class="project-table">
        <div class="project-table__row project-table__row--header">
          <div class="project-table__date">
            <h4 class="headline headline--label space--bottom-none">Date</h4>
          </div>
          <div class="project-table__title">
            <h4 class="headline headline--label space--bottom-none">Title</h4>
          </div>
          <div class="project-table__category">
            <h4 class="headline headline--label space--bottom-none">Category</h4>
          </div>
        </div>
        <?php foreach ($data['projects'] as $project): ?>
          <div class="project-table__row">
            <div class="project-table__date">
              <p class="typewriter space--bottom-none"><?= explode("-", $project['date'])[0]; ?><span class="typewriter__prefill">—</span><?= explode("-", $project['date'])[1]; ?><span class="typewriter__prefill">—</span><?= explode("-", $project['date'])[2]; ?></p>
            </div>
            <div class="project-table__title">
              <p class="typewriter space--bottom-none"><a href="<?= prepareProjectURL($project['alias']); ?>"><?= $project['name']; ?></a></p>
            </div>
            <div class="project-table__category">
              <p class="typewriter space--bottom-none"><?= $project['category']; ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
