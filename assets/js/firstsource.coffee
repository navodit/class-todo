###
   This is a multiline comment
###
jQuery ->
  console.log("this is line from source coffee")
  $("#scanner").click (e) ->
    e.preventDefault()
    console.log("the text box was clicked")
	
  $("#mydomelement").click ->
    console.log("the element was clicked")
	
  $("#scanner").focusin ->
    console.log("the text box was focused")
	
  $("#scanner2").keydown (e) ->
    e.preventDefault()
    if e.which is 13
      # console.log("if is working...")
      # console.log("after setting autoindentation off ")
      $.ajax
        url:'/devasthanam/smsquery/respondtosms'
        #type: 'POST'
        cache: false
        success: (data) ->
          $("#myscanner").append('Response recieved ' + data + '<br/>')

  $("#clearButton").click (e) ->
    e.preventDefault()
    $("#myscanner").text('')


	  
	
		

	  
	  
	


	
