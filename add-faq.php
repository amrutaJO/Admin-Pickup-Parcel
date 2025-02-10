<?php require_once __DIR__ . "/header.php" ?>
<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-header-title"><?= translate('add_faq') ?></h1>
            </div>
            <div class="col-auto">
                <a class="btn btn-sm btn-primary" href="view-faq.php">
                    <?= translate('view_faqs') ?>
                </a>
            </div>
        </div>
    </div>

    <!-- Add Main Topic & Sub Topic -->
    <div class="row mb-3">
        <div class="col-12 col-md-6">
            <!-- Main Topic label is kept in English -->
            <label for="mainTopic" class="form-label"><?= translate('main_topic') ?></label>
            <input type="text" class="form-control form-control-sm" id="mainTopic" placeholder="<?= translate('enter_main_topic') ?>">
        </div>
        <div class="col-12 col-md-6">
            <label for="subTopic" class="form-label"><?= translate('sub_topic') ?></label>
            <input type="text" class="form-control form-control-sm" id="subTopic" placeholder="<?= translate('enter_sub_topic') ?>">
        </div>
        <div class="col-12 mt-2 d-flex justify-content-end">
            <button class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> <?= translate('save') ?></button>
        </div>
    </div>

    <!-- Add Question & Answer -->
    <div class="row mb-3">
        <div class="col-12 col-md-6">
            <label for="selectMainTopicQA" class="form-label"><?= translate('select_main_topic') ?></label>
            <select class="form-control form-control-sm" id="selectMainTopicQA">
                <option value=""><?= translate('choose_main_topic') ?></option>
            </select>
        </div>
        <div class="col-12 col-md-6">
            <label for="selectSubTopic" class="form-label"><?= translate('select_sub_topic') ?></label>
            <select class="form-control form-control-sm" id="selectSubTopic">
                <option value=""><?= translate('choose_sub_topic') ?></option>
            </select>
        </div>
        <div class="col-12 mt-2">
            <label for="question" class="form-label"><?= translate('question') ?></label>
            <input type="text" class="form-control form-control-sm" id="question" placeholder="<?= translate('enter_question') ?>">
        </div>
        <div class="col-12 mt-2">
            <label for="answer" class="form-label"><?= translate('answer') ?></label>
            <textarea class="form-control form-control-sm" id="answer" rows="3" placeholder="<?= translate('enter_answer') ?>"></textarea>
        </div>
        <div class="col-12 mt-2 d-flex justify-content-end">
            <button class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> <?= translate('save') ?></button>
            <button class="btn btn-secondary btn-sm ms-2"><?= translate('reset') ?></button>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/footer.php' ?>
