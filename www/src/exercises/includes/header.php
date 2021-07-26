
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercises </title>
    <style>
        .hexagon {
            position: relative;
            width: 300px; 
            height: 173.21px;
            background-color: #64C7CC;
            margin: 86.60px 0;
            }

            .hexagon:before,
            .hexagon:after {
            content: "";
            position: absolute;
            width: 0;
            border-left: 150px solid transparent;
            border-right: 150px solid transparent;
            }

            .hexagon:before {
            bottom: 100%;
            border-bottom: 86.60px solid #64C7CC;
            }

            .hexagon:after {
            top: 100%;
            width: 0;
            border-top: 86.60px solid #64C7CC;

            }

        
        form {
            width: 50vw;
            background-color: #445166;
            color: white;
            padding: 20px;
            border-radius: 5px;
            font-size: 1.5rem;
            line-height: 1.75em;
            margin: 10px auto;
            
        }

        .game {
            padding: 20px;
        }
        
        label {
            padding-bottom: 100px;
            font-size: 18px;
            font-weight: bold;
        }

        input {
            width: 75%;
            line-height: 1.75em;
        }

        button {
            margin: 50px 10px 100px 10px;
            padding: 10px;
            width: 300px;
            height: 90px;
            border-radius: 10px;
            color: #14535e;
            background-color: #63b1bf;
            font-size: 24px;
        }

        .storytime {
            line-height: 2rem;
            width: 75vw;
            font-family: monospace;
            font-size: 1.75rem;
            margin-top: 50px;
        }

        .footer {
            width: 100vw;
            position: fixed;
            bottom: 0;
            margin-top: 200px;
            
            clear: all;
            margin-left: auto;
        }

    </style>
</head>
<body>
