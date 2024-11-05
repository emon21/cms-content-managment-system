//select icon type field value
$(document).on('change', 'select[name="icon_type"]', function(e) {
    e.preventDefault();
    var iconType = $(this).val();
    iconTypeFieldVal(iconType);
});
defaultIconType();

//set default icon type
function defaultIconType() {
    var iconType = $('select[name="icon_type"]').val();
    iconTypeFieldVal(iconType);
}

//show icon picker on edit time 
function iconTypeFieldVal(iconType) {
    if (iconType == 'icon') {
        $('input[name="img_icon"]').parent().parent().hide();
        $('input[name="icon"]').parent().show();
    } else if (iconType == 'img_icon') {
        $('input[name="icon"]').parent().hide();
        $('input[name="img_icon"]').parent().parent().show();
    }
}

//iconpicker show 
$('.icp-dd').iconpicker();
$('.icp-dd').on('iconpickerSelected', function(e) {
    var selectedIcon = e.iconpickerValue;
    $(document).find('#service-icon').val(selectedIcon);
});

