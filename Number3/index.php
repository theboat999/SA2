<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <?php include('header.html'); ?>

    <?php
    // Default section to include if no parameter is set
    $section = isset($_GET['section']) ? $_GET['section'] : 'default';

    // Switch case to include the appropriate file based on the section parameter
    switch ($section) {
        case 'personal_information':
            include('personal_info.html');
            break;
        case 'career_objective':
            include('career_obj.html');
            break;
        case 'educational_attainment':
            include('educ_attain.html');
            break;
        case 'affiliation':
            include('affill.html');
            break;
        case 'work_experience':
            include('work_exp.html');
            break;
        default:
            echo '<div class="content"><h1>Tomaquin Resume</h1></div>';
            break;
    }
    ?>

</body>
</html>
