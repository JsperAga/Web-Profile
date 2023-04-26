<!-- 
Name: Jasper Aga Camana
Student Number: 171139215
Email: jcamana@myseneca.ca
Section: ZBB
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jasper Aga Camaña || WEB222 Final Project</title>
    <link rel="icon" type="image/x-icon" href="/Assets/Images/favicon.png">
    <!-- Unicons CSS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./Assets/styles.css">

    <!-- Fonts from Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">   
    
</head>
<style>
		#captcha {
			display: inline-block;
			background-color: #f5f5f5;
			padding: 10px;
			border-radius: 5px;
		}
		
		#captcha img {
			vertical-align: middle;
		}
		
		#captcha input {
			margin-left: 10px;
			padding: 5px;
			border-radius: 5px;
			border: 1px solid #ccc;
			font-size: 16px;
		}
	</style>
<script>
		function generateCaptcha() {
			var code = "";
			var characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
			for (var i = 0; i < 6; i++) {
				code += characters.charAt(Math.floor(Math.random() * characters.length));
			}
			document.getElementById("captcha-img").src = "captcha.php?code=" + code;
			document.getElementById("captcha-input").value = "";
			document.getElementById("captcha-code").value = code;
		}
		
		function checkCaptcha() {
			var input = document.getElementById("captcha-input").value;
			var code = document.getElementById("captcha-code").value;
			if (input == code) {
				alert("Captcha is correct!");
				generateCaptcha();
			} else {
				alert("Captcha is incorrect. Please try again.");
			}
		}
	</script>
<body>
    <div class="website">
        <!-- Navbar -->
        <header class="navbar">
            <nav>
                <div class="nav-menu">
                    <div class="menu">
                        <ul class="nav-links">
                            <li class="nav-item"><a class="nav-link" href="#home">HOME</a></li>
                            <li class="nav-item"><a class="nav-link" href="#about">ABOUT ME</a></li>
                            <li class="nav-item"><a class="nav-link" href="#education">EDUCATION</a></li>
                            <li class="nav-item"><a class="nav-link" href="#contact">CONTACT</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Menu Icon -->
                <div class="menu-icon">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </nav>
        </header>

        <!-- Main Content of the Webpage -->
        <main class="main">
            <!-- Homepage -->
            <section class="home" id="home">
                <div class="home-content">
                    <div class="home-img">
                        <a href="index.html"><img src="./Assets/Images/jasper-profile.jpg" alt="home-img"></a>
                    </div>
                    <div class="home-text">
                        <h3>Hi!</h3>
                        <h2>I'm <span class="color">Jasper</span></h2>
                        <p>I am an international student from Philippines and am Pursuing an Advanced Diploma in Computer Programming at Seneca College to further enchance my skill as an IT professionals. I am passionate about Software Development and I look forward to connecting with you.</p>
                    </div>
                    <div class="home-btns">
                        <a download="Jasper Aga Camana - Updated Resume.pdf" href="./Assets/Files/Jasper Aga Camana - Updated Resume.pdf">
                            <button class="btn"><i class="uil uil-import"></i>Resume</button></a>
                        <a href="https://github.com/JsperAga" target="_blank">
                            <button class="btn"><i class="uil uil-github"></i>Github</button></a>
                        <a href="#contact"><button class="btn">Contact Me</button></a>
                    </div>
                </div>
            </section>

            <!-- About Section -->
            <section class="about" id="about">
                <h2 class="heading">ABOUT</h2>
                <div class="about-content">
                    <div class="about-details">
                        <span class="abt-span">Basic Information</span>
                        <pre><strong>AGE:</strong>              38</pre>
                        <pre><strong>EMAIL:</strong>            jcamana@myseneca.ca</pre>
                        <pre><strong>LANGUAGE:</strong>         English, Tagalog</pre>
                        <pre><strong>CLASS SECTION:</strong>    ZBB</pre>
                        <pre><strong>STUDENT ID:</strong>       171139215</pre>
                        <pre><strong>INSTRUCTOR:</strong>       Mr. Mark Meritt</pre>
                    </div>
                    <div class="about-text">
                        <span class="abt-span">About Me and Academic Honesty</span>
                        <p>I am Jasper, a web developer by profession, who creates online applications for certain organizations. I love the thrill of finishing a new project and seeing smiles on my clients’ faces as they use my application.
                        <br><br>I declare that my assessment is wholly my own work in accordance with Seneca Academic Policy. No part of this assessment has been copied manually or electronically from any other source (including web sites) except for the information supplied by the WEB222 instructors and/or made available in this assessment for my use. I also declare that no part of this assignment has been distributed to other students.</p>
                        <span><strong>Date: </strong></span><p>December 14, 2022</p>
                    </div>
                </div>
            </section>

            <!-- Education Section -->
            <section class="education" id="education">
                <h2 class="heading">EDUCATION</h2>
                <div class="education-content">
                    <div class="education-box">
                        <i class="uil uil-university"></i>
                        <h2>Asia Pacific College</h2>
                        <p>Bachelor Science - Computer Science and Information Technology, December 2005 </p>
                        
                    </div>
                    <div class="education-box">
                        <i class="uil uil-university"></i>
                        <h2>Seneca College</h2>
                        <p>Computer Programming,<br>May 2022 - December 2023</p>
                    </div>
                </div>
            </section>

            <!-- Form Section -->
            <section class="contact" id="contact">
                <h2 class="heading">CONTACT ME</h2>
                <div class="contact-content">
                    <form action="contact-list.php#contact" class="contact-form" id="contact-form" method="POST" onsubmit="return validateForm()">
                        <!-- Name -->
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" placeholder="Your Name" class="name format">

                        <!-- Name -->
                        <label for="name">Address:</label>
                        <textarea name="address" id="address" cols="30" rows="2" placeholder="Enter your address" class="address"></textarea>


                        <!-- Email -->
                        <label for="email">Email:</label>
                        <!-- email type wasnt used because form is validated using js so it wasn't needed -->
                        <input type="text" name="email" id="email" placeholder="Email address" class="email format">

                        <!-- Datalist for cities in Canada -->
                        <label for="name">City:</label>
                        <input class="format" type="text" id="city" name="city" list="suggestions" placeholder="Enter your City"/>
                        <datalist id="suggestions">
                            <option label="Abbotsford" value="Abbotsford"></option>
                            <option label="Barrie" value="Barrie"></option>
                            <option label="Calgary" value="Calgary"></option>
                            <option label="Chicoutimi" value="Chicoutimi"></option>
                            <option label="Edmonton" value="Edmonton"></option>
                            <option label="Halifax" value="Halifax"></option>
                            <option label="Hamilton" value="Hamilton"></option>
                            <option label="Kelowna" value="Kelowna"></option>
                            <option label="Kingston" value="Kingston"></option>
                            <option label="Kitchener" value="Kitchener"></option>
                            <option label="London" value="London"></option>
                            <option label="Montréal" value="Montréal"></option>
                            <option label="Oshawa" value="Oshawa"></option>
                            <option label="Ottawa" value="Ottawa"></option>
                            <option label="Quebéc" value="Quebéc"></option>
                            <option label="Regina" value="Regina"></option>
                            <option label="Saint John" value="Saint John"></option>
                            <option label="Saskatoon" value="Saskatoon"></option>
                            <option label="Sherbrooke" value="Sherbrooke"></option>
                            <option label="St Catharines-Niagara" value="St Catharines-Niagara"></option>
                            <option label="St John's" value="St John's"></option>
                            <option label="Sudbury" value="Sudbury"></option>
                            <option label="Sydney" value="Sydney"></option>
                            <option label="Thunder Bay" value="Thunder Bay"></option>
                            <option label="Toronto" value="Toronto"></option>
                            <option label="Trois-Rivières" value="Trois-Rivières"></option>
                            <option label="Vancouver" value="Vancouver"></option>
                            <option label="Victoria" value="Victoria"></option>
                            <option label="Windsor" value="Windsor"></option>
                            <option label="Winnipeg" value="Winnipeg"></option>
                            
                        </datalist>

                        <!-- Postal Code -->
                        <label for="pCode">Postal Code:</label>
                        <input name="Postal_Code" type="text" id="pCode" class="format" placeholder="Postal Code">
                       
                        <!-- Purpose -->
                        <br>
                        <div class="radio-btns" id="group">                                   
                        </div>
                        <input type="hidden" name="radiosel" id="radiosel" value="">
                                                
                        <!-- Message -->
                        <label for="message">Message for me:</label>
                        <textarea name="message" id="message" cols="30" rows="5" placeholder="Enter your message" class="address"></textarea>
                         
                        <!-- Position Offered -->
                        <label for="field">What industry do you belong?</label>
                        <select name="field" id="field" size=5>
                            <option value="Information Technology">Information Technology</option>
                            <option value="Finance">Finance</option>
                            <option value="Telecommunication">Telecommunication</option>
                            <option value="Management & Consulting">Management & Consulting</option>
                            <option value="Healthcare">Healthcare</option>
                            <option value="Manufacturing">Manufacturing</option>
                            <option value="Insurance">Insurance</option>
                            <option value="Education">Education</option>
                            <option value="Transportation & Logistics">Transportation & Logistics</option>
                            <option value="Human Resources & Staffing">Human Resources & Staffing</option>
                            <option value="Government & Public Administration">Government & Public Administration</option>                        
                         </select>   

                        
                        <!-- captcha -->
                        <div id="captcha">
                        <img id="captcha-img" src="captcha.php" alt="Captcha Image">
                        <input id="captcha-input" type="text" placeholder="Enter the code above">
                        <input id="captcha-refresh" type="button" value="Refresh" onclick="generateCaptcha()">
                        <input id="captcha-code" type="hidden">
                        

                        </div>
                        <script>
                            generateCaptcha();
                        </script>

                         <!-- error message -->
                         <div id="errormessage"></div>

                        <!-- Buttons -->
                        <div class="form-btns">
                            <input type="submit" value="Send" class="btn">
                            <input type="reset" value="Clear" class="btn">
                        </div>
                        
                    </form>
                </div>
            </section>
        </main>

        <!-- Webpage Footer -->
        <footer class="footer">
            <h4>Jasper Aga Camaña</h4>
            <p>
            I declare that my assessment is my own work in accordance with Seneca Academic Policy.
            <br> <span>Copyright&copy; 2022</span></p>
            <div class="icons">
                <a href="https://www.linkedin.com/in/jasperagacamana/" target="_blank"><i class="uil uil-linkedin"></i></a>                
                <a href="https://www.facebook.com/tazniel" target="_blank"><i class="uil uil-facebook"></i></a>  
                <a href="https://www.jaspercamana.com" target="_blank"><i class="uil uil-globe"></i></a>
            </div>
        </footer>

    </div>
    
    
    <!-- JavaScript file -->
    <script src="./Assets/script.js"></script>
</body>
</html>