
$( document ).ready(function() {
    console.log( "Jquery ready!" );
    // Toggle de la bio des artistes
    $(".nom-artiste").on("click", function() {
        $(this).next(".bio").slideToggle("slow");
    });

    // Menu
    $("#bouton-menu").on("click", function() {
        $(".menu-liste-container").toggle("slide");
        $(".menu-liste-container").css("display", "block");
    });
});