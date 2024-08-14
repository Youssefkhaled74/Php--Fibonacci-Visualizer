<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Sequence Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .container {
            max-width: 600px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center my-4">Fibonacci Sequence Generator</h1>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="termsInput" class="form-label">Enter Number of Terms</label>
                <input type="number" class="form-control" id="termsInput" name="termsInput" min="1" required>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary btn-lg">Generate Sequence</button>
            </div>
        </form>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $terms = intval($_POST['termsInput']);
            
            function fibonacci($n) {
                if ($n <= 1) {
                    return $n;
                }
                return fibonacci($n - 1) + fibonacci($n - 2);
            }

            if ($terms > 0) {
                echo "<div class='alert alert-success mt-4'>Fibonacci Sequence: ";
                for ($i = 0; $i < $terms; $i++) {
                    echo fibonacci($i) . " ";
                }
                echo "</div>";
            }
        }
        ?>
    </div>
</body>
</html>
