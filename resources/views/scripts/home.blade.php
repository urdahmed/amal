<script>
    $(document).ready(function($) {
        var onScroll = function() {
            var scrolly = $(window).scrollTop();
            if (scrolly > 300) {
                $("#toppage").fadeIn("slow");
                $("header .navbar-expand").hide("slow");
            } else {
                $("#toppage").fadeOut("slow");
                $("header .navbar-expand").show("slow");
            }
        };
        onScroll();
        $(window).scroll(function() {
            onScroll();
        });
        var Typedjs;
        var typejs = function() {
            var options = {
                strings: [$('.carousel-item.active').data('txt')],
                typeSpeed: 10,
                backSpeed: 0,
                backDelay: 2000,
                showCursor: true,
                cursorChar: '_',
                loop: false,
            };
            Typedjs = new Typed("#typedjs", options);
            $(".typed-cursor").addClass("text-white display-1");
        };
        typejs();
        document.getElementById('slider').addEventListener('slid.bs.carousel', function() {
            Typedjs.destroy();
            typejs();
        });
    });
</script>