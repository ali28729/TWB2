<script>


      //for tooltips
      $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip(); 
    });



       function initMap() {
        var seecs = {lat: 33.6423899, lng:72.9900671};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 5,
          center: seecs
        });
        var marker = new google.maps.Marker({
          position: seecs,
          map: map
        });

        center: seecs
         google.maps.event.trigger(map, "resize");
         map.setCenter(seecs); 
         console.log("inMa");

      }

     var tid = setTimeout(mycode, 1000);
function mycode() {
  console.log("pls");
        var seecs = {lat: 33.6423899, lng:72.9900671};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 5,
          center: seecs

        });

    var center = map.getCenter();
    google.maps.event.trigger(map, "resize");
    map.setCenter(seecs);
    console.log("jm");
      };
  tid = setTimeout(mycode, 1000); // repeat myself


      $(document).click(function(){
        console.log("plssss");
        var seecs = {lat: 33.6423899, lng:72.9900671};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 5,
          center: seecs

        });

    var center = map.getCenter();
    google.maps.event.trigger(map, "resize");
    map.setCenter(seecs);
    console.log("jm");
      });

    </script>
    <!--Contact Page-->
    <!--Feed Page-->
    <script type="text/javascript">
    var jsFile;
    $(document).ready(function(){
      var ret = [];
      $.getJSON("data.json", function(result){
        console.log(0);
        jsFile = result;
          ret.push(result.data[0].title);
          ret.push(result.data[1].title);
          ret.push(result.data[2].title);
          ret.push(result.data[3].title);
          ret.push(result.data[4].title);
          ret.push(result.data[5].title);
          console.log(ret);
        
          
      });

      $('#search1').typeahead({
          source: function(query, process){
            process(ret);             
          }
      });
    });
  


    function validatePass()
 	{
 		console.log("I am validating password");
 		var pass=document.getElementById('pass').value;
 		var regex = Array();
        regex.push("[A-Z]"); 
        regex.push("[a-z]"); 
        regex.push("[0-9]"); 
        regex.push("[$@$!%*#?&_.]");

        var score=0;
        
        
 	    if (pass.length!=0){
        console.log("Password length != 0");
        for (var i = 0; i < regex.length; i++) {
            if (new RegExp(regex[i]).test(pass)) {
            	//console.log("I am here");
            	//console.log(score);
                score++;
            }
        }

        if (score>2 && pass.length > 7) {
            score++;
        }

        if (score==1){
            strength = 'Bad';        	
        	document.getElementById("strength").style.color='red';
        }

        else if (score==2)
        {
            strength = 'Fair';
        	document.getElementById("strength").style.color='orange';
        }
        else if (score==3)
        {
            strength = 'Good';
        	document.getElementById("strength").style.color='lightgreen';
        }
        else if (score==5)
        {
            strength = 'Excellent';
        	document.getElementById("strength").style.color='green';
        }

        document.getElementById("strength").innerHTML=strength;
        console.log(strength);
        document.getElementById("strength").style.display = 'block';
    }


    else if (pass.length==0){
    	console.log("Password length == 0");
    	console.log("removing strength indicator")
 		document.getElementById('strength').style.display = 'none';
 		
 	}
}


 	</script>

 	<script> 		
 		 //$("#first, #last, #email, #password").on("keyup", function(){
            //if( $(this).val() != "" && $("#last").val() != "" && $("#email").val() != "" && $("#password").val() != "" ){
    	//$("#btn").removeAttr("disabled");
        //}
    //}); 


 	 $("#fullname, #username, #email, #password").change(function(event) {       //this function successfully appends attribute "disabled"
 	 	var count = 0;                                                     
        x = event.target.value;
        
        if (x == 0) {
        	console.log("I am applying disable");
            $("#btn").attr("disabled", "disabled");
        }
        
     
     
        

    }); 

 	 $("#myForm").change(function(event) {                                    //******this function successfully removes attribute "disabled"*******
 	 	var count = 0;
        x = event.target.value;
        if ( $("#fullname").val() != "" ){
        	if ( $("#username").val() != "" ){
        		if ( $("#email").val() != "" ){
        			if ( $("#password").val() != "" ){
        				console.log("I am removing disable");
        				$("#btn").removeAttr("disabled", "disabled");
        			}
        		}
        	}
        }

        else {                                                                    //******majorly useless******* 
        	$("#btn").attr("disabled", "disabled");
        }

    }); 

 	</script>

 	<script type="text/javascript">
    	$(document).ready(function(){
    	
    	var flag=0;

    	$('#fullname').one("blur", (function()
    	{	
    	if( this.value ) {
         
    		
    		val=$("#pb").width();

    		flag=flag+1;

    		switch(flag){
    			case 1:
    			val = 20+"%";
    			break;
    			case 2:
    			val = 40+"%";
    			break;
    			case 3:
    			val = 60+"%";
    			break;
    			case 4:
    			val = 80+"%";
    			break;
    			case 5:
    			val = 100+"%";
    			$("#pb").addClass("progress-bar-success");
    			break;
    		}

    		console.log(val);
    		$("#pb").css("width", val);

    					}
		}))
		
		$('#username').one("blur", (function()
    	{	
    	if( this.value ) {
         
    		
    		val=$("#pb").width();

    		flag=flag+1;

    		switch(flag){
    			case 1:
    			val = 20+"%";
    			break;
    			case 2:
    			val = 40+"%";
    			break;
    			case 3:
    			val = 60+"%";
    			break;
    			case 4:
    			val = 80+"%";
    			break;
    			case 5:
    			val = 100+"%";
    			$("#pb").addClass("progress-bar-success");
    			break;
    		}

    		console.log(val);
    		$("#pb").css("width", val);

    					}
		}))

		$('#dob').one("blur", (function()
    	{	
    	if( this.value ) {
         
    		
    		val=$("#pb").width();

    		flag=flag+1;

    		switch(flag){
    			case 1:
    			val = 20+"%";
    			break;
    			case 2:
    			val = 40+"%";
    			break;
    			case 3:
    			val = 60+"%";
    			break;
    			case 4:
    			val = 80+"%";
    			break;
    			case 5:
    			val = 100+"%";
    			$("#pb").addClass("progress-bar-success");
    			break;
    		}

    		console.log(val);
    		$("#pb").css("width", val);

    					}
		}))

		$('#pass').one("blur", (function()
    	{	
    	if( this.value ) {
         
    		
    		val=$("#pb").width();

    		flag=flag+1;

    		switch(flag){
    			case 1:
    			val = 20+"%";
    			break;
    			case 2:
    			val = 40+"%";
    			break;
    			case 3:
    			val = 60+"%";
    			break;
    			case 4:
    			val = 80+"%";
    			break;
    			case 5:
    			val = 100+"%";
    			$("#pb").addClass("progress-bar-success");
    			break;
    		}

    		console.log(val);
    		$("#pb").css("width", val);

    					}
		}))

		$('#email').one("blur", (function()
    	{	
    	if( this.value ) {
         
    		
    		val=$("#pb").width();

    		flag=flag+1;

    		switch(flag){
    			case 1:
    			val = 20+"%";
    			break;
    			case 2:
    			val = 40+"%";
    			break;
    			case 3:
    			val = 60+"%";
    			break;
    			case 4:
    			val = 80+"%";
    			break;
    			case 5:
    			val = 100+"%";
    			$("#pb").addClass("progress-bar-success");
    			break;
    		}

    		console.log(val);
    		$("#pb").css("width", val);

    					}
		}))

		

		});

		
    </script>