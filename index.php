<div id="response"></div>
 <script
    type="text/javascript"
    src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"
    
  ></script>
<script>
$.get("https://api.ipdata.co/?api-key=test", function (response) {
    $("#response").html(JSON.stringify(response, null, 4));
}, "jsonp");
</script>