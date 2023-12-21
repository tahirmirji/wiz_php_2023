<!DOCTYPE html>
<html>
    <head>
        <title>Example</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>


    
    <div class="container text-success ">

        <div class="row p-5 mt-5 text-secondary bg-info-subtle">
            
            <div class=" col-2 ">
                
            </div>

            <div class=" col-8  ">

            <form method='post' action="mailto:xyz@gmail.com">
            <!-- Name row -->
                <div class="row  ">
                
                    <div class="col-6 ">
                        <h1>Name</h1>
                    </div>

                    <div class="col-6">
                    <input type="text" name="username" placeholder="Full name">
                </div>

                </div>

                <!-- Email row -->
                <div class="row  ">
                
                    <div class="col-6 ">
                        <h1>Email</h1>
                    </div>

                    <div class="col-6">
                    <input type="email" name="emailid" placeholder='Email'>
                </div>

                </div>

                <!-- Skills -->
                <div class="row  ">
                
                    <div class="col-6 ">
                        <h1>Skills</h1>
                    </div>

                    <div class="col-6" role="group">
                    PS<input type="checkbox" name="PS" >
                    AI<input type="checkbox" name="AI" >
                    
                </div>

                </div>

                <!-- Gender -->
                <div class="row  ">
                
                    <div class="col-6 ">
                        <h1>Gender</h1>
                    </div>

                    <div class="col-6" role="group">
                    Male<input type="radio" name="gender" value="Male" >
                    Female<input type="radio" name="gender" value="Female">
                    
                </div>

                </div>

                <!-- Buttons -->
                <div class="row  ">
                
                    <div class="col-6 ">
                        <h1></h1>
                    </div>

                    <div class="col-6" role="group">
                    
                    <input type="submit" name="submit" value="Register">
                    <input type="reset" name="rest_button" value="Clear Form">
                    
                </div>

                </div>





            </form>
            </div>

            <div class=" col-2 ">
                
            </div>


        </div>

    </div>


    </body>

</html>