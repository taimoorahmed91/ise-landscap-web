<!DOCTYPE html>
<html>
<head>
    <title>MISE Landing Page</title>
    <style>
        body {
            background-image: url('background.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            font-family: Copperplate, serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
        }

        h1 {
            color: #fff;
            font-size: 36px;
            text-align: center;
            margin-bottom: 40px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .quadrant {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box {
            width: 250px;
            height: 250px;
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 10px;
            margin: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .box:hover {
            transform: scale(1.1);
        }

        .box h2 {
            color: #333;
            font-size: 30px;
            margin-bottom: 20px;
        }

        .box ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .box li {
            margin-bottom: 10px;
        }

        .box li a {
            color: #555;
            text-decoration: none;
	    transition: color 0.3s ease;
	    font-size: 20px; /* Adjust the font size as desired */
        }

        .box li a:hover {
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Landing Page for MISE Web APP</h1>
        <div class="quadrant">
            <div class="box">
                <h2>Deployment</h2>
                <ul>
                    <li><a href="#">Add a new Deployment</a></li>
                    <li><a href="#">View existing Deployments</a></li>
                </ul>
            </div>
            <div class="box">
                <h2>Policy Results</h2>
                <ul>
                    <li><a href="#">Allowed Protocols</a></li>
                    <li><a href="#">Downloadable ACLs</a></li>
		    <li><a href="#">Authorization Profiles</a></li>
		    <li><a href="#">SGT(Security Group Tags)</a></li>
                    <li><a href="#">NAD Groups</a></li>
                </ul>
            </div>
        </div>
        <div class="quadrant">
            <div class="box">
                <h2>Policy Sets</h2>
                <ul>
                    <li><a href="#">Policy Set</a></li>
                    <li><a href="#">Authentication Rules</a></li>
                    <li><a href="#">Authorization Rules</a></li>
                </ul>
            </div>
            <div class="box">
                <h2>Management</h2>
                <ul>
                    <li><a href="#">Checkout</a></li>
		    <li><a href="#">Uploads</a></li>
		</ul>
	   </div>


	   <div class="box">
                <h2>Logs</h2>
                <ul>
                    <li><a href="#">Apache</a></li>
                    <li><a href="#">MySQL</a></li>
                </ul>
           </div>
	</div>
	</div>

</body>
</html>
