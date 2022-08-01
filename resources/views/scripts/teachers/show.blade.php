<script>
    $(document).ready(function($) {
        $("#phonenumber").on("click", function(e) {
            e.preventDefault();
            $(this).find('span').hide();
            $(this).find('img').removeClass('d-none');
        });
    });
</script>