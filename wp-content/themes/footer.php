      
        <div class="copyright">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
        </div>

        <?php wp_footer(); ?>

    </body>
</html>

<script>

    $(function() {
        $('.hamburger').click(function() {
            $(this).toggleClass('active');
    
            if ($(this).hasClass('active')) {
                $('.globalMenuSp').addClass('active');
            } else {
                $('.globalMenuSp').removeClass('active');
            }
        });
    });

    ScrollReveal().reveal('.backimg', {
        duration: 1600,
        origin: 'left',
        distance: '50px',
        reset: false
    });

    ScrollReveal().reveal('.head', {
        duration: 1600,
        delay: 100,
        origin: 'left',
        distance: '50px',
        reset: false
    });

    $(function(){
        var topBtn=$('#pageTop');
        topBtn.hide();        

        // ▲をクリックしたら、スクロールして上に戻る
        topBtn.click(function(){
        $('body,html').animate({
        scrollTop: 0},500);
        return false;

        });


        });
</script>
