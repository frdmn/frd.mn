<?php
  require '_setup.php';
  include '_header.php';
?>
<div class="constrain constrain--max">
  <div class="sheet">
    <div class="headline-wrap">
      <h1 class="headline heading-3 headline--upper space--bottom-double space-desk-wide--bottom-triple headline--wavy">Information</h1>
    </div>
    <div class="grid grid--large">

      <div class="grid__item width-lap--1of2">
        <h2 class="headline headline--upper heading-6">About:</h2>
        <div class="labeled-text">
          <div class="labeled-text__label-wrap">
            <span class="labeled-text__label">Name</span>
          </div>
          <p class="typewriter"><?php echo $info['about']['name']; ?></p>
        </div>

        <div class="labeled-text">
          <div class="labeled-text__label-wrap">
            <span class="labeled-text__label">City of Residence</span>
          </div>
          <p class="typewriter"><?php echo $info['about']['city']; ?></p>
        </div>

        <div class="labeled-text">
          <div class="labeled-text__label-wrap">
            <span class="labeled-text__label">Biography</span>
          </div>
          <p class="typewriter"><?php echo $info['about']['bio']; ?></p>
        </div>
      </div><!--
   --><div class="grid__item width-lap--1of2">
        <div class="space--top-double space-lap--top-none">
          <div class="text-group">
            <h2 class="headline text-group__headline headline--upper heading-6">
              <span class="text-group__headline-inner">Contact:</span>
            </h2>
            <div class="grid">
              <div class="grid__item width-tab--1of2 width-lap--1of1 width-desk-wide--1of2">
                <div class="labeled-text">
                  <div class="labeled-text__label-wrap">
                    <span class="labeled-text__label">E-Mail</span>
                  </div>
                  <p class="typewriter"><a href="<?php echo $info['contact']['mail']['link']; ?>"><?php echo $info['contact']['mail']['title']; ?></a>*</p>
                </div>
                <div class="labeled-text">
                  <div class="labeled-text__label-wrap">
                    <span class="labeled-text__label">Blog</span>
                  </div>
                  <p class="typewriter"><a href="<?php echo $info['contact']['blog']['link']; ?>"><?php echo $info['contact']['blog']['title']; ?></a></p>
                </div>

              </div><!--
           --><div class="grid__item width-tab--1of2 width-lap--1of1 width-desk-wide--1of2">
                <div class="labeled-text">
                  <div class="labeled-text__label-wrap">
                    <span class="labeled-text__label">Twitter</span>
                  </div>
                  <p class="typewriter"><a href="<?php echo $info['contact']['twitter']['link']; ?>"><?php echo $info['contact']['twitter']['title']; ?></a></p>
                </div>
                <div class="labeled-text">
                  <div class="labeled-text__label-wrap">
                    <span class="labeled-text__label">Keybase</span>
                  </div>
                  <p class="typewriter"><a href="<?php echo $info['contact']['keybase']['link']; ?>"><?php echo $info['contact']['keybase']['title']; ?></a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="headline-wrap space--top-double">
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
      <?php foreach ($projects as $project): ?>
        <div class="project-table__row">
          <div class="project-table__date">
            <p class="typewriter space--bottom-none"><?php echo explode("-", $project['date'])[0]; ?><span class="typewriter__prefill">—</span><?php echo explode("-", $project['date'])[1]; ?><span class="typewriter__prefill">—</span><?php echo explode("-", $project['date'])[2]; ?></p>
          </div>
          <div class="project-table__title">
            <p class="typewriter space--bottom-none"><a href="<?php echo $project['alias']; ?>.html"><?php echo $project['name']; ?></a></p>
          </div>
          <div class="project-table__category">
            <p class="typewriter space--bottom-none"><?php echo $project['category']; ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
<?php
  include '_footer.php';
?>
