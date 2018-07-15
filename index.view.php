<!DOCTYPE html>
<html>
<head>

     <meta charset="UTF-8">
        <title>PHP practitioner</title>

        <style>
            header {
                background: #e3e3e3;
                padding: 2em;
                text-align: center;
            }
        
        </style>
</head>
<body>
    <header>
        <h1>
            <?php echo $greeting; ?>
        </h1>
    
    </header>

    <ul> Names and Animals in the Backyard
       
        <?php foreach ($names as $name) : ?>

            <li><?php echo $name; ?></li>

        <?php endforeach; ?>   
        
        <?php 
            foreach ($names as $name) {
                echo "<li>on the list {$name}</li>";
            }
        ?>
        
        <?php foreach ($animals as $animal) : ?>

            <li><?php echo $animal; ?></li>

        <?php endforeach; ?>  
    </ul>

    <ul>
        <?php foreach ($person as $personalTrait => $trait) : ?>
            <li><?php echo "<em>$personalTrait: </em>$trait"; ?></li>
        <?php endforeach; ?>
    
    </ul>

    <h4>Chores for the Day</h4>
    
    <ul>
        <li>
            <strong>Name: </strong> <?= $chores['title']; ?>
        </li>

        <li>
            <strong>Completed: </strong> <?= $chores['isComplete'] ? 'Complete' : 'not Completed' ; ?>
        </li>

        <li>
            <strong>Completed gets a checkmark</strong>
            <?php 
            
                if($chores['isComplete']) {
                    echo '&#9989;';
                } else {
                    echo 'no checkmark for you';
                }; 
            
            ?>

            
        </li>

        <li>
            <strong>Completed gets a checkmark</strong>

            <?php if($chores['isComplete']) :  ?>
                <span class="icon">&#9989</span>
            <?php endif; ?>

        </li>

        <li>
            <strong>Completed gets a checkmark</strong>

            <?php if($chores['isComplete']) :  ?>

                <span class="icon">&#9989</span>

            <?php else : ?>

                <span class="icon">incomplete</span>

            <?php endif; ?>
            
        </li>
    </ul>

    <ul>

        <?php foreach ($tasks as $task) : ?>

            <li>
                <?php if ($task->completed) : ?>
                    <strike><?= $task->description; ?> </strike>
                <?php else: ?> 
                    <?= $task->description; ?> 
                <?php endif; ?> 
            </li>

        <?php endforeach; ?>
    
    </ul>
    

</body>


</html>