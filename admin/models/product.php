<?php
class Product extends AppModel {
	var $name = 'Product'; // php4
	var $belongsTo = array(
		'Category' => array(
			'className' => 'Category',
			'foreignKey' => 'category_id'
		)
	);	
    var $hasAndBelongsToMany = array(
		'Franchise' => array('className' => 'Franchise',
			'joinTable' => 'franchises_products',
			'foreignKey' => 'franchise_id',
			'associationForeignKey' => 'product_id',
			'unique' => true
		)
	);
	var $validate = array(
		'codtoca' => array(
			'rule' => 'notEmpty',
			'required' => true
		),	
		'name' => array(
			'rule' => 'notEmpty',
			'required' => true
		),
		'description' => array(
			'rule' => 'notEmpty',
			'required' => true
		),		
		'body' => array(
			'rule' => 'notEmpty',
			'required' => true
		),		
		'sell_price' => array(
			'rule' => 'notEmpty',
			'required' => true
		),		
		'category_id' => array(
			'rule' => 'notEmpty',
			'required' => true
		)	
	);
    public function fp_add($var1, $var2, $var3) {
    	$sql = "REPLACE INTO franchises_products (franchise_id, product_id, sell_price) VALUE ('$var1', '$var2', '$var3');";
        return $this->FranchisesProduct->query($sql);
    }
    public function fp_del($var1, $var2) {
    	$sql = "DELETE * FROM franchises_products WHERE franchise_id='$var1' AND product_id='$var2';";
        return $this->FranchisesProduct->query($sql);
    }
}
?>
