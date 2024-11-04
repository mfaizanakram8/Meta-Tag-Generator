<?php
include'check.php';
include'../function.php';
 
$ckeditor = 1;
$title = u("manage CODE / ADS place");
include'header.php';
include'menu.php';
$path = '../ads/';
$files = array_diff(scandir($path), array('.', '..'));
echo'<div class="bg-white shadow-sm p-3 rounded"><div class="table-responsive">
  <table class="table align-middle">
  <thead>
    <tr>
      <th scope="col">Location</th>
      <th scope="col">Edit</th>
      <th scope="col">ON/OFF</th>
    </tr>
  </thead>
  <tbody>';
  $count = 1;
foreach ($files as $file){
    
    if($file != "index.php"){
    
    $readtag = file_get_contents('../ads/'.$file.'');
    echo'<tr>
    
    <th><div class="h6">'.codetags($file).'</div></th>
    
<th><button type="button" class="codehap_edit_page btn-sm btn btn-warning " data-id="'.$file.'" data-name="'.codetags($file).'"  data-postcontent="'.htmlentities($readtag).'" data-bs-toggle="modal" data-bs-target="#codehap_edit_page_modelModal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/></svg></button>
</th>


<th>'; 
 
$filename  = "../ads_/".$count++.".txt";

   if (file_exists($filename)){
   echo'<div class="like-button" data-eid="'.$count.'"><svg enable-background="new 0 0 48 48"  id="Layer_1" version="1.1" viewBox="0 0 48 48" height="30px" width="30px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Layer_3"><circle cx="24" cy="24" r="24"/></g></svg></div>';
}else{
   echo'<div class="like-button liked" data-eid="'.$count.'"><svg enable-background="new 0 0 48 48"  id="Layer_1" version="1.1" viewBox="0 0 48 48" height="30px" width="30px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Layer_3"><circle cx="24" cy="24" r="24"/></g></svg></div>';
  
}

echo'














</th>

</tr>';
}

}
?>

    
  </tbody>
</table></div>
</div>

<style>

.like-button svg {
	fill: green;
}

.like-button.liked svg {
	fill: red!important
}


.codehap_code_title{
border:none; cursor: not-allowed;
}

.codehap_code_title:disabled {
  background: #fff;
}
</style>

<div class="modal fade" id="codehap_edit_page_modelModal" tabindex="-1" aria-labelledby="codehap_edit_page_modelModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="codehap_edit_page_modelModalLabel">Edit Code </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onClick="history.go(0);"></button>
         </div>
         <div class="modal-body">
            <form id="action6">
               <input class="codehap_code_title"  type="text" name="eventTitle" id="eventTitle" value="" disabled>
 
<textarea class="form-control" id="post_con"  cols="40" rows="4" name="post_content"  placeholder="Type or Paste POST content here..."required></textarea>
<br>
<input type="hidden" name="event" value="pageEdit">
               <input type="hidden" name="eventId" id="eventId"/ value="">
               <button id="3" type="submit" class="btn btn-dark codehap_submit_btn" data-id="6">Update</button>
            </form>
            <div class="codehap_ajax_result"></div>
            <div class="codehap_ajax_wating mt-2" style="display:none;">
               <div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
                  <span class="visually-hidden">Loading...</span>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"onClick="history.go(0);">Close</button>
         </div>
      </div>
   </div>
</div>


<script type="text/javascript">
$(document).ready(function() {
    
    
     $("body").on("click", ".like-button", function (e) {
	var t, n;
	$("#auth-wrap")[0] ? $(".auth").toggleClass("open") : (t = $(this), n = $(this).data("eid"), $.post({
		url: "code_ads_ajax.php",
		data: {
			eid: n
		},
		success: function () {
			t.toggleClass("liked")
		}
	}))
});
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    $(document).on("click", ".codehap_submit_btn", function () {
     var codehap_form_id = $(this).data('id');


    
     $('#action'+codehap_form_id).submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: 'code_ads_ajax.php',
            data: $(this).serialize(),
            beforeSend: function () {
                $(".codehap_ajax_wating").show()
            },
            success: function (e) {
                $(".codehap_ajax_result").html(e)
            },
            error: function (e) {
                $(".codehap_ajax_result").html("Something Went Wron! Please try again later!")
            },
            complete: function () {
                $(".codehap_ajax_wating").hide()
            }
       });
     });
     
    });
    
});


$(document).on("click", ".codehap_edit_page", function () {
     var codehap_edit_page_id = $(this).data('id');
      var codehap_edit_page_title = $(this).data('name');
       var codehap_edit_page_postcontent = $(this).data('postcontent');
     $(".modal-body #eventId").val( codehap_edit_page_id );
      $(".modal-body #eventTitle").val( codehap_edit_page_title );
 $(".modal-body #post_con").val( codehap_edit_page_postcontent );
      
    //document.getElementById("#post_con").val = codehap_edit_page_postcontent;
      
});
</script>



 <?php include  'footer.php'; ?>