<!DOCTYPE html>
<html>
    <head>
        <title>Assistantship Evaluation</title>
        <script>

            
            function calc(){
                
                let score1 = document.getElementById("value1").value;
                let score2 = document.getElementById("value2").value;
                let score3 = document.getElementById("value3").value;
                let score4 = document.getElementById("value4").value;
                
                gpa = (parseInt(score1) + parseInt(score2) + parseInt(score3) + parseInt(score4))/4;
                //console.log(gpa);
                document.getElementById("result").innerHTML = "<p>Your gpa is: " + gpa.toPrecision(3) + "</p>";
                if (gpa >= 3.2) {
                    document.getElementById('evaluation').innerHTML = "Congratulations! You are eligible for assistantship. Please submit an application using this link."
                    document.getElementById('evaluation').style.color = "green"
                    document.getElementById('evaluation').innerHTML = document.getElementById('evaluation').innerHTML + 
                    "<p>Please give your information in this <a href='form.php'>Application Form</a>"
                } else {
                    document.getElementById('evaluation').innerHTML = "Thanks for your interest."
                    document.getElementById('evaluation').style.color = "red"
                }  
            }

            

            function showCourses(){
                if(document.getElementById("underRadio").checked){
                    document.getElementById("underDiv").style.display="block";
                    document.getElementById("graDiv").style.display="none";

                }else if (document.getElementById("graRadio").checked){
                    document.getElementById("graDiv").style.display="block";
                    document.getElementById("underDiv").style.display="none";

                }
            }
        </script>
       
    </head>
    
    <body>
        <body>

            <?php
                include("menu.html");
            ?>

            <div class="column center">
                <h1 style="background-color:blue;text-align:center">CARIT Student Assosiation</h1>
            </div>
            <div class="column center">
                <h1 style="background-color:aqua;text-align: center">What is it?</h1>
                <dl>
                    <p style="background-color:yellow;text-align:center">These are CARIT studen assistant positions!<br>
                        We have four that are open, two for undergraduate<br>
                         students and two for graduate students.</p> 
                    
                </dl>
        
            </div>
            <div>
                <hr>
                <p style="background-color:yellowgreen">Check your eligibility</p>
                
                <form> 
                    <fieldset>
                        <legend>Give Your Information</legend>
                                                                                
                            <label>
                                <input type="radio" id="underRadio" name="mafu" value="under">
                                Undergraduate
                                        
                            </label>                                              
                                                        
                            <label>
                                <input type="radio" id="graRadio" name="mafu" value="gra">
                                Graduate
                            </label>                           

                       <hr>
                       <button type="button" onclick="showCourses()">Required Courses</button>  
            </fieldset>
            <fieldset>
                <div style="display:none;" id="underDiv">
                    <table>
                        <tbody>
                            <tr>
                                <td width="500">CSE 3203 Mobile System Overview</td>
                                <td width="500">IT 4213 Mobile Web Development</td>
                                <td width="500">IT 4313 Computing Infrustructure</td>
                                <td width="500">IS 4516 Information System and Analysis</td>
                            </tr>
                        </tbody>
                   </table>
                      
                </div>
                <div style="display:none;" id="graDiv">
                    <table>
                        <tbody>
                            <tr>
                                <td width="500">IT 7113 Data Visualization</td>
                                <td width="500">IT 6713 Business Intelligence</td>
                                <td width="500">IT 5443 Web Development</td>
                                <td width="500">IT 5423 Programming Principle</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                    <table>
                        <tbody>
                            <tr>
                                <td width="500">
                                    <select id="value1">
                                        <option value="none">Select Grade</option>
                                        <option value="4.0">A</option>
                                        <option value="3.0">B</option>
                                        <option value="2.0">C</Option>
                                        <option value="1.0">D</option>
                                        <option value="0.0">F</option>

                                    </select>
                                </td>
                                <td width="500">
                                    <select id="value2">
                                        <option value="none">Select Grade</option>
                                        <option value="4.0">A</option>
                                        <option value="3.0">B</option>
                                        <option value="2.0">C</Option>
                                        <option value="1.0">D</option>
                                        <option value="0.0">F</option>

                                    </select>

                                </td>
                                <td width="500">
                                    <select id="value3">
                                        <option value="none"> Select Grade</option>
                                        <option value="4.0">A</option>
                                        <option value="3.0">B</option>
                                        <option value="2.0">C</Option>
                                        <option value="1.0">D</option>
                                        <option value="0.0">F</option>
                                    </select>
                                </td>
                                <td width="500">
                                    <select id="value4">
                                        <option value="none"> Select Grade</option>
                                        <option value="4.0">A</option>
                                        <option value="3.0">B</option>
                                        <option value="2.0">C</Option>
                                        <option value="1.0">D</option>
                                        <option value="0.0">F</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <input type="button" value="Evaluate" onclick="calc()">
                    <div id="result"></div>
                    
                    <h2 id="evaluation">Please wait for the result</h2>
                </div>
            </fieldset>
            
        </form>   
    </div>
    
    </body>
</html>