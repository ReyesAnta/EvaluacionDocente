$.validate({
	modules: 'location, date, security, file',
	lang: 'es'
});

$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});

/* Loading Ajax */
var screen = $('#loading-screen');

function loading(name){
	if(name == "show"){
		screen.fadeIn();
	}else if(name == "hide"){
		screen.fadeOut();
	}
}

$(".select2").select2();

setDecimal();

function setDecimal(){
	$('.decimal').keypress(function (event) {
		return isNumber(event, this)
	});
}

function isNumber(evt, element) {

	var charCode = (evt.which) ? evt.which : event.keyCode

	if (
		(charCode != 46 || $(element).val().indexOf('.') != -1) &&
		(charCode < 48 || charCode > 57))
		return false;

	return true;
} 

var input = document.querySelector('.tags');
new Tagify(input)

function set_tooltip(){
	var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
	var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
		return new bootstrap.Tooltip(tooltipTriggerEl)
	});
}

/*Dropzone*/
$(".dropzone").change(function() {
	readFile(this);
});

function readFile(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function(e) {
			var htmlPreview =
			'<img src="' + e.target.result + '" class="img-dropzone" />';
			var wrapperZone = $(input).parent();
			var previewZone = $(input).parent().parent().find('.preview-zone-'+input.dataset.imagen);
			var boxZone = $(input).parent().parent().find('.preview-zone-'+input.dataset.imagen).find('.box').find('.box-body');
			$(".dropzone-wrapper-"+input.dataset.imagen).css({"display":"none"});
			wrapperZone.removeClass('dragover');
			previewZone.removeClass('d-none');
			boxZone.empty();
			boxZone.append(htmlPreview);
		};

		reader.readAsDataURL(input.files[0]);
	}
}

function reset(e) {
	e.wrap('<form>').closest('form').get(0).reset();
	e.unwrap();
}


$('.dropzone-wrapper').on('dragover', function(e) {
	e.preventDefault();
	e.stopPropagation();
	$(this).addClass('dragover');
});

$('.dropzone-wrapper').on('dragleave', function(e) {
	e.preventDefault();
	e.stopPropagation();
	$(this).removeClass('dragover');
});

$('.remove-preview').on('click', function() {
	var boxZone = $(this).parents('.preview-zone-'+this.dataset.imagen).find('.box-body');
	var previewZone = $(this).parents('.preview-zone-'+this.dataset.imagen);
	var dropzone = $(this).parents('.mb-3').find('.dropzone-'+this.dataset.imagen);
	boxZone.empty();
	previewZone.addClass('d-none');
	reset(dropzone);
	$(".dropzone-wrapper-"+this.dataset.imagen).css({"display":"block"});
});
/*Fin Dropzone*/