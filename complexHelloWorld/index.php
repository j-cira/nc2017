<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta name="viewport"  content="width=device-width, initial-scale=1.0" charset="UTF-8">
        <title>Hello, World!</title>
        <style>body {
    background-image: url("World1.jpg");
    background-color: black;
    color: white;
    font-family: "Times New Roman", serif;
}

@media only screen and (orientation: landscape) {
    body {
        background-image: url("World2.jpg")
    }
}

p {
    border: 1px solid whitesmoke;
}
        </style>
    </head>
    <body>
        <p>Hello, World!</p>
        <p>This web page has a different background image for when its width is 
           greater than height, and when its height is greater than its width!</p>
    </body>
</html>