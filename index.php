<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello world</title>

    <style>
        html,
        body {
            height: 100%;
            width: 100%;
            margin: 0;
            background-color: #121212;
        }

        body {
            display: flex;
        }

        form {
            margin: auto;
            /* nice thing of auto margin if display:flex; it center both horizontal and vertical :) */
            display: flex;
            flex-direction: column;
            width: 25%;
        }

        label {
            color: #faf1e6;
        }

        input {
            background-color: #919191;
            padding: 8px;
            border-radius: 8px;
        }

        ::placeholder {
            /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: #f5dab8;
            /* opacity: 1; */
            /* Firefox */
        }

        input,
        select,
        textarea {
            color: #00544f;
        }

        textarea:focus,
        input:focus {
            color: #bdc9bf;
        }
    </style>

</head>

<body>
    <form action="handleForm/welcome.php" method="post">
        <label for="name">name</label>
        <input type="text" name="name" id="name" placeholder="your name...">
        <label for="email">email</label>
        <input type="email" name="email" id="email" placeholder="your email...">
        <input type="submit">
    </form>
</body>

</html>