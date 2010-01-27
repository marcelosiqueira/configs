<?php
//App::import('Plugin', 'MeioUploadAppModel');
//class ImagesProduct extends MeioUploadAppModel {
class Image extends AppModel {
	var $name = 'Image'; // php4
	var $useTable = 'images'; // Este modelo usa a tabela 'images'
	var $hasAndBelongsToMany = array( 
        'Product' => array( 
            'className' => 'Product', 
            'joinTable' => 'images_products', 
            'foreignKey' => 'image_id', 
            'associationForeignKey' => 'product_id', 
            'unique' => true, 
            'conditions' => '', 
            'fields' => '', 
            'order' => '', 
            'limit' => '', 
            'offset' => '', 
            'finderQuery' => '', 
            'deleteQuery' => '', 
            'insertQuery' => '' 
        ),
		'Franchise' => array( 
            'className' => 'Franchise', 
            'joinTable' => 'franchises_images', 
            'foreignKey' => 'image_id', 
            'associationForeignKey' => 'franchise_id', 
            'unique' => true, 
            'conditions' => '', 
            'fields' => '', 
            'order' => '', 
            'limit' => '', 
            'offset' => '', 
            'finderQuery' => '', 
            'deleteQuery' => '', 
            'insertQuery' => '' 
        ) 
	);
	
/*	
	//Upload
	var $actsAs = array(
	    'MeioUpload.MeioUpload' => array(
	        'filename' => array(
	            'dir' => 'uploads{DS}images',
	            'create_directory' => true,
	            'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/gif', 'image/png'),
	            'allowed_ext' => array('.jpg', '.jpeg', '.gif', '.png'),
	            'thumbsizes' => array(
					'normal' => array('width'=>343, 'height'=>343),
 					'small'  => array('width'=>37, 'height'=>37),
					'medium' => array('width'=>74, 'height'=>74),
					'large'  => array('width'=>110, 'height'=>110),
	            )
	        )
	    )
	);
*/
    //Validation
    var $validate = array();
    
    public function img_add($var1, $var2, $var3, $var4) {
    	$sql = "REPLACE INTO ".$var1." (image_id, ".$var2."_id) VALUE ($var3, $var4);";
    	if ($var2 == 'product') { 
        	return $this->ImagesProduct->query($sql);
    	} elseif ($var2 == 'franchise') {
    		return $this->FranchisesImage->query($sql);
    	}
    }
    
    public function img_del($var1, $var2, $var3) {
    	$sql = "DELETE * FROM ".$var1." WHERE ".$var2."_id=$var3;";
        	if ($var2 == 'product') { 
        	return $this->ImagesProduct->query($sql);
    	} elseif ($var2 == 'franchise') {
    		return $this->FranchisesImage->query($sql);
    	}
    }
}
?>
