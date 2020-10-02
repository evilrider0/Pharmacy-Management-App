(function(){
	"use strict";
	var updir = '/phrma/upload/';
	var dropZone = document.getElementById('drop-zone');
	var barFill = document.getElementById('bar-fill');
	var barText = document.getElementById('bar-fill-text');
	var uploadsFinished = document.getElementById('upload-finished');



	var startUpload = function (files){
		app.uploader({
			file: files,
			progressBar: barFill,
			progressText: barText,
			processor: document.location.origin+'/phrma/admin/upload',//"<?php echo site_url('admin/upload'); ?>",//

			finished: function(data){
				var x;
				var uploadedElement;
				var uploadedAnchor;
				var uploadedStatus;
				var CurrFile;

				var span = document.getElementById('upload-info');
				var view = span.dataset.view;
				var field = 'img_'+span.dataset.info;

				for (x = 0; x < data.length; x++) {
					CurrFile =data[x];

					uploadedElement = document.createElement('div');
					uploadedElement.className = 'upload-console-upload';

					uploadedAnchor = document.createElement('a');
					uploadedAnchor.textContent = CurrFile.name;

					if (CurrFile.uploaded) {
						uploadedAnchor.href = document.location.origin+updir+ CurrFile.file;
						console.log(view);
						document.getElementById(view).setAttribute('src', document.location.origin+updir+ CurrFile.file);
						document.getElementById(field).setAttribute('value', CurrFile.file);
					};

					uploadedStatus = document.createElement('span');
					uploadedStatus.textContent = CurrFile.uploaded ?'uploaded' : 'Failed';

					uploadedElement.appendChild(uploadedAnchor);
					uploadedElement.appendChild(uploadedStatus);

					uploadsFinished.appendChild(uploadedElement);
				};

				uploadsFinished.className = '';

			},

			error: function(){
				console.log("There was an error");
			}
		});
	};

	//standard form uload
	document.getElementById('upload_button').addEventListener('click', function(e){
		e.preventDefault();
		var uploadFiles = document.getElementById('upload_file').files;

		// console.log(view+' || '+field);
		startUpload(uploadFiles);
	});


	//drop function
	dropZone.ondrop = function (e){
		e.preventDefault();
		this.className = "upload-console-drop";

		startUpload(e.dataTransfer.files);
	};



	dropZone.ondragover = function(){
		this.className = "upload-console-drop drop";
		return false;
	};

	dropZone.ondragleave = function(){
		this.className = "upload-console-drop";
		return false;
	};
}());
