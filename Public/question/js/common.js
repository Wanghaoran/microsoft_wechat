;(function($){
    $.fn.hradio = function(options){
        var self = this;
        return $(':radio+label',this).each(function(){
            $(this).addClass('hRadio');
            if($(this).prev().is(":checked"))
                $(this).addClass('hRadio_Checked');
        }).click(function(event){
            $(this).siblings().removeClass("hRadio_Checked");
            if(!$(this).prev().is(':checked')){
				$(this).addClass("hRadio_Checked");
                $(this).prev()[0].checked = true;
            }
               
            event.stopPropagation();
        })
        .prev().hide();
    }
})(jQuery)

//отй╬╩ри╚ jQuery узуж╡Ц
function showBg() {
	
	$("#hidebg").css({
		display: "block"
	});
	$("#popDiv").show();
}
//╧ь╠у╩ри╚ jQuery узуж
function closeBg() {
	$("#hidebg,#popDiv").hide();
}