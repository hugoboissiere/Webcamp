<?php
include("php/includes/database.php");
    
// Titre de la page
$headTitle = "Admin - Pays";
$pageTitle = "Pays";
    
// CSS de cette page
$addCSS = array("");
    
// JS de cette page
$addJS = array("js/form/countries.js","js/rowSelection/countries.js");
    
    
// PHP (queries) de cette page
$addPHP = array("php/queries/select.php");
    
include("php/includes/head.php");
include("php/includes/navigator.php");
?>



<main>

    <div id="table">
        <table class="tablesaw" data-tablesaw-sortable data-tablesaw-mode="stack">
            <thead>
                <tr>
                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist" style="background-color:#232b2d">Pays</th>
                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col style="background-color:#232b2d" data-tablesaw-priority="1">Abbrévation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($result = $countriesCompleteList->fetch()) {
                    ?>
                    <tr data-id="<?php echo $result->id; ?>">
                    <td class="title"><?php echo $result->name; ?></td>
                    <td><?php echo $result->abbreviation; ?></td>
                </tr>
                    <?php
                }
                $countriesCompleteList->closeCursor();
                ?>
                
            </tbody>
        </table>
    </div>


    <p>
                        <?php while ($result = $countMediasMovies->fetch()) {
                    echo $result->count;
                } $countMediasMovies->closeCursor(); ?>
            </p>
            <p>test</p>
</main>





<script src="js/layoutNavigator.js"></script> <!-- Resource jQuery -->
</body>
</html>