(function () {
    $(window).scroll(function () {
        var top = $(document).scrollTop();
        $('.splash').css({
            'background-position': '0px -'+(top/3).toFixed(2)+'px'
        });
        if(top > 50)
            $('#home > .navbar').removeClass('navbar-transparent');
        else
            $('#home > .navbar').addClass('navbar-transparent');
    });

    $("a[href='#']").click(function(e) {
        e.preventDefault();
    });

    var $button = $("<div id='source-button' class='btn btn-primary btn-xs'>&lt; &gt;</div>").click(function(){
        var html = $(this).parent().html();
        html = cleanSource(html);
        $("#source-modal pre").text(html);
        $("#source-modal").modal();
    });

    $('.bs-component [data-toggle="popover"]').popover();
    $('.bs-component [data-toggle="tooltip"]').tooltip();

    $(".bs-component").hover(function(){
        $(this).append($button);
        $button.show();
    }, function(){
        $button.hide();
    });

    function cleanSource(html) {
        html = html.replace(/×/g, "&times;")
            .replace(/«/g, "&laquo;")
            .replace(/»/g, "&raquo;")
            .replace(/←/g, "&larr;")
            .replace(/→/g, "&rarr;");

        var lines = html.split(/\n/);

        lines.shift();
        lines.splice(-1, 1);

        var indentSize = lines[0].length - lines[0].trim().length,
            re = new RegExp(" {" + indentSize + "}");

        lines = lines.map(function(line){
            if (line.match(re)) {
                line = line.substring(indentSize);
            }

            return line;
        });

        lines = lines.join("\n");

        return lines;
    }

})();

$("button[cns]").click(function (){
    loadingDiv();
    window.location.href = "cadastro.php?cns="+this.getAttribute("cns");
});

$("div[cns]").click(function (){
    loadingDiv();
    window.location.href = "cadastro.php?cns="+this.getAttribute("cns");
});

$("button[page]").click(function (){
    loadingDiv();
    setTimeout(window.location.href = this.getAttribute("page")+".php",500);
});

$("button[npf]").click(function (){
    loadingDiv();
    window.location.href = "familia.php?npf="+this.getAttribute("npf");
});

function loadingDiv(){
    var iDiv = document.createElement('div');
    iDiv.id = 'loadingDivOverlay';
    iDiv.className = 'overlay panel panel-default';

    var iDiv2 = document.createElement('div');
    iDiv.id = 'loadingDivContent';
    iDiv2.className = "centeredDiv";
    iDiv2.innerHTML = "<i class='fa fa-spinner fa-pulse fa-3x fa-fw'></i><span class='sr-only'>Loading...</span>";

    iDiv.appendChild(iDiv2);
    // Append to the document last so that the first append is more efficient.
    document.body.appendChild(iDiv);
}



