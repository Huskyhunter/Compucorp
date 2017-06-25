<div class="row no-padding">
  <nav class="sm-12 container">
    <div>
      <span class="fl-l" id="menu-icn">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 24 24">
          <g>
            <path d="M24,3c0-0.6-0.4-1-1-1H1C0.4,2,0,2.4,0,3v2c0,0.6,0.4,1,1,1h22c0.6,0,1-0.4,1-1V3z"/>
            <path d="M24,11c0-0.6-0.4-1-1-1H1c-0.6,0-1,0.4-1,1v2c0,0.6,0.4,1,1,1h22c0.6,0,1-0.4,1-1V11z"/>
            <path d="M24,19c0-0.6-0.4-1-1-1H1c-0.6,0-1,0.4-1,1v2c0,0.6,0.4,1,1,1h22c0.6,0,1-0.4,1-1V19z"/>
          </g>
        </svg>
      </span>
      <?php if($logo): ?>
      <div class="logo">
        <a href="<?php print $front_page; ?>">
          <div class="logo">
            <img src="<?php print theme_get_setting('logo') ?>" width="80%" alt="Open Charity"/>
          </div>
        </a>
      </div>
      <?php endif; ?>
      <div class="fl-r">
      <?php if ($main_menu): ?>
        <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'class' => array('links animated'),
          )
        )); ?>
      <?php endif; ?>
        <button class="btn" id="join-now">Join Us</button>
      </div>
    </div>
  </nav>
</div>