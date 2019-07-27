

var count=1;
$( document ).ready(function() {
	PATH=$(".navbar-brand img").attr('dev');
    //PATH='myministry.test/myministry.test/';
	//$.post( "../ajax/ajax.php",{ choice:'load_old_posts_more',num_posts:num_posts}).done(function( data ) {
	//		$('.post-wrapper').html(data);		
	//	})
		console.log(PATH);
		$.post(PATH+"ajax/ajax.php",{ choice:'load_old_posts', count:count}).done(function( data ) {
			
			$('.post-wrapper').html(data);		
		})


});


$(".older_posts").on( "click", function() {
count++;
	//var num_posts=parseInt($(this).attr('perPosts'));
	
	//var loaded_posts=parseInt($(this).attr('loadedPosts'));
	//console.log(loaded_posts);
	//var total_num_posts=parseInt($(this).attr('totalPosts'));
 	
	//if(total_num_posts<loaded_posts){
	//	$(".older_posts").hide();
	//}

	

	//if(total_num_posts>=loaded_posts){
		$.post( "../ajax/ajax.php",{ choice:'load_old_posts', count:count}).done(function( data ) {
			//console.log(data.hide);
			$('.post-wrapper').html(data);	

		})
		//}
	//$(this).attr('loadedPosts',num_posts+num_posts)
})