<?php get_header(); ?>

<section id="food-top">
  <img src="<?php echo get_template_directory_uri(); ?>/images/bg-round_mini.svg" class="sp" />
  <img src="<?php echo get_template_directory_uri(); ?>/images/bg-round.svg" class="pc" />
</section>

<section id="food-main">
  <h2>MENU</h2>
<div class="tab-menu">
  <ul class="tab-list">
    <li class="tab-item active" data-tab-target="#food">FOOD</li>
    <li class="tab-item" data-tab-target="#drink">DRINK</li>
  </ul>
  <div class="tab-content">
    <div id="food" class="content active">
      <img src="<?php echo get_template_directory_uri(); ?>/images/food-menu.jpg" />
    </div>
    <div id="drink" class="content">
      <img src="<?php echo get_template_directory_uri(); ?>/images/drink-menu.jpg" />
    </div>
  </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('.tab-item');
    const contents = document.querySelectorAll('.content');

    tabs.forEach(tab => {
      tab.addEventListener('click', () => {
        const target = document.querySelector(tab.dataset.tabTarget);
        contents.forEach(c => {
          c.classList.remove('active');
        });
        tabs.forEach(t => {
          t.classList.remove('active');
        });
        tab.classList.add('active');
        target.classList.add('active');
      });
    });
  });
</script>

</section>



<?php get_footer(); ?>
