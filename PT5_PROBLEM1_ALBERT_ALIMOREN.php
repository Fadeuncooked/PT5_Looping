<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reciprocal Sum Calculator</title>
    <style>
        :root {
            --primary: #4361ee;
            --secondary: #3f37c9;
            --accent: #4895ef;
            --light: #f8f9fa;
            --dark: #212529;
            --success: #4cc9f0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            color: var(--dark);
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
            max-width: 600px;
            text-align: center;
        }

        h1 {
            color: var(--primary);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .subtitle {
            color: var(--secondary);
            margin-bottom: 30px;
            font-size: 1.1rem;
        }

        .input-group {
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--secondary);
        }

        input {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        input:focus {
            outline: none;
            border-color: var(--accent);
        }

        button {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            transition: background-color 0.3s, transform 0.2s;
            margin: 10px 5px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        button:hover {
            background-color: var(--secondary);
            transform: translateY(-1px);
        }

        button:active {
            transform: translateY(0);
        }

        .result-container {
            margin-top: 30px;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
            text-align: left;
        }

        .result-title {
            color: var(--primary);
            margin-bottom: 15px;
            font-weight: 600;
            border-bottom: 2px solid var(--accent);
            padding-bottom: 5px;
        }

        .result {
            font-family: monospace;
            background-color: #e9ecef;
            padding: 15px;
            border-radius: 5px;
            overflow-x: auto;
        }

        .method-comparison {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            gap: 20px;
        }

        .method {
            flex: 1;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 8px;
        }

        .animation {
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 600px) {
            .method-comparison {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="container animation">
        <h1>Reciprocal Sum Calculator</h1>
        <p class="subtitle">Compute the sum of 1/1 + 1/2 + ... + 1/N using different loop structures</p>
        
        <div class="input-group">
            <label for="limit">Enter the value of N:</label>
            <input type="number" id="limit" min="1" placeholder="Enter a positive integer">
        </div>
        
        <div>
            <button id="calculateWhile">Calculate with While Loop</button>
            <button id="calculateDoWhile">Calculate with Do-While Loop</button>
        </div>
        
        <div id="resultSection" class="result-container" style="display: none;">
            <h3 class="result-title">Results</h3>
            <div class="method-comparison">
                <div class="method">
                    <h4>While Loop Result</h4>
                    <div id="whileResult" class="result">Result will appear here</div>
                </div>
                <div class="method">
                    <h4>Do-While Loop Result</h4>
                    <div id="doWhileResult" class="result">Result will appear here</div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('calculateWhile').addEventListener('click', calculateWithWhile);
        document.getElementById('calculateDoWhile').addEventListener('click', calculateWithDoWhile);

        function calculateWithWhile() {
            const limit = parseInt(document.getElementById('limit').value);
            if (isNaN(limit) || limit < 1) {
                alert('Please enter a valid positive integer');
                return;
            }

            let sum = 0.0;
            let i = 1;
            
            // Traditional while loop
            while (i <= limit) {
                sum += 1.0 / i;
                i++;
            }

            document.getElementById('whileResult').textContent = `Sum is: ${sum.toFixed(12)}`;
            document.getElementById('doWhileResult').textContent = 'Click the Do-While button to see';
            document.getElementById('resultSection').style.display = 'block';
        }

        function calculateWithDoWhile() {
            const limit = parseInt(document.getElementById('limit').value);
            if (isNaN(limit) || limit < 1) {
                alert('Please enter a valid positive integer');
                return;
            }

            let sum = 0.0;
            let i = 1;
            
            // Do-While loop simulation
            do {
                sum += 1.0 / i;
                i++;
            } while (i <= limit);

            document.getElementById('doWhileResult').textContent = `Sum is: ${sum.toFixed(12)}`;
            if (document.getElementById('whileResult').textContent === 'Result will appear here') {
                document.getElementById('whileResult').textContent = 'Click the While button to see';
            }
            document.getElementById('resultSection').style.display = 'block';
        }
    </script>
</body>
</html>
