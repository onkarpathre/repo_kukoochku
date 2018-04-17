<style>
	#loadss{
    width:100%;
    height:100%;
    position:fixed;
    z-index:999999999999;
    background:url("images/logo.jpg") no-repeat center center #fff;
}

#loadss img
	{
		margin-left:auto; margin-right:auto; display:block; margin-top:300px;
	}
@media(max-width:360px) {
#loadss{
    width:100%;
    height:100%;
    position:fixed;
    z-index:999999999999;
    background:url("images/logo.jpg") no-repeat center center #fff;
	background-size: 300px 241px;
}

#loadss img
	{
		margin-left:auto; margin-right:auto; display:block; margin-top:180px;
	}
	
}

	</style>
    
    <div id="loadss"><img src="images/loading.gif"></div>

	<script type="text/javascript">
document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'interactive') {
       document.getElementById('contents').style.visibility="hidden";
  } else if (state == 'complete') {
      setTimeout(function(){
         document.getElementById('interactive');
         document.getElementById('loadss').style.visibility="hidden";
         document.getElementById('contents').style.visibility="visible";
      },1000);
  }
}
</script>
