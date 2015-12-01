$("#pilih-area")[0].selectedIndex = 0
$('input[type=radio]').prop("checked", false);
var checkboxes = document.getElementsByTagName('input');
for (var i=0; i<checkboxes.length; i++)  {
  if (checkboxes[i].type == 'checkbox')   {
    checkboxes[i].checked = false;
  }
}

$('#pilih-area').change(function() {
	$('#form-pilih-kategori').show('fast');
});

$('input[type=radio][name=kategori]').change(function() {
	$('#form-pilih-tanggal').show('fast');
});

$('#tanggal1').change(function() {
	$('#form-data').show('fast');
});
$('#tanggal2').change(function() {
	$('#form-data').show('fast');
});

$('#addinput').click(function() {
	 $("<input type='text' />")
     .attr("id", "myfieldid")
     .attr("class", "form-control")
     .attr("placeholder", "http://")
     .appendTo("#link-iklan");
     return true;
});

