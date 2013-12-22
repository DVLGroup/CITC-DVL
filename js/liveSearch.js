/**
 * Livesearch
 */

$(document).ready(function(){
	function search(){
		//Từ khóa tìm kiếm
		var tu_khoa = $("input#search").val();
		var data_liveSearch = "liveSearch=true&txt-search=" + tu_khoa;
		$("b#value-search").html(tu_khoa);
		
		if(tu_khoa !== ''){
			$.ajax({
				type: 	"GET",
				url:	"liveSearch.php",
				data:	data_liveSearch,
				success: function(result){
					$("ul.result-liveSearch-list").html(result);
				}				
			});
		}
	}
	
	$('input#search').on('keyup', function(){
		clearTimeout($.data(this, 'timer'));
		
		//Từ khóa tìm kiếm
		var tu_khoa = $(this).val();
		
		//
		if(tu_khoa == '' || tu_khoa == ' '){
			$(".result-liveSearch").fadeOut();
		}
		else{
			$(".result-liveSearch").fadeIn();
			$(this).data('timer', setTimeout(search, 100));
		}
	});
	
	$("input#search").blur(function(){
		$(".result-liveSearch").fadeOut();
	});
})

