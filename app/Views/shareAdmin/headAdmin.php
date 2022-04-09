<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$pageTitle?></title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<style>
    :root {
        --altura-linea-100: 0.50px;
        --color-linea-100: rgb(255, 246, 246);
    }

    #logo_empresa {
        width: 22%;
        margin-left: 10px;
    }

    .header {
        display: flex;
        justify-content: space-around;
        flex-direction: row;
        align-items: center;
    }

    .jumbotron {
        background-color: #0a4275;
        color: white;
    }

    .linea_100 {
        height: var(--altura-linea-100);
        background-color: var(--color-linea-100);
        width: 88%;
    }

    .table {
        margin: auto;
        width: 80%;

    }

    table th,
    tr {
        text-align: center;
    }

    #edit {
        background-color: green;
        color: white;
    }

    #delete {
        background-color: red;
        color: white;
    }

    .btnAdd {
        width: 80%;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        margin: auto;
        margin-top: 20px;
    }

    footer {
        margin-top: 50px;
    }

    .submenu {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #item {
        color: white;
    }


    /*******************************************************************************************************/
    /*Nueva Categoria formulario*/
    .form-control {
        margin-left: 20px;
        width: 60%;
    }

    #btnSave {
        margin-left: 20px;
        margin-top: 10px;
    }

    a{
        color: white;
    }
</style>