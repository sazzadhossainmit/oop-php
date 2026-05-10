<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            background-color: #f4f6f8;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            background-color: #2c3e50;
            color: white;
            padding: 1rem;
            text-align: center;
            font-size: 1.8rem;
            font-weight: 600;
        }
        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding: 2rem;
        }
        .content-box {
            background: white;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 1000px;
            min-height: 200px;
        }
        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 0.8rem;
            font-size: 0.9rem;
        }
        /* table {
            width: 80%;
            margin: 30px auto;
            border-collapse: collapse;
            text-align: center;
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 0px;
            overflow: hidden;
        }

        th, td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            vertical-align: middle;
            font-family: 'Montserrat', sans-serif;
        }

        th {
            background-color: #2C3E50;
            color: white;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
            transition: background 0.3s ease;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 12px 15px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            font-family: 'Montserrat', sans-serif;
            box-sizing: border-box;
            transition: 0.3s ease;
        }

        input:focus,
        textarea:focus {
            border-color: #2C3E50;
            outline: none;
            box-shadow: 0 0 6px rgba(9, 51, 114, 0.5);
        }

        input[type="submit"],input[type="reset"],
        button {
            background-color: #2C3E50;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s ease;
        }

        input[type="submit"]:hover,input[type="reset"]:hover,
        button:hover {
            background-color: #34495eff;
        }

        input::placeholder,
        textarea::placeholder {
            color: #888;              
            font-style: italic;       
            font-size: 14px;
        } */

    </style>

    <style>
  .headeroption {background: #3399ff url("img/php.png") no-repeat scroll 56px 18px;height: 80px;overflow: hidden;padding-left: 160px;}
.headeroption h2 {color: #000;font-size: 30px;padding-top: 5px;text-shadow: 0 1px 1px #fff;}
.content{background: #f2f2ff;border: 6px solid #3399ff;font-size: 16px;line-height: 22px;margin-bottom: 3px;margin-top: 3px;min-height: 400px;overflow: hidden;padding: 10px;}
.subject {border-bottom: 1px solid #3399ff;font-size: 20px;margin-bottom: 10px;padding-bottom: 10px;}
.subject p{margin:0;}

.insert{color:#06960E;font-weight:bold;}
.delete{color:#DE5A24;font-weight:bold;}

.mainleft{border-right: 1px dotted #999;float: left;margin-right: 16px;width: 43%;}
.mainright{float:right;width:50%;}

.tblone{width:100%;border:1px solid #fff;}
.tblone td{padding:5px 10px;text-align:center;}

table.tblone tr:nth-child(2n+1){background:#fff;height:30px;}
table.tblone tr:nth-child(2n){background:#fdf0f1 none repeat scroll 0 0;height:30px;}
input[type="text"] {border:1px solid #ddd;margin-bottom:5px;padding:5px;width:228px;font-size:16px}
input[type="submit"]{cursor: pointer}
</style>

</head>
<body>
    <header>OOP PHP</header>
    <main>
    <div class="content-box">