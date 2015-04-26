<?php $this->layout('layouts/default', compact('data', 'alias')) ?>
<div class="constrain constrain--max">
  <div class="sheet">
    <div class="headline-wrap">
      <h1 class="headline heading-3 headline--upper space--bottom-double space-desk-wide--bottom-triple headline--wavy">Error <?= $error['code'] ?></h1>
    </div>

    <div class="headline-wrap space--top-double">
      <h1 class="headline heading-3 headline--upper headline--wavy space-lap--bottom-none"><?= $error['message'] ?></h1>
      <p>Go <a href="/">back</a> and try again.</p>
    </div>
