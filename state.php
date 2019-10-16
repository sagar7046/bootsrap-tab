<html>
    <head>
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
        function fill()
        {
            var v=document.getElementById("state").value;
            alert(v);
        }
    </script>

    </head>
    <body>  
        <div class="container bg-success" id="div1">
            <h1>AJAX Introduction</h1>
            <span style="color: blue" >This is an span example..</span>
            <p>
                AJAX tutorial covers concepts and examples of AJAX technology for beginners and professionals.
                AJAX is an acronym for Asynchronous JavaScript and XML. It is a group of inter-related technologies like JavaScript, DOM, XML, HTML/XHTML, CSS, XMLHttpRequest etc.
                AJAX allows you to send and receive data asynchronously without reloading the web page. So it is fast.
            </p>
            <button id="ajax" class="btn btn-primary" onclick="myfun()">Ajax</button>
        </div class="row" style="margin-left:200px">
            <div class="col-lg-4 bg-warning">
            <h2>Contact Us</h2>
            <hr>
            <div >
                <label>User Id</label><input type="text" class="form-control" name="userid"/>
                <label>Password</label><input type="password" class="form-control" name="pwd"/>
                <button type="button" style="margin-top:20px" class="btn btn-success">Log in</button></br>
                <label>State</label>
                <select id="state" onchange="myfun()">
                    <option value="Gujarat">Gujarat</option>
                    <option value="Maharashtra"> Maharashtra</option>
                </select>       
                <select id="city" onchange="alert(document.getElementById('city'))">
                    
                </select>            
            </div>
            </div>
            <div class="col-lg-4 bg-alert">
            sdslkl
            </div>
        <div>
        </div>
        <script>
            $(document).ready(function(){
                $('#ajax').click(function(){
                    $("#div1").load("load.html",function(){
                        alert("sdjskj   ");
                    });
                })
            });
        </script>

        <script>
            $(document).ready(function(){
                $("#d").datepicker();
            });
        </script>
        <script>
            function myfun()
            {
                var v=document.getElementById("state").value;
                var req=new XMLHttpRequest();
                req.open("GET","test.php?state="+v,true);
                req.send();
                req.onreadystatechange=function(){
                    if(req.readyState==4 && req.status==200)
                    {
                        document.getElementById("city").innerHTML=req.responseText;
                    }
                }
            }
        </script>
    </body>
</html>