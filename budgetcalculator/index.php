<?php

$possible_subjects = array('January', 'Febuary', 'March','April','May','June','July','August','September','October','November','December');

require_once 'includes/form-processor.php';

$month = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
$income = filter_input(INPUT_POST, 'income', FILTER_SANITIZE_NUMBER_INT);
$expenses = filter_input(INPUT_POST, 'expenses', FILTER_SANITIZE_NUMBER_INT);
$housing = filter_input(INPUT_POST, 'housing', FILTER_SANITIZE_NUMBER_INT);
$communication = filter_input(INPUT_POST, 'communication', FILTER_SANITIZE_NUMBER_INT);
$household = filter_input(INPUT_POST, 'household', FILTER_SANITIZE_NUMBER_INT);
$transportation = filter_input(INPUT_POST, 'transportation', FILTER_SANITIZE_NUMBER_INT);
$financial = filter_input(INPUT_POST, 'financial', FILTER_SANITIZE_NUMBER_INT);
$entertainment = filter_input(INPUT_POST, 'entertainment', FILTER_SANITIZE_NUMBER_INT);
$medical = filter_input(INPUT_POST, 'medical', FILTER_SANITIZE_NUMBER_INT);


$total_expenses = $housing + $communication + $household + $transportation + $financial + $entertainment + $medical;




?>

<!DOCTYPE html>
<html lang="en-ca">
<head>
  <meta charset="utf-8">
  <title>Budget Calculator</title>
  <link href="css/general.css" rel="stylesheet">
</head>
<body>

	<form method="post" action="index.php">
		
	
		
			<label for="subject">Month</label>
			<select id="subject" name="subject">
				<?php foreach ($possible_subjects as $key => $value) : ?>
				<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
				<?php endforeach; ?>
			</select>
		
			
		<div class="box">
          <label for="income">INCOME  $</label>
          <input type="number" id="income" name="income">
        
	 			
          <label for="expenses">EXPENSES  $</label>
          <input type="number" id="expenses" name="expenses"  value="<?php if(isset($total_expenses)){ echo $total_expenses;}?>">
		</div>
		
	 	<div class="top">
			<div class="inputField">		
			  <label for="housing">HOUSING</label>
			  <input type="number" class="inputArea" id="housing" name="housing" placeholder="0">
			</div>
		
	  
			<div class="inputField">
	      <label for="communication">COMMUNICATION</label>
          <input type="number" class="inputArea" id="communication" name="communication" placeholder="0">
			</div>
			
	 		<div class="inputField">	
          <label for="household">HOUSE HOLD</label>
          <input type="number" class="inputArea" id="household" name="household"  placeholder="0">
			</div>	
			
			<div class="inputField">
          <label for="transportation">TRANSPORTATION</label>
          <input type="number" class="inputArea" id="transportation" name="transportation"  placeholder="0">
			</div>
			
			<div class="inputField">
          <label for="financial">FINANCIAL</label>
          <input type="number" class="inputArea" id="financial" name="financial"  placeholder="0">
			</div>
			
	 		<div class="inputField">
          <label for="entertainment">ENTERTAINMENT</label>
          <input type="number" class="inputArea" id="entertainment" name="entertainment"  placeholder="0">
			</div>
			
	 		<div class="inputField">		
          <label for="medical">MEDICAL/ HEALTH</label>
          <input type="number" class="inputArea" id="medical" name="medical"  placeholder="0">
		  </div>
		  
		</div>
	 	 <button>Calculate</button>	
	
	</form> 
	
</body>
</html>
