<?= $this->app->component('select-dropdown-autocomplete', array(
    'name' => 'taskId',
    'placeholder' => t('Display another task'),
    'ariaLabel' => t('Display another task'),
    'items' => $task_selector,
    'redirect' => array(
        'regex' => 'TASK_ID',
        'url' => $this->url->to('TaskViewController', 'show', array('task_id' => 'TASK_ID')),
    ),
    'onFocus' => array(
        'task.selector.open',
    )
)) ?>

