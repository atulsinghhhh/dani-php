<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">

    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6 text-center">Simple Calculator</h1>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="space-y-4">
            <input 
                type="number" 
                name="num01" 
                placeholder="Enter the first number" 
                required 
                class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400"
            >

            <select 
                name="operator" 
                class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400"
            >
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
            </select>

            <input 
                type="number" 
                name="num02" 
                placeholder="Enter the second number" 
                required 
                class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400"
            >

            <button 
                type="submit" 
                class="w-full bg-blue-500 text-white p-3 rounded hover:bg-blue-600 transition"
            >
                Calculate
            </button>
        </form>

    <?php 
        //  grab data from inputs
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $num01=filter_input(INPUT_POST,"num01",FILTER_SANITIZE_NUMBER_FLOAT);
            $num02=filter_input(INPUT_POST,"num02",FILTER_SANITIZE_NUMBER_FLOAT);
            $operator=htmlspecialchars($_POST['operator']);

            // Error handlers
            $errors= false;

            if(empty($num01) || empty($num02) || empty($operator)){
                echo "Fills all fields";
                $errors=true;
            }

            if(!is_numeric($num01) || !is_numeric($num02)){
                echo "Only number are required";
                $errors=true;
            }

            // calculate the numbers if no error
            if(!$errors){
                $val=0;
                switch($operator){
                    case "add":
                        $val=$num01+$num02;
                        break;
                    case "subtract":
                        $val=$num01-$num02;
                        break;
                    case "multiply":
                        $val=$num01*$num02;
                        break;
                    case "divide":
                        $val=$num01/$num02;
                        break;
                    default:
                    echo "Something went wrong";
                }

                echo "Result= ". $val;
            }
        }
    
    ?>
</body>
</html>