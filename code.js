$(window).resize(resizehappend)


function resizehappend(){
    var x= $(window).width();
    var y= $(window).height();
    $('#status').html("trinh duyet rong"+x+"px va cao"+y+"px")
}

