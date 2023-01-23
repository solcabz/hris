<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>

<style>
	.choices__inner{
		width:480px;
	}
	.choices__list--multiple .choices__item{
		background: #FF9000;
		border: none;
	}
	.choices__list--dropdown .choices__list{
		color: black;
	}
	
</style>

<p>Allowed to view / edit:</p>
<div class="row d-flex justify-content-center mt-100">
    <div class="col-md-6"> <select id="choices-multiple-remove-button" placeholder="" multiple>
            <option value="HTML">HTML</option>
            <option value="Jquery">Jquery</option>
            <option value="CSS">CSS</option>
            <option value="Bootstrap 3">Bootstrap 3</option>
            <option value="Bootstrap 4">Bootstrap 4</option>
            <option value="Java">Java</option>
            <option value="Javascript">Javascript</option>
            <option value="Angular">Angular</option>
            <option value="Python">Python</option>
            <option value="Hybris">Hybris</option>
            <option value="SQL">SQL</option>
            <option value="NOSQL">NOSQL</option>
            <option value="NodeJS">NodeJS</option>
        </select> </div>
</div>
<p>This user will be able to view and edit in the sections listed above.</p>
<script>

$(document).ready(function(){
    
     var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
        removeItemButton: true,
        maxItemCount:500,
        searchResultLimit:500,
        renderChoiceLimit:500
	      });  
 });
</script>