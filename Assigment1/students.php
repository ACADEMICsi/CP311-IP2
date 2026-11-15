
<?php

// Load the XML file using SimpleXML
$xml = simplexml_load_file("students.xml");

// Check whether the XML file was loaded successfully
if ($xml === false) {
    die("Error: Unable to load students.xml");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>College Student Information System</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 30px;
        }

        h1 {
            text-align: center;
            color: #1d3557;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
            vertical-align: top;
        }

        th {
            background-color: #1d3557;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        ul {
            margin: 0;
            padding-left: 20px;
        }
    </style>
</head>

<body>

    <h1>College Student Information System</h1>

    <table>

        <tr>
            <th>Registration Number</th>
            <th>Student Name</th>
            <th>Programme</th>
            <th>Registered Courses</th>
        </tr>

        <?php foreach ($xml->student as $student): ?>

            <tr>

                <td>
                    <?php echo htmlspecialchars((string)$student['regNo']); ?>
                </td>

                <td>
                    <?php
                        echo htmlspecialchars(
                            (string)$student->firstName . " " .
                            (string)$student->lastName
                        );
                    ?>
                </td>

                <td>
                    <?php echo htmlspecialchars((string)$student->programme); ?>
                </td>

                <td>
                    <ul>
                        <?php foreach ($student->courses->course as $course): ?>

                            <li>
                                <?php echo htmlspecialchars((string)$course); ?>
                            </li>

                        <?php endforeach; ?>
                    </ul>
                </td>

            </tr>

        <?php endforeach; ?>

    </table>

</body>
</html>
