<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<style>
    #draggable {
        width: 150px;
        height: 150px;
        padding: 0.5em;
        position: fixed;
        display: block;
        background-color: #fff893;
    }
    #hide {
        display: none;
    }
</style>
<button id="button" class="glyphicon glyphicon-eye-open"></button>
<?= $this->Form->create($post) ?>
<!--<div id="draggable" class="ui-widget-content" style="padding: 1px;">-->
<?php
echo $this->Form->input('description', ['label' => '',
    'id' => 'draggable',
    'class' => 'ui-widget-content'
]); ?>
<?= $this->Form->button(__('Submit'), ['style' => 'display:none;']); ?>
<!--</div>-->
<?= $this->Form->end() ?>


<script>
    $(function () {
        $("#draggable").draggable();
    });
    $(function () {
        $("#draggable").resizable();
    });

    $( "#button" ).click(function() {
        $(this).toggleClass("glyphicon-eye-close");
        $('.ui-wrapper').toggleClass("hide");
    });

    $(function () {
        $("#button").on("click", function () {
            $("#draggable").animate({
                height: 'toggle'
            });
        });
    });
</script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
