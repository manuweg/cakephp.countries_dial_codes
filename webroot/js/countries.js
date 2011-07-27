$(document).ready(function() {
    createDropDown();
    $(".dropdown dt a").click(function() {
        $(".dropdown dd ul").toggle();
        $(".Cellphone div.overlay").toggle();
    });
    $(document).bind('click', function(e) {
        var $clicked = $(e.target);
        if (! $clicked.parents().hasClass("dropdown"))
        {
            $(".dropdown dd ul").hide();
            $(".Cellphone div.overlay").hide();
        }
    });
                
    $(".dropdown dd ul li a").click(function() {
        var text = $(this).html();
        $(".dropdown dt a").html(text);
        text = '<img src="' + webroot + 'countries/img/flags/gif/blanktrans.gif" class="flag flag-' + $(".dropdown dt a span.value").text().toLowerCase() + '" />' + text.substring(text.indexOf('+'));
        $(".dropdown dt a").html(text);
        
        //$(".dropdown dt a span.value").remove();
        $(".dropdown dd ul").hide();
        $(".Cellphone div.overlay").hide();
        
        var source = $(".CountriesDropDown");
        source.val($(this).find("span.value").html())
        $(".Cellphone :input:text:first").focus();
    });
    
    $(".Cellphone :input:text:first").keypress(function (e) 
    {
          if ((e.which >= 48 && e.which <= 57) || (e.which == 8) || (e.which == 46) || (e.which == 16) || (e.which == 9)) 
          {
            //return true;
          } 
          else
          {
            e.returnValue = false;
            return false;
          }
    });
});

function createDropDown(){
	    var source = $(".countries_dropdown");
	    var selected = source.find("option[selected]");
	    var options = $("option", source);
	    source.after('<dl id="target" class="dropdown"></dl>');
	    var selectedCountry = selected.text();
	    $("#target").append('<dt><a href="javascript:void(0);"><img src="' + webroot + 'countries/img/flags/gif/blanktrans.gif" class="flag flag-' + selected.val().toLowerCase() + '" />' + selectedCountry.substring(selectedCountry.indexOf('+')) + '</a></dt>')
	    $("#target").append('<dd><ul></ul></dd>')
	    // iterate through all the <option> elements and create UL
	    options.each(function() {
	    $("#target dd ul").append('<li><a href="javascript:void(0);"><img src="' + webroot + 'countries/img/flags/gif/blanktrans.gif" class="flag flag-' + $(this).val().toLowerCase() + '" />' + $(this).text() + '<span class="value">' +
	            $(this).val() + '</span></a></li>');
	    });
	    source.hide();
	    /*<div class="overlay">&nbsp;</div>*/
}