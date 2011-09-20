<script src="http://code.jquery.com/jquery-1.6.2.min.js"></script>
<script>
$(document).ready(function(){

	$('#submitButton').click(function(){
		// this will stop the form from submitting. We want to ajax it instead. In fact, no form is even needed. just inputs.
		event.preventDefault();
		
		// grab input values
		var name = $('#name').val();
		var email = $('#email').val();
		
		// send the data via get to the 'ajax.php' or the page to save it and escape the data to be tacked onto the end of the URL
		$.get('ajax.php?fn=saveUser&name='+escape(name)+'&email='+escape(email),function(datafromajaxpage){
			
			// datafromajaxpage is the entire page contents of ajax.php, anything echoed at all there will show up here.
			if(datafromajaxpage=='ok'){
				alert('Thanks, new user saved!');
			}else{
				alert('Sorry, there was a problem.');
			}
		});
	});
	
});
</script>
