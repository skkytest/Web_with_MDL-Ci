<div class="mdl-layout mdl-js-layout">
  <header class="mdl-layout__header mdl-layout__header--scroll">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Vocabulary Library</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" href=""></a>
        <a class="mdl-navigation__link" href=""></a>
        <a class="mdl-navigation__link" href=""></a>
        <a class="mdl-navigation__link" href=""></a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Title</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href=""><i class="material-icons md-48 mdl-list__item-icon">battery_charging_full</i>Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content">
        <!-- Your content goes here -->
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--8-col mdl-cell--2-offset">
              <h5>Here is my vocabulary</h5>
              <br />

              <?php 
                   $num = 1; 
              ?>

              <?php foreach ($subjects as $subjects_item): ?>
              <div class="voc">
                <ul class = "top">
                    <li><a><?php echo "$num.  "; echo $subjects_item['word']; ?></a></li>
                    <ul class = "sub">
                      <li class="main">
                          <a><?php echo $subjects_item['definition']; ?></a>
                      </li>
                    </ul>
                </ul>
              </div>
              <?php $num++; ?>
              <?php endforeach; ?>
              <br />
              <p>
                <?php 
                  echo $links;
                 ?>
              </p>
          </div>
        </div>
        <div>
          
        </div>

    </div>
    <div class = "mdl-grid">
        <div class="mdl-cell mdl-cell--2-col">2</div>
        <div class="mdl-cell mdl-cell--4-col">4</div>
        <div class="mdl-cell mdl-cell--4-col">4</div>
    </div>
    <footer class="mdl-mini-footer">
    <div class="mdl-mini-footer__left-section">
      <div class="mdl-logo">Title</div>
      <ul class="mdl-mini-footer__link-list">
        <li><a href="#">Help</a></li>
        <li><a href="#">Privacy & Terms</a></li>
      </ul>
    </div>
  </footer>
  </main>
  
</div>
