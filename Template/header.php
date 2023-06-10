<?php $_title = $this->render('header/title', array(
    'project' => isset($project) ? $project : null,
    'task' => isset($task) ? $task : null,
    'description' => isset($description) ? $description : null,
    'title' => $title,
)) ?>

<?php $_top_right_corner = implode('&nbsp;', array(
        $this->render('header/user_notifications'),
        $this->render('header/creation_dropdown'),
        $this->render('header/user_dropdown')
    )) ?>

<header>
    <div class="title-container">
        <?= $_title ?>
    </div>

    <!-- TASK SELECTOR HERE -->

    <?php
        $task_selector = $this->taskSelectorHelper->get10LastTasks();

    ?>

    <div class="board-selector-container">
        <?php if (! empty($task_selector)): ?>
            <?= $this->render('TaskSelector:header/task_selector', array('task_selector' => $task_selector)) ?>
        <?php endif ?>
    </div>

    <!-- TASK SELECTOR TILL HERE -->

    <div class="board-selector-container">
        <?php if (! empty($board_selector)): ?>
            <?= $this->render('header/board_selector', array('board_selector' => $board_selector)) ?>
        <?php endif ?>
    </div>
    <div class="menus-container">
        <?= $_top_right_corner ?>
    </div>
</header>
