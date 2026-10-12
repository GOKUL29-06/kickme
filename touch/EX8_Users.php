<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP User Directory</title>
    <style>
        * {
            box-sizing: border-box
        }

        body {
            margin: 0;
            padding: 40px 18px;
            background: #f2f5fb;
            color: #18233f;
            font-family: Inter, Segoe UI, Arial, sans-serif
        }

        .wrap {
            max-width: 900px;
            margin: auto
        }

        .head {
            background: linear-gradient(120deg, #18233f, #4655a0);
            color: white;
            padding: 30px;
            border-radius: 20px 20px 0 0
        }

        .head small {
            color: #bfcaff;
            letter-spacing: .16em;
            font-weight: bold
        }

        .head h1 {
            margin: 10px 0 5px
        }

        .head p {
            margin: 0;
            color: #d8def5
        }

        .tablebox {
            background: white;
            padding: 22px;
            border-radius: 0 0 20px 20px;
            box-shadow: 0 20px 50px #18233f12;
            overflow-x: auto
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 450px
        }

        th,
        td {
            text-align: left;
            padding: 15px;
            border-bottom: 1px solid #e7eaf2
        }

        th {
            background: #f2f3ff;
            color: #4d50b0;
            text-transform: uppercase;
            letter-spacing: .06em;
            font-size: .78rem
        }

        tbody tr:hover {
            background: #f8f9ff
        }

        .id {
            display: inline-block;
            background: #e9fff5;
            color: #08764f;
            border-radius: 7px;
            padding: 5px 9px;
            font-weight: bold
        }
    </style>
</head>

<body>
    <main class="wrap">
        <header class="head"><small>PHP · DATA DISPLAY</small>
            <h1>User Directory</h1>
            <p>Sample user records displayed from a PHP array.</p>
        </header>
        <section class="tablebox">
            <?php
            $users = [
                ["id" => 1, "name" => "John Doe", "email" => "john@example.com"],
                ["id" => 2, "name" => "Jane Doe", "email" => "jane@example.com"],
                ["id" => 3, "name" => "Alice Smith", "email" => "alice@example.com"]
            ];
            function fetchUsers($users)
            {
                if (empty($users)) {
                    echo "<p>No users found.</p>";
                    return;
                }
                echo "<table><thead><tr><th>ID</th><th>Name</th><th>Email</th></tr></thead><tbody>";
                foreach ($users as $user) {
                    $id = htmlspecialchars((string)$user["id"]);
                    $name = htmlspecialchars($user["name"]);
                    $email = htmlspecialchars($user["email"]);
                    echo "<tr><td><span class='id'>$id</span></td><td><strong>$name</strong></td><td>$email</td></tr>";
                }
                echo "</tbody></table>";
            }
            fetchUsers($users);
            ?></section>
    </main>
</body>

</html>