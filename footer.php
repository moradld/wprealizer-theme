    <?php
    $footer_num = 1;
    if($footer_num === 1) get_template_part('template-parts/footer/default-footer');
    else get_template_part('template-parts/footer/footer');
   
?>
    <!-- Back to top btn area start here -->
    <button class="btn-backToTop">
        <i class="fa-solid fa-chevron-up"></i>
    </button>

    <?php wp_footer() ?>
    </body>