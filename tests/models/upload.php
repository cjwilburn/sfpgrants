<?php
class Upload extends AppModel {
	var $name = 'Upload';
	//var $displayField = 'name';
        var $actsAs = array('FileUpload.FileUpload', 'WhoDidIt');

        function changeFileName($fileName) {
            
         return $fileName;
        }

        //var $actsAs = array(
        //'FileUpload.FileUpload' => array(
          //'uploadDir' => 'files',
          //'forceWebroot' => true, //if false, files will be upload to the exact path of uploadDir
          //'fields' => array('name' => 'name', 'type' => 'type', 'size' => 'size'),
          //'allowedTypes' => array('doc' => array('application/msword'),'docx' => array('application/vnd.openxmlformats-officedocument.wordprocessingml.document'),'pdf' => array('application/pdf'),'rtf' => array('text/richtext')),
          //'required' => false, //default is false, if true a validation error would occur if a file wsan't uploaded.
          //'maxFileSize' => false, //bytes OR false to turn off maxFileSize (default false)
          //'unique' => false, //filenames will overwrite existing files of the same name. (default true)
          //'fileNameFunction' => 'md5' //execute the Sha1 function on a filename before saving it (default false)
        //)
      //);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Proposal' => array(
			'className' => 'Proposal',
			'foreignKey' => 'proposal_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>