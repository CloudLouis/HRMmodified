$(document).ready(function() {

    $('#btnSave').click(function() {
        $('#frmCategory').submit();
    });

    $('#category').hide();

    $('#btnAdd').click(function() {
        $('#category').show();
        $('.top').hide();
        $('#category_name_').val('');
        $('#category_categoryId').val('');
        $('#category_code_').val('');
        $('#categoryHeading').html(lang_addCategory);
        $(".messageBalloon_success").remove();
    });

    $('#btnCancel').click(function() {
        $('#category').hide();
        $('.top').show();
        $('#btnDelete').show();
        validator.resetForm();
    });

    $('a[href="javascript:"]').click(function(){
        var row = $(this).closest("tr");
        var statId = row.find('input').val();
        var url = categoryInfoUrl+statId;
        $('#categoryHeading').html(lang_editCategory);
        getCategoryInfo(url);

    });

    $('#btnDelete').attr('disabled', 'disabled');


    $("#ohrmList_chkSelectAll").click(function() {
        if($(":checkbox").length == 1) {
            $('#btnDelete').attr('disabled','disabled');
        }
        else {
            if($("#ohrmList_chkSelectAll").is(':checked')) {
                $('#btnDelete').removeAttr('disabled');
            } else {
                $('#btnDelete').attr('disabled','disabled');
            }
        }
    });

    $(':checkbox[name*="chkSelectRow[]"]').click(function() {
        if($(':checkbox[name*="chkSelectRow[]"]').is(':checked')) {
            $('#btnDelete').removeAttr('disabled');
        } else {
            $('#btnDelete').attr('disabled','disabled');
        }
    });

    $('#btnDelete').click(function(){
        $('#frmList_ohrmListComponent').submit(function(){
            $('#deleteConfirmation').dialog('open');
            return false;
        });
    });

    $('#frmList_ohrmListComponent').attr('name','frmList_ohrmListComponent');
    $('#dialogDeleteBtn').click(function() {
        document.frmList_ohrmListComponent.submit();
    });
    $('#dialogCancelBtn').click(function() {
        $("#deleteConfirmation").dialog("close");
    });

    $.validator.addMethod("uniqueName", function(value, element, params) {
        var temp = true;
        var currentStatus;
        var id = $('#category_categoryId').val();
        var natCount = categoryList.length;
        for (var j=0; j < natCount; j++) {
            if(id == categoryList[j].id){
                currentStatus = j;
            }
        }
        var i;
        var name = $.trim($('#category_name_').val()).toLowerCase();
        for (i=0; i < natCount; i++) {

            arrayName = categoryList[i].name.toLowerCase();
            if (name == arrayName) {
                temp = false
                break;
            }
        }
        if(currentStatus != null){
            if(name == categoryList[currentStatus].name.toLowerCase()){
                temp = true;
            }
        }

        return temp;
    });

    var validator = $("#frmCategory").validate({

        rules: {
            'category[name]' : {
                required:true,
                maxlength: 100,
                uniqueName: true
            }
        },
        messages: {
            'category[name]' : {
                required: lang_NameRequired,
                maxlength: lang_exceed50Charactors,
                uniqueName: lang_uniqueName
            }

        }

    });
});

function getCategoryInfo(url){

    $.getJSON(url, function(data) {
        $('#category_categoryId').val(data.id);
        $('#category_name_').val(data.name);
        $('#category_code_').val(data.code);
        $('#category').show();
        $(".messageBalloon_success").remove();
        $('.top').hide();
    });
}