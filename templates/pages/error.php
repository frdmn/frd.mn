<?php $this->layout('layouts/default', compact('data', 'alias', 'error')) ?>
<div class="constrain constrain--max">
  <div class="sheet">
    <div class="headline-wrap">
      <h1 class="headline heading-1 headline--upper space--bottom-double space-desk-wide--bottom-triple headline--wavy">&nbsp;</h1>
    </div>
    <div class="text--center">
      <h1 class="headline heading-1 headline--upper space-lap--bottom-none">Error <?= $error['code'] ?></h1>

      <h1 class="headline heading-2 headline--upper space-lap--bottom-none"><?= $error['message'] ?></h1>
      <p class="typewriter">Return to <a href="/">front page back.</a></p>
    </div>
