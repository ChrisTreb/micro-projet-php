
$( document ).ready(function() {
    console.log( "Jquery ready!" );
    $(".nom-artiste").on("click", function() {
        $(this).next(".bio").toggle("slow");
    });
});