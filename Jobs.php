<?php require_once('assets/header.php'); ?>
<?php require_once('assets/navbar.php'); ?>


                    <ul>
                        <li><a href="Home.php" >Home</a></li>
                        <li><a href="About.php">About</a></li>
                        <li><a href="Clients.php">Clients</a></li>
                        <li><a href="Services.php">Vehicles</a></li>
                        <li class="active"><a href="Jobs.php">Jobs</a></li>
                        <li><a href="Contact.php">Contact</a></li>
                    </ul>
                
            </nav>
            </header>
        </nav>
        <div class="scroll">
            <a href="#scroll"><i class='bx bxs-chevron-up'></i></a>
        </div>

        <div class="try">
            <h4 class="try1">Jobs</h4>
        </div>

        <div class="job-title">
            <h2 class="title">Employment Opportunities</h2>
            <h3>Jobs that are open in the Philippines' provinces and Metro Manila</h3>
            <p>Please review our job openings and submit your application using the form below. We are always searching for decent, reliable, and skilled individuals.</p>
        </div>
<div class="divider">
            <!-- <div class="job-manpower">
                <h1>MANPOWER SERVICES</h1>
            </div> -->
                <!-- -------------Accordion------------------ -->
            <div class="main-accordion">
            <div class="job-manpower">
                        <h1>TRANSPORT SERVICES</h1>
                    </div>
                <div class="accordion">    
                    <div class="contentBx">
                        <div class="label">Shuttle Driver</div>
                        <div class="content">
                            <ul>
                                <li>25 to 40 years old</li>
                                <li>Must know how to drive manual and automatic vehicles.</li>
                                <li>Must be knowledgeable with traffic rules</li>
                                <li>Must be a high school graduate.</li>
                                <li>Must possess professional driver’s license</li>
                                <li>With at least 2 to 3 years driving experience.</li>
                                <li>Must be familiar with all the places at NCR and the Regions</li>
                                <li>Must know how to trouble shoot vehicles in case needed.</li>
                                <li>Must be physically and mentally fit to work.</li>
                            </ul>
                            <a href="#apply"><button type="submit">Apply Now</button></a>
                        </div>
                    </div>

                    <div class="contentBx">
                        <div class="label">Driver</div>
                        <div class="content">
                            <ul>
                                <li>25 to 40 years old</li>
                                <li>Must know how to drive manual and automatic vehicles.</li>
                                <li>Must be knowledgeable with traffic rules</li>
                                <li>Must be a high school graduate.</li>
                                <li>Must possess professional driver’s license</li>
                                <li>With at least 2 to 3 years driving experience.</li>
                                <li>Must be familiar with all the places at NCR and the Regions</li>
                                <li>Must know how to trouble shoot vehicles in case needed.</li>
                                <li>Must be physically and mentally fit to work.</li>
                            </ul>
                            <a href="#apply"><button type="submit">Apply Now</button></a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="job-req">
                <a href="#apply"><button type="submit" class="#">APPLY NOW</button></a>
                <h4>Job Requirements</h4>
                <ol>
                    <li>Resume</li>
                    <li>Barangay Clearance</li>
                    <li>Local Police Clearance</li>
                    <li>NBI Clearance</li>
                    <li>Diploma / Transcript of Records</li>
                    <li>SSS ID/E1 form, PhilHealth ID, Pagibig ID, TIN ID</li>
                    <li>Certificate of Employment from previous work</li>
                    <li>Birth Certificate</li>
                    <li>2×2 ID Picture</li>
                </ol>
                
            </div>
</div>

<div class="apply" id="apply">
    <h1>APPLY NOW!</h2>
    <p>Please fill in the forms below, attach your resume and submit your online application.</p>
</div>

    <div class="jform">
        <form action="#" class="form-contact">
            <div class="name">  
            <div class="jname">
                <label for="fname">First Name*</label>
                <input id="fname" type="text" placeholder="First Name..." required>
            </div>  

            <div class="jname">
                <label for="lname">Last Name*</label>
                <input id="lname" type="text" placeholder="Last Name..." required>
            </div> 

            <div class="jname">
                <label for="mname">Middle Name*</label>
                <input id="mname" type="text" placeholder="Middle Name..." required>
            </div>
            </div>
        
            <div class="jname">
            <label>Position Applying For*</label>
            <select id="select" name="subject" required>
                <option disabled="disabled" selected="selected" required>--Please choose an option--  </option>
                <option value="Drivers">Drivers</option>
                <option value="Shuttle Driver">Shuttle Driver</option>
            </select>
            </div>

            <div class="jname">
            <label for="email">Email*</label>
            <input id="email" type="email" placeholder="Email..." required>
            </div>

            <div class="jname">
            <label for="phone">Phone Number*</label>
            <input id="phone" type="text" placeholder="Phone Number..." required>
            </div>

            <!-- <div class="jname">
            <label for="file">Upload Your Resume* (We only accept .pdf, .doc, .docx file types)*</label>
            <input id="file" type="file">
            </div>

            <div class="date">
            <div class="jname">
            <label for="Sdate">Start Date*</label>
            <input id="Sdate" type="date" placeholder="mm/dd/yy">
            </div>
            <div class="jname">
            <label for="time">Time*</label>
            <input type="time" id="time">
            </div>
            </div> -->

            <div class="jname">
            <label for="remarks">Time & Date of Interview*</label>
            <textarea id="remarks" placeholder="Remarks..."></textarea>
            </div>

            <div class="submit">
            <button id="submit" type="submit" name="submit" >Send Application</button>
            <!-- <input id="submit" type="submit" name="submit" value="Send Application"> -->
            </div>
            <input type="reset" name="reset" value="Clear form">
        </form>
    </div>
    
    <!-- ============================================== -->
<!-- <form>
  <input type="file" id="myFileInput">
  <button onclick="downloadFile()">Download</button>
</form> -->

<script>
  function downloadFile() {
    // Get the input element
    var fileInput = document.getElementById("file");

    // Get the selected file(s)
    var files = fileInput.files;

    // Access the first file (in case of multiple files, you can iterate over the 'files' array)
    var file = files[0];

    // Create a download link
    var downloadLink = document.createElement("a");
    downloadLink.href = URL.createObjectURL(file);
    downloadLink.download = file.name;

    // Append the download link to the document body
    document.body.appendChild(downloadLink);

    // Trigger the download
    downloadLink.click();

    // Clean up the download link
    document.body.removeChild(downloadLink);
  }
</script>

<!-- ================================================================ -->

    <!-- <script src="https://smtpjs.com/v3/smtp.js"></script> -->
    <script>
        const fname=document.getElementById('fname');
        const mname=document.getElementById('mname');
        const lname=document.getElementById('lname');
        const select=document.getElementById('select');
        const email=document.getElementById('email');
        const phone=document.getElementById('phone');
        const Sdate=document.getElementById('Sdate');
        const time=document.getElementById('time');
        const file=document.getElementById('file');
        const remarks=document.getElementById('remarks');
        const submit=document.getElementsByClassName('form-contact')[0];

        submit.addEventListener('submit', (e)=>{
            e.preventDefault();
            console.log("Clicked");

            //Format for proper email
            let ebody=`
            <b>Name: </b>${fname.value} ${mname.value} ${lname.value}
            <br>
            <b>Position Applying For: </b>${select.value}
            <br>
            <b>Email: </b>${email.value}
            <br>
            <b>Phone no: </b>${phone.value}
            <br>
            <b>Time & Date of Interview: </b>${remarks.value}
            <br>
            `
            console.log(ebody);

        Email.send({
            SecureToken : "0a1568f1-f988-4717-b0bd-00b399df0a14",
            To : 'nfl.jcyaon@gmail.com',
            From : 'nfl.jcyaon@gmail.com',
            Subject : "Application Form from " + email.value,
            Body : ebody 
        }).then(
        message => alert("Email Sendded Successfully!")
        );
            // return alert ("Email Sendded Successfully!")
        })

    </script>
        
        <script>
            const accordion = document.getElementsByClassName('contentBx');
            for(i = 0; i<accordion.length; i++){
                accordion[i].addEventListener('click', function(){
                    this.classList.toggle('active')
                })
            }
        </script>

<script>
        ScrollReveal({ 
            // reset: true,
            distance: '60px',
            duration: 2000,
            delay: 300,
         });
         ScrollReveal().reveal('.job-title, .job-title .title, .job-title h3, .job-title p, .apply, .jform', { delay: 10, origin: 'top', interval: 100 });
         ScrollReveal().reveal('.job-manpower, .job-manpower h1, .main-accordion', { delay: 10, origin: 'left' });
         ScrollReveal().reveal('.job-req', { delay: 10, origin: 'right'}); 

         ScrollReveal().reveal('.try',  { delay: 500, origin: 'left' });
    </script>
<!-- <b>Resume: </b>${file.value}
            <br>
            <b>Date: </b>${Sdate.value}
            <br>
            <b>Time: </b>${time.value}
            <br> -->

<?php require_once('assets/footer.php'); ?>