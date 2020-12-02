  $(document).ready(function(){
   // DOM이 아직 로드되지 않았기에 ready 이벤트를 사용해야 함
   // alert(jQuery('.test').text());

      var response = $.post(
      				"../../PHP_Test/spotify.php",
        	function(json) {
    			var jsonData = JSON.parse(json); //JSON 문자열을 JSON object로 변환
    			$(".test").html("JSON DATA (원본)") 
    			$(".test").append("<hr>");
    			$(".test").append("<p>"+json+"<p>");
    			$(".test").append("<hr></br>");
    			$(".test").append("<p>JSON Parsing ...</p>");
    			$(".test").append("<hr>");
				for (var i = 0; i < jsonData.length; i++) {
					$(".test").append("<p>"+jsonData[i].position+" : "+jsonData[i].track_name+" : "+jsonData[i].artist+" : "+jsonData[i].streams+" : "+jsonData[i].url+"</p></br>");
				};
		    });
    		//통신 실패시 리턴
    		response.fail(function() {
    			$(".test").html("오류가 발생했습니다 !!!<br>")
    		});
    		//통신 성공과 실패 상관없이 call
    		response.always(function() {
    			//$(".test").html("요청이 완료 !!!<br>")
    		});
    		return false;
    });