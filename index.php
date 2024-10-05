<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="EVVI_Icon.png">
    <title>PTSF-Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
</head>

<body>

    <!-- Navigation Bar -->
    <nav>
        <ul class="nav-links">
            <li class="logo">
                <img src="Evvi_new.png" alt="Logo">
            </li>
            <li class="name">
                <h1 class="file">Feedback-Form</h1>
            </li>
            <li class="menu-item">
                <a href="#"><i class="fa-solid fa-house-chimney"></i></a>
            </li>
        </ul>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <div class="intro left section">
            <img src="discuss.jpg" alt="Goal Setting Image">
            <div class="para">
                <p class="content">Welcome to the Goal Setting Program! Before we begin, we’d like to understand your
                    current knowledge and
                    practices related to goal setting. <br>This will help us tailor the session to your needs.
                    <br>Please take a few
                    minutes to complete this assessment.
                </p>
                <div class="navigation-buttons">
                    <button class="btns" id="start-btn">START</button>
                </div>
            </div>
        </div>

        <div class="right section">
            <h2>Participant Information</h2>
            <div class="main-content">

                <label for="fullname">Full Name:</label>
                <input type="text" name="fullname" id="fullname" placeholder="Your Name"><br>

                <div class="age-group">
                    <label for="agegroup">Age Group:</label>
                    <label>
                        <input type="radio" name="age" value="under-18">
                        <span class="custom-radio"></span> Under 18
                    </label>
                    <label>
                        <input type="radio" name="age" value="18-24">
                        <span class="custom-radio"></span> 18-24
                    </label>
                    <label>
                        <input type="radio" name="age" value="25-34">
                        <span class="custom-radio"></span> 25-34
                    </label>
                    <label>
                        <input type="radio" name="age" value="35-44">
                        <span class="custom-radio"></span> 35-44
                    </label>
                    <label>
                        <input type="radio" name="age" value="45-above">
                        <span class="custom-radio"></span> 45 and above
                    </label>
                </div><br>

                <label for="options" id="form-label">Current Status:</label>
                <select name="Current Status" id="options" onchange="showFields()">
                    <option selected disabled value="">Choose</option>
                    <option value="Student">Student</option>
                    <option value="Professional">Professional</option>
                    <option value="Other">Other</option>
                </select>

                <!-- Fields for Student -->
                <div id="Student" class="option" style="display: none;">
                    <h2>If Student, please provide:</h2>
                    <label>College/University Name</label>
                    <input type="text" name="college" placeholder="College/University Name"><br />
                    <label>Year of Study</label>
                    <input type="text" name="yearstudy" placeholder="Year of Study"><br />
                    <label>Major/Department</label>
                    <input type="text" name="major" placeholder="Major/Department"><br />
                </div>

                <!-- Fields for Professional -->
                <div id="Professional" class="option" style="display: none;">
                    <h2>If Professional, please provide:</h2>
                    <label>Job Title:</label>
                    <input type="text" name="jobtitle" placeholder="Job Title"><br />
                    <label>Company/Organization</label>
                    <input type="text" name="company" placeholder="Company/Organization Name"><br />
                    <label>Industry</label>
                    <input type="text" name="industry" placeholder="Industry"><br />
                </div>

                <!-- Fields for Other -->
                <div id="Other" class="option" style="display: none;">
                    <h2>If Other, please provide additional details:</h2>
                    <input type="text" name="otherdetails" placeholder="Additional Details"><br />
                </div>

                <label for="city">City:</label><br>
                <input type="text" id="city" name="city" placeholder="Enter your city"><br>
                <label for="country">Country:</label><br>
                <input type="text" id="country" name="country" placeholder="Enter your country"><br>

            </div>
            <div class="navigation-buttons">

                <button class="btns" id="next-btn" type="button">NEXT</button>
            </div>
        </div>

        <!-- Slide 1: Goal Setting -->
        <div class="footer" style="display:none">
            <h2> Current Knowledge and Practices
            </h2>
            <div class="slide1">
                <label for="goal-familiarity">1. How familiar are you with the concept of goal setting?</label>
                <div class="linear-scale-container">
                    <input type="range" id="goal-familiarity" name="familiarity" min="1" max="5" step="1" value="1"
                        oninput="updateFamiliarityValue(this.value)" onclick="showFamiliarityMeaning(this.value)">
                    <div class="scale-labels">
                        <span>1</span>
                        <span>2</span>
                        <span>3</span>
                        <span>4</span>
                        <span>5</span>
                    </div>
                    
                    <div id="familiarity-meaning"></div>
                </div>

            </div>


            <!-- Goal Setting Practice -->
            <label for="goal-setting">2. Do you currently set goals for yourself?</label>
            <div id="goal-setting">
                <label>
                    <input type="radio" name="goal-setting" value="yes">
                    <span class="custom-radio"></span> Yes
                </label>
                <label>
                    <input type="radio" name="goal-setting" value="no">
                    <span class="custom-radio"></span> No
                </label>
            </div>


            <!-- Goal Review Frequency -->
            <label for="goal-review">3. If yes, how often do you review your goals?</label>
            <div id="goal-review">
                <label><input type="checkbox" name="review" value="daily"> Daily</label>
                <label><input type="checkbox" name="review" value="weekly"> Weekly</label>
                <label><input type="checkbox" name="review" value="monthly"> Monthly</label>
                <label><input type="checkbox" name="review" value="rarely"> Rarely</label>
                <label><input type="checkbox" name="review" value="never"> Never</label>
            </div>

            <!-- Effectiveness of Goal Setting (Slider) -->
            <label for="goal-effectiveness">4. How effective do you find your current goal-setting
                practices?</label>
            <div class="slider-container">
                <input type="range" id="goal-effectiveness" class="slider" name="effectiveness" min="0" max="100"
                    step="20" value="0" list="tickmarks" oninput="updateValue(this.value)">
                <datalist id="tickmarks">
                    <option value="0" label="0%"></option>
                    <option value="20"></option>
                    <option value="40"></option>
                    <option value="60"></option>
                    <option value="80"></option>
                    <option value="100" label="100%"></option>
                </datalist>
                <div class="value-display" id="slider-value">Selected Value: 0%</div>
            </div>

            <!-- Open-Ended Text Boxes -->
            <label for="goal-challenges">5. What challenges do you face in achieving your goals?</label>
            <textarea id="goal-challenges" name="challenges" rows="4"
                placeholder="Describe your challenges..."></textarea>

            <label for="goal-training">6.What do you hope to gain from this training?</label>
            <textarea id="goal-training" name="training-expectations" rows="4"
                placeholder="Your expectations..."></textarea>
        
        <div class="navigation-buttons">
            <button class="btns" id="prev-btn" type="button">PREV</button>
            <button class="btns" id="submit-btn" type="button">SUBMIT</button>
        </div>
    </div>

    </div>

    <script src="script.js"></script>
</body>

</html>