<?php
  require '_setup.php';
  include '_header.php';
  if(isset($_GET['alias'])) {
    $alias = $_GET['alias'];
  }
?>

<div class="constrain constrain--max constrain--hero space--top-double space-desk--top-triple space--bottom-double">
  <div class="grid">
    <div class="grid__item width-lap--2of3 width-desk--1of2">
      <h1 class="heading-1 headline headline--upper space--bottom-quarter">
        <?php echo $projects[$alias]['name']; ?>
      </h1>
      <div class="constrain constrain--small constrain--text">
        <p class="text--hero space--bottom-double space-lap--bottom-none">
          <?php echo $projects[$alias]['short_description']; ?>
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
                <p class="space--bottom-none"><a href="<?php echo $projects[$alias]['github']; ?>" target="_blank"><?php echo preg_replace('/https:\/\/github.com\//', '', $projects[$alias]['github']); ?></a></p>
              </div>
            </div>
          </div><!--
       --><div class="grid__item width--1of4">
            <div class="labeled-text-hero">
              <span class="labeled-text-hero__label">Stars</span>
              <p class="space--bottom-none">14</p>
            </div>
          </div><!--
       --><div class="grid__item width--1of4">
            <div class="labeled-text-hero">
              <span class="labeled-text-hero__label">Forks</span>
              <p class="space--bottom-none">2</p>
            </div>
          </div><!--
       --><div class="grid__item width--1of4">
            <div class="labeled-text-hero">
              <span class="labeled-text-hero__label">Language</span>
              <p class="space--bottom-none">Shell</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="constrain constrain--max text--center">
  <img class="project-image" src="assets/images/project-dummy.png" alt="project dummy" />
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
          <p class="typewriter"><?php echo $projects[$alias]['name']; ?></p>
        </div>
        <div class="labeled-text">
          <div class="labeled-text__label-wrap">
            <span class="labeled-text__label">Date</span>
          </div>
          <p class="typewriter"><?php echo explode("-", $projects[$alias]['date'])[0]; ?><span class="typewriter__prefill">—</span><?php echo explode("-", $projects[$alias]['date'])[1]; ?><span class="typewriter__prefill">—</span><?php echo explode("-", $projects[$alias]['date'])[2]; ?></p>
        </div>
        <div class="labeled-text">
          <div class="labeled-text__label-wrap">
            <span class="labeled-text__label">Description</span>
          </div>
          <p class="typewriter"><?php echo $projects[$alias]['description']; ?></p>
        </div>
      </div><!--
   --><div class="grid__item width-lap--1of2">
        <div class="space--top-double space-lap--top-none">
          <div class="text-group">
            <h2 class="headline text-group__headline headline--upper heading-6">
              <span class="text-group__headline-inner">Language Detail:</span>
            </h2>
            <div class="grid">
              <div class="grid__item width-tab--1of2 width-lap--1of1 width-desk-wide--1of2">
                <div class="labeled-text">
                  <div class="labeled-text__label-wrap">
                    <span class="labeled-text__label">Shell</span>
                  </div>
                  <p class="typewriter">87.5%</p>
                </div>
                <div class="labeled-text">
                  <div class="labeled-text__label-wrap">
                    <span class="labeled-text__label">VimL</span>
                  </div>
                  <p class="typewriter">7.7%</p>
                </div>

              </div><!--
           --><div class="grid__item width-tab--1of2 width-lap--1of1 width-desk-wide--1of2">
                <div class="labeled-text">
                  <div class="labeled-text__label-wrap">
                    <span class="labeled-text__label">Javascript</span>
                  </div>
                  <p class="typewriter">3.6%</p>
                </div>
                <div class="labeled-text">
                  <div class="labeled-text__label-wrap">
                    <span class="labeled-text__label">Coffeescript</span>
                  </div>
                  <p class="typewriter">1.2%</p>
                </div>
              </div>
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
        <p class="typewriter">
          <?php echo $projects[$alias]['additional']['information']; ?>
        </p>
      </div>
    <?php endif; ?>
    <?php if (isset($projects[$alias]['additional']['libraries'])): ?>
      <div class="labeled-text">
        <div class="labeled-text__label-wrap">
          <span class="labeled-text__label">Libraries</span>
        </div>
        <ul class="typewriter">
          <?php foreach ($projects[$alias]['additional']['libraries'] as $library): ?>
            <li><?php echo $library['name']; ?> (<a href="<?php echo $library['link']; ?>"><?php echo preg_replace('/https:\/\//', '', $library['link']); ?></a>)</li>
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
            <li><?php echo $dependency['name']; ?> (<a href="<?php echo $dependency['link']; ?>"><?php echo preg_replace('/http[s]?:\/\//', '', $dependency['link']); ?></a>)</li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>
<?php
  include '_footer.php';
?>
