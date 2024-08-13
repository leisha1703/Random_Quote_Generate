<?php
// Fetch a random quote from an API
$quote_json = file_get_contents("https://api.quotable.io/random");
$quote_array = json_decode($quote_json, true);
$random_quote = $quote_array['content'] . " - " . $quote_array['author'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Quote Generator</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #f5af19, #f12711);
            color: #fff;
        }
        .quote-container {
            text-align: center;
            background-color: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0px 20px 40px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
        }
        .quote {
            font-size: 28px;
            margin-bottom: 20px;
            line-height: 1.5;
        }
        .quote::before, .quote::after {
            content: '"';
            font-size: 40px;
            vertical-align: middle;
            color: #ffd700;
        }
        .author {
            font-size: 20px;
            margin-top: 10px;
            font-weight: bold;
            color: #ffd700;
        }
        .btn {
            display: inline-block;
            margin-top: 30px;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            color: #f12711;
            background-color: #fff;
            border: none;
            border-radius: 30px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .btn:hover {
            background-color: #ffd700;
            color: #fff;
        }
    </style>
</head>
<body>

<div class="quote-container">
    <div class="quote">
        <?php echo $random_quote; ?>
    </div>
    <button class="btn" onclick="window.location.reload();">Show Another Quote</button>
</div>

</body>
</html>
