<div id="response"></div>
 <script
    type="text/javascript"
    src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"
    
  ></script>
<script>
$.get("http://ip-api.com/json", function (response) {
    $("#response").html(JSON.stringify(response, null, 4));
}, "jsonp");
</script>