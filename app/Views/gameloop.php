<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>War BR</title>
    <link rel="stylesheet" href="<?php echo base_url('/Assets/css/dice.css') ?>">
</head>

<body>
    <div class="dice">
        <ol class="die-list even-roll" data-roll="1" id="die-1">
            <li class="die-item" data-side="1">
                <span class="dot"></span>
            </li>
            <li class="die-item" data-side="2">
                <span class="dot"></span>
                <span class="dot"></span>
            </li>
            <li class="die-item" data-side="3">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </li>
            <li class="die-item" data-side="4">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </li>
            <li class="die-item" data-side="5">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </li>
            <li class="die-item" data-side="6">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </li>
        </ol>
        <ol class="die-list odd-roll" data-roll="1" id="die-2">
            <li class="die-item" data-side="1">
                <span class="dot"></span>
            </li>
            <li class="die-item" data-side="2">
                <span class="dot"></span>
                <span class="dot"></span>
            </li>
            <li class="die-item" data-side="3">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </li>
            <li class="die-item" data-side="4">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </li>
            <li class="die-item" data-side="5">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </li>
            <li class="die-item" data-side="6">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </li>
        </ol>
    </div>
    <button type="button" id="roll-button">Role os dados</button>
</body>

<script src="<?php echo base_url('/Assets/js/dice.js') ?>"></script>
</html>