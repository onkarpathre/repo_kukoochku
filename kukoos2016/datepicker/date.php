
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>

		

		<script type="text/javascript" src="jquery.min.js"></script>
        
		<script type="text/javascript" src="date.js"></script>
        
		<script type="text/javascript" src="jquery.datePicker.js"></script>
        
		<link rel="stylesheet" type="text/css" media="screen" href="datePicker.css">
		
		<link rel="stylesheet" type="text/css" media="screen" href="demo.css">
        
		<script type="text/javascript" charset="utf-8">
			$(function()
            {
				$('.date-pick').datePicker()
				$('#start-date').bind(
					'dpClosed',
					function(e, selectedDates)
					{
						var d = selectedDates[0];
						if (d) {
							d = new Date(d);
							$('#end-date').dpSetStartDate(d.addDays(1).asString());
						}
					}
				);
				$('#end-date').bind(
					'dpClosed',
					function(e, selectedDates)
					{
						var d = selectedDates[0];
						if (d) {
							d = new Date(d);
							$('#start-date').dpSetEndDate(d.addDays(-1).asString());
						}
					}
				);
				$('#go-button').bind(
					'click',
					function(e)
					{
						var d = $('#start-date').dpGetSelected()[0];
						var endD = $('#end-date').dpGetSelected()[0];
						var datesInRange = [];
						if (d && endD)
						{
							d = new Date(d)
							endD = endD;
							while (d.getTime() != endD)
							{
								datesInRange.push(d.asString());
								d.addDays(1);
							}
							alert(datesInRange);
						} else {
							alert('Please select start and end dates');
						}
						return false;
					}
				);
            });
		</script>
		
	</head>



                           Start date:
							<input name="start-date" id="start-date" type="text" class="date-pick" /><br>


                           End date:
							<input name="end-date" id="end-date" type="text" class="date-pick" />


    
</html>

