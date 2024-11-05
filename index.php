<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
body {
    font-family: "Roboto", Arial, sans-serif;
    font-weight: 300; 
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #f9f9f9;
}

.contact-form-container {
    width: 300px;
    padding: 20px;
    background-color: #ffffff;
    border: 1px solid #ddd;
    border-radius: 4px;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 18px;
    font-weight: 300; 
    color: #333;
}

label {
    font-weight: 300; 
    font-size: 14px;
    color: #333;
    margin-top: 10px;
    display: block;
}

input, textarea {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
    font-weight: 300;  
}

button {
    width: 100%;
    padding: 10px;
    background-color: #007BFF;
    border: none;
    color: white;
    border-radius: 4px;
    cursor: pointer;
    font-size: 14px;
    font-weight: 300; 
    margin-top: 10px;
}

button:hover {
    background-color: #0069d9;
}
</style>
<body>
    <div class="container">
        <form action="insert.php" method="post">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" value="" required><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" value="" required><br>
            <label for="message">Message:</label><br>
            <textarea id="message" name="message" value="" required></textarea><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>