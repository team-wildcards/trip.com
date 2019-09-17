                $(document).ready(function() {
            $(".glyphicon").click(function() {
            $(this).toggleClass("glyphicon-eye-close").toggleClass('glyphicon-eye-open');
            var input = $(this).prev().attr("type");
            if (input == "password")
              $(this).prev().attr("type", "text");
            else
               $(this).prev().attr("type", "password");
            });
            });