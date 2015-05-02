<?php $this->layout('layouts/default', compact('data', 'alias')) ?>
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
            <p class="typewriter"><?= $data['info']['about']['name']; ?></p>
          </div>

          <div class="labeled-text">
            <div class="labeled-text__label-wrap">
              <span class="labeled-text__label">City of Residence</span>
            </div>
            <p class="typewriter"><?= $data['info']['about']['city']; ?></p>
          </div>

          <div class="labeled-text">
            <div class="labeled-text__label-wrap">
              <span class="labeled-text__label">Biography</span>
            </div>
            <p class="typewriter"><?= $data['info']['about']['bio']; ?></p>
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
                    <p class="typewriter"><a href="<?= $data['info']['contact']['mail']['link']; ?>"><?= $data['info']['contact']['mail']['title']; ?></a><a class="open-gpg" href="#"><i class="icon icon--lock"></i></a></p>
                    <div id="gpg-content" class="modal-content">
                      <h6 class="headline headline--upper heading-4">frdmn's public key</h6>
                      <pre class="gpg-block"><textarea>
-----BEGIN PGP PUBLIC KEY BLOCK-----
Comment: GPGTools - https://gpgtools.org

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
Ppgyg2/gU4xp3dshaf3sKGg8jeg=
=ahEP
-----END PGP PUBLIC KEY BLOCK-----
                      </textarea></pre>
                    </div>
                  </div>
                  <div class="labeled-text">
                    <div class="labeled-text__label-wrap">
                      <span class="labeled-text__label">Blog</span>
                    </div>
                    <p class="typewriter"><a href="<?= $data['info']['contact']['blog']['link']; ?>"><?= $data['info']['contact']['blog']['title']; ?></a></p>
                  </div>

                </div><!--
             --><div class="grid__item width-tab--1of2 width-lap--1of1 width-desk-wide--1of2">
                  <div class="labeled-text">
                    <div class="labeled-text__label-wrap">
                      <span class="labeled-text__label">Twitter</span>
                    </div>
                    <p class="typewriter"><a href="<?= $data['info']['contact']['twitter']['link']; ?>"><?= $data['info']['contact']['twitter']['title']; ?></a></p>
                  </div>
                  <div class="labeled-text">
                    <div class="labeled-text__label-wrap">
                      <span class="labeled-text__label">Keybase</span>
                    </div>
                    <p class="typewriter"><a href="<?= $data['info']['contact']['keybase']['link']; ?>"><?= $data['info']['contact']['keybase']['title']; ?></a></p>
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
