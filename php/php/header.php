<header>
    <div class="header-container">
      <p class="header-title"><span class="colored">Арслан</span></p>
      <nav class="header-menu">
        <a href="<?php echo 'index.php#warlord'?>"><?php echo 'Laptop'?></a></li>
        <a href="<?php echo 'index.php#starz'?>"><?php echo 'Keyboard'?></a></li>
      </nav>
      <a href="<?php $link = 'index.php'; echo $link?>" 
            class = "<?php if ($current_page === $link){
                    echo 'colored';
            } else echo 'not-colored' ?>">
            About
      </a>
      <a href="<?php $link = 'auth.php'; echo $link?>" 
            class = "<?php if ($current_page === $link){
                    echo 'colored';
            } else echo 'not-colored' ?>">
            Login
      </a> 
      <a href="<?php $link = 'form.php'; echo $link?>" 
          class = "<?php if ($current_page === $link) {
                  echo 'colored';
          } else echo 'not-colored'?>">
          Feedback
      </a>
    </div>
</header>