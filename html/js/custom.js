$("#pilih-area")[0].selectedIndex = 0
$('input[type=radio]').prop("checked", false);
var checkboxes = document.getElementsByTagName('input');
for (var i=0; i<checkboxes.length; i++)  {
  if (checkboxes[i].type == 'checkbox')   {
    checkboxes[i].checked = false;
  }
}

$('#pilih-area').change(function() {
	$('#form-pilih-tanggal').show('fast');
});

$('#tanggal1').change(function() {
	$('#form-pilih-kategori').show('fast');
});
$('#tanggal2').change(function() {
	$('#form-pilih-kategori').show('fast');
});

$('input[type=radio][name=kategori]').change(function() {
	$('#form-data').show('fast');
});

// $('#addinput').click(function() {
// 	 $("<div><input type='text' class='form-control' placeholder='http://' /><span class='glyphicon glyphicon-remove form-control-feedback removeinput' aria-hidden='true'></span></div>")
//      .appendTo("#link-iklan");
//      return true;
// });

// $('.form-control-feedback').click(function() {
// 	alert('remove');
//     //$(this).parent().remove();
// });

var wrapper = $(".input-iklan");
var add_button = $("#addinput");

$(add_button).click(function (e) {
    e.preventDefault();
    $(wrapper).append("<div class='has-feedback'><input type='text' class='form-control' placeholder='http://' /><span class='glyphicon glyphicon-remove form-control-feedback removeinput' aria-hidden='true'></span></div>"); //add input box
});

$(document).on("click",".form-control-feedback",function(){
    $(this).parent().remove();
});