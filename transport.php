
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-T.css">

    <!-- -----------------FONT------------------ -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito&display=swap">


    <title>New Found Land</title>
    
</head>
<body>

    <div class="transport">
    <a href="home.php"><b><</b>Back</a>
        <div class="title">
            <h1 class="transport-form">Transportation Services Request Form </h1>
            <h3>Please Enter All Details Correctly</h3>
        <hr>
        </div>
        <div class="form">
            <div class="input_field">
                <label>Full Name:</label>
                <input class="fname" type="text" placeholder="First Name">
                <input class="lname" type="text"  placeholder="Last Name">
            </div>
            <div class="input_field">
                <label>Email Address:</label>
                <input type="text" class="input" placeholder="someone@example.com">
            </div>
            <div class="input_field">
                <label>Phone Number:</label>
                <input type="text" class="input" placeholder="+63 XXX-XXXX-XXX">
            </div>
            <div class="input_field">
                <label>Vehicle Requested:</label>
                <div class="custom_select">
                    <select>
                        <option value="">Select</option>
                        <option value="Ford Everest">Ford Everest</option>
                        <option value="Ford Everest">Hundai County</option>
                        <option value="Ford Everest">Hundai Elantra</option>
                        <option value="Ford Everest">HUndai Starex</option>
                        <option value="Ford Everest">L300 FB</option>
                        <option value="Ford Everest">Mitsubishi Adventure</option>
                        <option value="Ford Everest">Mitsubishi Rosa</option>
                        <option value="Ford Everest">New Innova 2018</option>
                        <option value="Ford Everest">Nissan Urvan 350</option>
                        <option value="Ford Everest">Toyota altis</option>
                        <option value="Ford Everest">Toyota Hiace Commuter</option>
                        <option value="Ford Everest">Toyota Hiace Grandia</option>
                        <option value="Ford Everest">Toyota Innova</option>
                        <option value="Ford Everest">Toyota Vios</option>
                    </select>
                </div>
            </div>
            <div class="input_field">
                <label>Start Date/Time: </label>
                <input class="date" type="datetime-local">
            </div>
            <div class="input_field">
                <label for="#">Return Date/Time: </label>
                <input class="date" type="datetime-local">
            </div>
            <div class="input_field">
                <label>Pickup Address:</label>
                <textarea class="textarea" placeholder="Input Address"></textarea>
            </div>
            <div class="input_field">
                <label>Destination Address:</label>
                <textarea class="textarea"placeholder="Input Destination"></textarea>
            </div>

            <div class="input_field">
                <label>Journey Type:</label>
                <div class="custom_select">
                    <select>
                        <option value="">Select</option>
                        <option value="Take Away on Vehicle">Take Away on Vehicle</option>
                        <option value="Take Away on Vehicle">Take Away on Vehicle</option>
                        <option value="Personal Vehicle Shipping">Personal Vehicle Shipping</option>
                        <option value="Expedited">Expedited</option>
                        <option value="Drive Away">Drive Away</option>
                        <option value="Home Delivery">Home Delivery</option>
                    </select>
                </div>
            </div>
            <div class="input_field">
                <label>Number of Passenger:</label>
                <input type="#" class="input" placeholder="Enter Passenger">
            </div>
            <div class="input_field terms">
                <label class="check">
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <p>Agreed to Terms and Conditions</p>
            </div>
            <div class="input_field">
                <input type="submit" value="Submit" class="btn"><br><br> 
            </div> 
            
</body>
</html>


