$(function() {
    $.ajax({
        url: "/public/elementosJson",
        context: document.body,
        success: function (data) {
        	$pedido = data;
        	alert($pedido);
        }
    });
});

