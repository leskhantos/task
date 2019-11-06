<html>
<head>
    <title>test</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="ajax.js"></script>

</head>
<body>
<div class="box">
<form method="post">
<div class="field">
    <label class="label">Name</label>
    <div class="control">
        <input class="input" id="name" type="text" placeholder="name">
    </div>
</div>

<div class="field">
    <label class="label">Body</label>
    <div class="control">
        <input class="input" id="body" type="text" placeholder="body">
    </div>
</div>
    <input type="submit" class="button is-primary" id="btn" value="Add">
</form>
</div>
</body>
</html>
<?php
require 'connect.php';
$conn = connectionToDB();
$sql = "SELECT name,body,dtime FROM guest_book order by id desc limit 5";
$result = mysqli_query($conn, $sql);
echo "<br>";
echo "<table class='table is-striped' style='width: 100%'><thead><tr><th>Name</th><th>Body</th><th>Time</th></tr></thead>";
while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
    echo "<tr>";
    foreach ($row as $field => $value) { // I you want you can right this line like this: foreach($row as $value) {
        echo "<td>" . $value . "</td>"; // I just did not use "htmlspecialchars()" function.
    }
    echo "</tr>";
}
echo "</table>";