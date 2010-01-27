$(function(){
	// sorts all the combo select boxes - Franchises
	function sortBoxes_franchise(){			
		$('select#ProductFranchise1, select#ProductFranchise2').find('option').selso({
			type: 'alpha', 
			extract: function(o){ return $(o).text(); } 
		});
		
		// clear all highlighted items
		$('select#ProductFranchise1, select#ProductFranchise2').find('option:selected').removeAttr('selected');
	}	
	
	// add/remove buttons for combo select boxes
	$('#add_franchise').click(function(){
		var left  = $(this).parent().parent().find('select#ProductFranchise1 option:selected');
		var right = $(this).parent().parent().find('select#ProductFranchise2');
		right.append(left);
		sortBoxes_franchise();	
	});

	$('#remove_franchise').click(function(){
		var left  = $(this).parent().parent().find('select#ProductFranchise1');
		var right = $(this).parent().parent().find('select#ProductFranchise2 option:selected');
		left.append(right);
		sortBoxes_franchise();
	});
	
	// sorts all the combo select boxes - Product
	function sortBoxes_product(){			
		$('select#FranchiseProduct1, select#FranchiseProduct2').find('option').selso({
			type: 'alpha', 
			extract: function(o){ return $(o).text(); } 
		});
		
		// clear all highlighted items
		$('select#FranchiseProduct1, select#FranchiseProduct2').find('option:selected').removeAttr('selected');
	}	
	
	// add/remove buttons for combo select boxes
	$('#add_product').click(function(){
		var left  = $(this).parent().parent().find('select#FranchiseProduct1 option:selected');
		var right = $(this).parent().parent().find('select#FranchiseProduct2');
		right.append(left);
		sortBoxes_product();	
	});

	$('#remove_product').click(function(){
		var left  = $(this).parent().parent().find('select#FranchiseProduct1');
		var right = $(this).parent().parent().find('select#FranchiseProduct2 option:selected');
		left.append(right);
		sortBoxes_product();
	});	
	
});