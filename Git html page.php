
<!DOCTYPE html> 
<html> 
      
<head> 
    <title> 
        BUTTONS
    </title> 
</head> 
  
<body style="text-align:center;"> 
      
    <h1 style="color:green;"> 
        GIT test page
    </h1> 
      
    <h4> 
        PRESS THE BUTTONS!!!!!!
    </h4> 
      
    <?php
        if(array_key_exists('button1', $_POST)) { 
            button1(); 
        } 
        else if(array_key_exists('button2', $_POST)) { 
            button2(); 
        } 
        else if(array_key_exists('button3', $_POST)) { 
            button2(); 
        } 

        function button1() { 
            echo "This is Button1 that is selected"; 
        } 
        function button2() { 
            echo "This is Button2 that is selected"; 
        } 
        function button3() { 
            echo "This is Button3 that is selected"; 
        } 
    ?> 
  
    <form method="post"> 
        <input type="submit" name="button1"
                class="button" value="Button1" /> 
          
        <input type="submit" name="button2"
                class="button" value="Button2" />
        <input type="submit" name="button3"
                class="button" value="button3" />
    </form> 
</body> 
  
</html> 