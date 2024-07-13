<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        label {
            font-size: 1.2rem;
            margin-bottom: 10px;
            display: block;
        }
        input {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <label for="marks">Enter Marks</label>
        <input type="number" id="marks" name="marks" required>
        <button type="submit">Check</button>
        <div class="result">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $marks = $_POST['marks'];
                if ($marks > 100 || $marks < 0) {
                    echo "<span style='color:red;'>Please enter valid marks between 0 and 100.</span>";
                } elseif ($marks >= 75) {
                    echo "Grade A";
                } elseif ($marks >= 50) {
                    echo "Grade B";
                } elseif ($marks >= 30) {
                    echo "Grade C";
                } else {
                    echo "Grade D";
                }
            }
            ?>
        </div>
    </form>
</body>
</html>
