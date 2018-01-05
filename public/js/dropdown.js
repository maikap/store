jQuery(function($){

    // /////
    // drop-select
    var madSelectHover = 0;
    $(".drop-select").each(function() {
       dropdownselect($(this));
    });

    $(document).on("mouseup", function(){
        if(!madSelectHover) $(".drop-select-drop").removeClass("show");
    });
});
function dropdownselect(elem){
    var madSelectHover = 0;
    var $input = elem.find(".drop-input"),
        $ul = elem.find("> ul"),
        $ulDrop =  $ul.clone().addClass("drop-select-drop");

    elem
        .append('<i class="icon ion-android-arrow-dropdown"></i>', $ulDrop)
        .on({
            hover : function() { madSelectHover ^= 1; },
            click : function() { $ulDrop.toggleClass("show"); }
        });

    // PRESELECT
    $ul.add($ulDrop).find("li[data-value='"+ $input.val() +"']").addClass("selected");
    $ul.change(function(){
        if($input.val() === ''){
            if($ulDrop.find('.selected').length > 0){
                $ulDrop.find('.selected').trigger('click');
            }
            else{
                $ulDrop.find('li:first').trigger('click');
            }
        }
        else{
            $ul.add($ulDrop).find("li[data-value='"+ $input.val() +"']").addClass("selected");
        }
    });

    // MAKE SELECTED
    $ulDrop.on("click", "li", function(evt) {
        evt.stopPropagation();
        $input.val($(this).data("value")).trigger('change'); // Update hidden input value
        $ul.find("li").eq($(this).index()).add(this).addClass("selected")
            .siblings("li").removeClass("selected");
    });
    // UPDATE LIST SCROLL POSITION
    $ul.on("click", function() {
        var liTop = $ulDrop.find("li.selected").position().top;
        $ulDrop.scrollTop(liTop + $ulDrop[0].scrollTop);
    });
}