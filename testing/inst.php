<!DOCTYPE html>
<html>
<head>
  <title>Web App Instructions</title>
  <style>
    /* Add your custom CSS styles here */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f2f2f2;
    }

    .container {
      text-align: center;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h1 {
      color: #333;
      font-size: 24px;
    }

    .step {
      margin-bottom: 20px;
    }

    .step-number {
      display: inline-block;
      width: 24px;
      height: 24px;
      border-radius: 50%;
      background-color: #333;
      color: #fff;
      text-align: center;
      line-height: 24px;
      font-size: 16px;
      font-weight: bold;
      margin-right: 10px;
    }

    .step-description {
      display: inline-block;
      text-align: left;
      vertical-align: middle;
      font-size: 16px;
      line-height: 1.5;
    }

    .note {
      color: #999;
      font-size: 14px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Steps to Use the Web App</h1>

    <div class="step">
      <span class="step-number">1</span>
      <span class="step-description">Login</span>
    </div>

    <div class="step">
      <span class="step-number">2</span>
      <span class="step-description">Add a new deployment (add multiple if required)</span>
    </div>

    <div class="step">
      <span class="step-number">3</span>
      <span class="step-description">"View existing deployment" to verify the info provided</span>
    </div>

    <div class="step">
      <span class="step-number">4</span>
      <span class="step-description">
        Option (Mark your deployments as source or destinations... as required)
        <ul>
          <li>Only one marking of option (source/destination) is possible</li>
          <li>For full fetch, populate</li>
          <li>For partial fetch, go into specific element and use "Fetch Option"</li>
        </ul>
      </span>
    </div>

    <div class="step">
      <span class="step-number">5</span>
      <span class="step-description">
        Move to policy results to add results in queue
        <br>
        <span class="note">Note: Addition into the queue is persistent and does not get removed once the page reloads</span>
      </span>
    </div>

    <div class="step">
      <span class="step-number">6</span>
      <span class="step-description">
        Move to checkout and verify all queue data is available.
        <br>
        Make sure you have added an ISE deployment as a destination in the deployment option.
      </span>
    </div>

    <div class="step">
      <span class="step-number">7</span>
      <span class="step-description">Check out and push. Please wait patiently for the app to return.</span>
    </div>

    <div class="step">
      <span class="step-number">8</span>
      <span class="step-description">
        To read any info, simply click on the name of the element or download it.
      </span>
    </div>

    <div class="step">
      <span class="step-number">9</span>
      <span class="step-description">
        To push any data not fetched from the app, please use the upload option.
      </span>
    </div>

    <div class="step">
      <span class="step-number">10</span>
      <span class="step-description">
        Please upload the file in JSON format and in the respective folder.
      </span>
    </div>

    <div class="step">
      <span class="step-description">Repeat from step 5</span>
    </div>
  </div>
</body>
</html>

