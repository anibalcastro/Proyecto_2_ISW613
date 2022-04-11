<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
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
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .linea_100 {
        margin-bottom: 5px;
        height: var(--altura-linea-100);
        background-color: var(--color-linea-100);
        width: 34%;
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

    .form-control {
        margin-left: 20px;
        margin-top: 20px;
        width: 40%;
    }

    #category {

        margin-left: 20px;
        margin-top: 20px;
        width: 30%;
        height: 38px;
        padding-top: 6px;
        padding-bottom: 6px;
        padding-left: 12px;
        padding-right: 12px;
    }

    #btnSave {
        margin-left: 20px;
        margin-top: 10px;
    }

    .contNoticias {
        height: AUTO;
        width: 80%;
        display: FLEX;
        flex-direction: COLUMN;
        place-content: FLEX-START;
        margin-left: AUTO;
        margin-right: AUTO;
        margin-bottom: 20px;
        box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.2);
        padding: 15px 15px 15px 15px;
    }


    .tituloNoticia {
        color: black;
        width: 85%;
    }

    .descripcionNoticia {
        color: black;
        text-align: justify;
    }
</style>