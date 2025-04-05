<?php
include("classes/student.php");
$std=new Student();
$listeStudents=$std->findAll();
include("header.php");
$role=$_SESSION["user"]["role"];
?>
    <div>
        <p>Liste des étudiants</p>
        <?php
        if($role== "admin"){
                        echo "<div class='c1'>
                        <div class='filter'>
                            <input type='text' name='textFilter' id='textFilter'>
                            <button>Filtrer</button>
                        </div>
                        <button><a href='utils/add.php'>Add</a></button>
                    </div>";
                    }
        ?>
        
        <div class="export"></div>
        
        <table class="table">
            <thead>
                <tr><td>id</td><td>image</td><td>name</td><td>birthday</td><td>section</td><td>Actions</td></tr>
            </thead>
            <tbody>
                <?php 
                foreach($listeStudents as $stud){
                    echo "<tr>";
                    foreach($stud as $key => $val){
                        echo $key=="image"?"<td><img src='".$val."' alt='profile' height=50 width=50></td>":"<td>".$val."</td>";
                    }
                    echo "<td><a href='utils/read.php?id=".$stud->id."&type=student'>Read</a> ";
                    if($role== "admin"){
                        echo "<a href='utils/delete.php?id=".$stud->id."&type=student'>Del</a> <a href='utils/edit?id=".$stud->id."&type=student'>Edit</a>";
                    }
                    echo "</td></tr>";
                }
                ?>
            </tbody>
            
        </table>
    </div>
<?php

include("footer.php");
?>