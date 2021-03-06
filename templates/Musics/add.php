<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Music $music
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Musics'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="musics form content">
            <?= $this->Form->create($music) ?>
            <fieldset>
                <legend><?= __('Add Music') ?></legend>
                <?php
                    echo $this->Form->control('mid');
                    echo $this->Form->control('title');
                    echo $this->Form->control('version');
                    echo $this->Form->control('difficult');
                    echo $this->Form->control('notes');
                    echo $this->Form->control('created_ar', ['empty' => true]);
                    echo $this->Form->control('modified_at');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
