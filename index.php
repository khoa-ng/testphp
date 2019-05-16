<div id="response"></div>
 <script
    type="text/javascript"
    src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"
    
  ></script>
<script>
$.getJSON("https://api.ipdata.co/?api-key=test", function(response){
       alert(response.country_name)

    });
</script>