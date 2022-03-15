

$("#openFrescos").click(function () {
    if ($("#frescos").is(":visible")) {
        $("#frescos").hide()
    }
    else {
        $("#frescos").show();
        $('#congelados').hide();
        $('#empanizados').hide();
        
    }
});

$("#openCongelados").click(function () {
    if ($("#congelados").is(":visible")) {
        $("#congelados").hide()
    }
    else {
        $("#congelados").show();
        $('#frescos').hide();
        $('#empanizados').hide();
        
    }
});


$("#openEmpanizados").click(function () {
    if ($("#empanizados").is(":visible")) {
        $("#empanizados").hide()
    }
    else {
       
        $('#empanizados').show();
        $("#congelados").hide();
        $('#frescos').hide();
        
    }
});