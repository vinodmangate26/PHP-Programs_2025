<html>
<body>

    <form method="POST" action="">
        <h3>Form with List Box, Combo Box, and Hidden Field</h3>

        <input type="hidden" name="hidden_field" value="hidden_value">
		
        Select Country: 
        <select name="country">
            <option value="USA">USA</option>
            <option value="India">India</option>
            <option value="UK">UK</option>
            <option value="Canada">Canada</option>
        </select><br><br>

        Select Hobbies: 
        <select name="hobbies[]" multiple size="4">
            <option value="Reading">Reading</option>
            <option value="Traveling">Traveling</option>
            <option value="Gaming">Gaming</option>
            <option value="Cooking">Cooking</option>
        </select><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) 
	{
        $hiddenFieldValue = $_POST['hidden_field'];
        $selectedCountry = $_POST['country'];
        $selectedHobbies = isset($_POST['hobbies']) ? $_POST['hobbies'] : [];

        echo "<h3>Form Submission Successful!</h3>";
        echo "Hidden Field Value: $hiddenFieldValue<br>";
        echo "Selected Country: $selectedCountry<br>";

        if (!empty($selectedHobbies)) 
		{
            echo "Selected Hobbies: " . implode(", ", $selectedHobbies) . "<br>";
        } 
		else 
		{
            echo "No hobbies selected.<br>";
        }
    }
    ?>
</body>
</html>
