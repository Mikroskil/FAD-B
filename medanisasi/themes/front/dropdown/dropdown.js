<!--initiate accordion-->
<script type="text/javascript">
    $(function() {
   
        var menu_ul = $('#sub_menu_cari > .submenucari > ul'),
               menu_a  = $('.menu > .pilihan > a');
       
        menu_ul.hide();
   
        menu_a.click(function(e) {
            e.preventDefault();
            if(!$(this).hasClass('active')) {
                menu_a.removeClass('active');
                menu_ul.filter(':visible').slideUp('normal');
                $(this).addClass('active').next().stop(true,true).slideDown('normal');
            } else {
                $(this).removeClass('active');
                $(this).next().stop(true,true).slideUp('normal');
            }
        });
   
    });
</script>