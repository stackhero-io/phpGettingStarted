<!DOCTYPE html>

<html lang="en">
  <head>
    <title>PHP example on Stackhero</title>
    <style>
      body { line-height: 1.4em; }
      h1 { margin-bottom: 40px; }
      .container { width: 934px; margin: 0 auto; border-bottom: 1px solid #ccc; padding: 40px; }
    </style>
  </head>

  <body>
    <div class="container">
      <h1>🎉 Congratulations! Your first PHP code is running on Stackhero!</h1>
    </div>

    <div class="container">
      <h1>Example of how to get an environment variable</h1>

      Environment variables are designed to store your secrets, like your database credentials and other passwords.
      <br />
      By security, you shouldn't store them directly in your source code.
      <br />
      <br />

      Here is an example of how to store a secret in environment variables and get it back in your PHP code (via the getenv("...") function):
      <br />
      <br />

      1. In Stackhero's console, go to your PHP service and click on "Configure"
      <br />

      2. Create an environment variable named "mySecret" and give it the value you want
      <br />

      3. Save configuration
      <br />

      4. Reload this page
      <br />

      5. The content of the environment variable "mySecret" is "<?php echo htmlspecialchars(getenv("mySecret")); ?>"
    </div>


    <div class="container">
      <h1>Here is the PHP configuration informations got by phpinfo()</h1>

      <?php phpinfo(); ?>
    </div>
  </body>
</html>