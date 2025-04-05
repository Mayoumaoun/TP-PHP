<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<?php 
require_once("section.php");
require_once("student.php");
require_once("users.php");
require_once("repository.php");
require_once("connexion.php");


$section = new Section();
$section->create(array("description" => "section 11", "designation" => "S111"));
$section->create(array("description" => "section 222", "designation" => "S222"));
$section->create(array("description" => "section 33", "designation" => "S333"));
$sections = $section->findAll();

$user = new User();
$user->create(array("username" => "user1", "password" => "pass1", "role" => "admin"));
$user->create(array("username" => "user2", "password" => "pass2", "role" => "user"));
$user->create(array("username" => "user3", "password" => "pass3", "role" => "user"));
$users = $user->findAll();
?>


<div class="container mt-5">
    
    <div class="card mb-4">
        <div class="card-header">
            <h2>Sections</h2>
        </div>
        <div class="card-body">
            <?php 
            if (!empty($sections)) {
                echo "<table class='table table-striped'>";
                echo "<thead class='thead-dark'><tr><th>ID</th><th>Description</th><th>Designation</th></tr></thead><tbody>";
                foreach ($sections as $section) {
                    echo "<tr>";
                    echo "<td>{$section->id}</td>";
                    echo "<td>{$section->description}</td>";
                    echo "<td>{$section->designation}</td>";
                    echo "</tr>";
                }
                echo "</tbody></table>";
            } else {
                echo "<div class='alert alert-warning'>Aucune section disponible.</div>";
            }
            ?>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h2>Users</h2>
        </div>
        <div class="card-body">
            <?php 
            if (!empty($users)) {
                echo "<table class='table table-striped'>";
                echo "<thead class='thead-dark'><tr><th>ID</th><th>Username</th><th>Password</th><th>Role</th></tr></thead><tbody>";
                foreach ($users as $user) {
                    echo "<tr>";
                    echo "<td>{$user->id}</td>";
                    echo "<td>{$user->username}</td>";
                    echo "<td>{$user->password}</td>";
                    echo "<td>{$user->role}</td>";
                    echo "</tr>";
                }
                echo "</tbody></table>";
            } else {
                echo "<div class='alert alert-warning'>Aucun utilisateur disponible.</div>";
            }
            ?>
        </div>
    </div>

</div>



