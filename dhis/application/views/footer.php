
        <!-- page scripts --> <!-- To check postioning -->
        <script type="text/javascript" src="<?php echo base_url();?>frontend/js/plugins/jquery/jquery.min.js"></script>
        <!-- ./page scripts -->

        <script src="<?php echo base_url();?>Bootstrap/dist/js/jquery-ui.min.js"></script>
        <script src="<?php echo base_url();?>Bootstrap/dist/js/bootstrap.min.js"></script>

         <!-- JSON File Reading -->
        <script type = "text/JavaScript">
        $("input#submit_button").click(function()
        {
            var login = 
            {
                username:"",password:""
            };

            $.ajax
            (

                {
                    //http://test.hiskenya.org/api/dataSets.json
                    url: 'http://localhost/dhis/JSON/dataSets.json',
                    dataType: 'json',
                    // data:login,
                    contentType:'application/json;charset:utf-8',
                    crossDomain:true,
                    success: function(data)
                    {       
                        for(var i=0; i<data.dataSets.length;i++)
                        {
                            $("div#id").append("<p style = 'color:blue'>"+data.dataSets[i].id+"</p><br>");
                           // $("div#created").append("<p style = ''>"+data.dataSets[i].created+"</p><br>");
                            $("div#name").append("<p style = ''>"+data.dataSets[i].name+"</p><br>");
                            // $("div#updated").append(data.dataSets[i].lastUpdated+"<br>");
                            // $("div#link").append("<a href='"+data.dataSets[i].href+"'></a><br>");
                        }
                    },

                    error: function(e)
                    {
                        alert("Error "+e);
                    }
                }
            );

        });

        </script>



        <!-- XMLHTTP Request -->
        <script>
               // var data_file = "http://localhost/dhis/JSON/dataSets.json";
               // var http_request = new XMLHttpRequest();
               // try
               // {
               //    // Opera 8.0+, Firefox, Chrome, Safari
               //    http_request = new XMLHttpRequest();
               // }
               // catch (e)
               // {
               //    // Internet Explorer Browsers
               //    try
               //    {
               //       http_request = new ActiveXObject("Msxml2.XMLHTTP");
               //    }
               //    catch (e)
               //     {
               //       try
               //       {
               //          http_request = new ActiveXObject("Microsoft.XMLHTTP");
               //       }
               //       catch (e)
               //       {
               //          // Something went wrong
               //          alert("Your browser broke!");
               //          return false;
               //       }
               //    }
               // }
               // http_request.onreadystatechange  = function()
               // {
               //    if (http_request.readyState == 4 && http_request.status == 200)
               //    {

               //      // Javascript function JSON.parse to parse JSON data
               //      var jsonObj = JSON.parse(http_request.responseText);

               //      //alert(jsonObj.dataSets[0].id);

               //      // jsonObj variable now contains the data structure and can
               //      // be accessed as jsonObj.name and jsonObj.country.
               //      var output;

               //      for (var i=0; i<jsonObj.dataSets.length; i++)
               //      {
               //          output+='<td>'+jsonObj.dataSets[i].id+'</td>';
               //          output+='&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
               //          output+='<td>'+jsonObj.dataSets[i].name+'</td>';
               //          output+='<br>';
               //      }
               //      document.getElementById("data").innerHTML=output;
               //    }
               // }
               // http_request.open("GET", data_file, true);
               // //  http_request.setRequestHeader('Access-Control-Allow-Headers', '*');
               // // http_request.setRequestHeader('Content-type', 'application/json');
               // //  http_request.setRequestHeader('Access-Control-Allow-Origin', '*');
               // http_request.send();

        </script>
    </body>
</html>






