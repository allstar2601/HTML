Node{
let Skischule, Namen, GeneratedLink, origin   = window.location.origin;


$(document).ready(function () {

    $("#SkischuleGenerate, #NamenGenerate").on("input", function () {
        kontrollFields();
    });


    $("#generate-btn").on("click", function () {

        GeneratedLink = origin + "/fragebogen/form.php?Skischule="+Skischule+"&Namen="+Namen;

        $("#generated-link-box").text(GeneratedLink).addClass("aktiv");

    });

    $("#generated-link-box.aktiv").on("click", function () {
        var inp =document.createElement('input');
        document.body.appendChild(inp)
        inp.value = GeneratedLink
        inp.select();
        document.execCommand('copy',false);
        inp.remove();
    });

    
    function kontrollFields() {
        Skischule = $.trim($("#SkischuleGenerate").val());
        Namen = $.trim($("#NamenGenerate").val());

        if(Skischule != "" && Namen != ""){
            $("#generate-btn").removeAttr("disabled");
        }else{
            $("#generate-btn").attr('disabled', 'disabled');
            $("#generated-link-box").text("").removeClass("aktiv");
        }
    }
});
	}