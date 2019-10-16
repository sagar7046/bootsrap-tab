<html>
    <head>
            <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
            </script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>     
            <script>                
            </script>
            <style>
                .textbox1{
                    border-radius: 20px ; 
                    width: 200px;                    
                    outline: none;
                    border: 3px solid #337AB7;
                    padding: 2px;                    
                    padding-left: 20px;
                    height: 40px;
                }
                .text:focus,.lab{
                    background-color: slateblue;
                    margin-top: 5px;
                }
                .textbox2{
                    border-radius: 20px ; 
                    width: 200px;                                        
                    outline: none;
                    border: 1px solid black;
                    padding: 2px;                    
                    height: 40px;
                    margin-top: 3%;
                    border:3px solid #337AB7;
                    padding-left: 20px;
                }
                .button{
                    height: 40px;
                    border-radius: 20px;
                    width: 200px;
                    background-color: #FFC107;
                    margin-top: 3%;
                    outline: none;
                    border: none;
                }
                .button:focus{
                    outline: 0;   
                    border: 0;
                }
                #login_tab{
                     background-image:url("red-grunge-background.jpg");
                    
                }
                h3{
                    font-size: 30px;
                    color: thistle;
                }
            </style>
    </head>
    <body>
        <form method="post" action="#" name="frm">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-8 col-12" id="login_tab" style="margin-left:33%; height: 300px;margin-top: 10%;border-radius: 15px 15px 15px 15px;">
                <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">Student</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#buzz" role="tab" data-toggle="tab">Admin</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#references" role="tab" data-toggle="tab">Faculty</a>
                            </li>
                </ul>
                          
                          <!-- Tab panes -->
                <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active text-center" id="profile" >   
                                    <h3 class="text-center">Student</h3>                             
                                    <input type="text" class="textbox1 " placeholder="user id or email"/><br>
                                    <input type="password" class="textbox2" placeholder="password" autocomplete="off"/></br>
                                    <button class="btn btn-primary button" id="student" onclick="student1()" type="button">Login</button>                                    
                            </div>
                            <div role="tabpanel" class="tab-pane fade text-center" id="buzz">
                                    <h3 class="text-center">Admin</h3>                             
                                    <input type="text" class="textbox1 " placeholder="user id or email"/><br>
                                    <input type="password" class="textbox2" placeholder="password" autocomplete="off"/></br>
                                    <button class="btn button" id="admin" onclick="admin1()" type="button">Login</button>
                            </div>
                            <div role="tabpanel" class="tab-pane fade text-center" id="references">
                                    <h3 class="text-center">Faculty</h3>                             
                                    <input type="text" class="textbox1 " placeholder="user id or email"/><br>
                                    <input type="password" class="textbox2" placeholder="password" autocomplete="off"/></br>
                                    <button class="btn btn-primary button" id="faculty" onclick="faculty1()" type="button">Login</button>                                  
                            </div>
                </div>                                                    
            </div>
        </div>
        <div id="demo">
            </div>
        <script>
            function admin1()
            {                
               var http=new XMLHttpRequest();
               http.open("GET","auth.php?role=admin",false);
               http.send();
               document.getElementById("demo").innerHTML=http.responseText;
            }
            
            function student1()
            {             
               var http=new XMLHttpRequest();
               http.open("GET","auth.php?role=student",false);
               http.send();
               document.getElementById("demo").innerHTML=http.responseText;
            }
            function faculty1()
            {             
               var http=new XMLHttpRequest();
               http.open("GET","auth.php?role=faculty",false);
               http.send();
               document.getElementById("demo").innerHTML=http.responseText;
            }
        </script>
        </form>
    </body>
</html>