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

            <div class=" col-6  ">

            <form method='post' action="mailto:xyz@gmail.com">
            <div class="row text-center p-3 bg-danger text-white">
                
                
                    <h1>Registration Form</h1>
              

               

            </div>
            <!-- Name row -->
                <div class="row  bg-danger text-white">
                
                    <div class="col-6 ">
                        <h4>Name</h4>
                    </div>

                    <div class="col-6">
                    <input type="text" maxlength="30"  name="username" placeholder="Full name" required>
                </div>

                </div>

                <!-- Email row -->
                <div class="row  bg-danger text-white">
                
                    <div class="col-6 ">
                        <h4>Email</h4>
                    </div>

                    <div class="col-6">
                    <input type="email" name="emailid" placeholder='Email' required>
                </div>

                </div>

                <!-- Skills -->
                <div class="row  bg-danger text-white">
                
                    <div class="col-6 ">
                        <h4>Skills</h4>
                    </div>

                    <div class="col-6" role="group">
                    PS<input type="checkbox" name="PS" >
                    AI<input type="checkbox" name="AI" >
                    
                </div>

                </div>

                <!-- Gender -->
                <div class="row  bg-danger text-white">
                
                    <div class="col-6 ">
                        <h4>Gender</h4>
                    </div>

                    <div class="col-6" role="group">
                    Male<input type="radio" name="gender" value="Male" required>
                    Female<input type="radio" name="gender" value="Female" required>
                    
                </div>

                </div>

                <!-- Select dowpdown list -->
                <div class="row  bg-danger text-white">
                
                    <div class="col-6 ">
                        <h4>City</h4>
                    </div>

                    <div class="col-6" >
                    
                    <select name='city' required>
                        <option value='' selected>Select City</option>
                        <option value='Bengaluru' >Bengaluru</option>
                        <option value='Hubli'>Hubli</option>
                        <option value='Chennai'>Chennai</option>
                    </select>
                    
                </div>

                </div>


                <div class="row  bg-danger text-white">
                
                <div class="col-6 ">
                    <h4>Describe Yourself</h4>
                </div>

                <div class="col-6" role="group">
               
                <textarea required placeholder="Describe about yourself" name="description" row="3" cols="20" ></textarea>
                
            </div>

            </div>

                <!-- Buttons -->
                <div class="row  bg-danger text-white p-3">
                
                    <div class="col-6 ">
                      
                    </div>

                    <div class="col-6" role="group">
                    
                    <input type="submit" class="btn btn-success" name="submit" value="Register">
                    <input type="reset" class="btn btn-danger" name="rest_button" value="Clear Form">
                    
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