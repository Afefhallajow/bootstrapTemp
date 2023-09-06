<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<div class="js-repeater" data-repeater-class="repeater__item">
    <ul class="js-repeater__list">
        <li class="js-repeater__item">
            <!-- content to be repeated here -->
        </li>
    </ul>

    <button class="js-repeater__add" type="button">Add More</button>
</div>
<form method="post" action="test/11" >
    @csrf
    <div class="repeater">
        <!--
            The value given to the data-repeater-list attribute will be used as the
            base of rewritten name attributes.  In this example, the first
            data-repeater-item's name attribute would become group-a[0][text-input],
            and the second data-repeater-item would become group-a[1][text-input]
        -->
        <div data-repeater-list="category">
            <div data-repeater-item>
                <input type="hidden" name="id" id="cat-id"/>
                <input type="text" name="cat-name" />
                <input type="text" name="cat-sec" />
                <input data-repeater-delete type="button" value="Delete"/>
            </div>
        </div>


        <input data-repeater-create type="button" value="Add"/>
<input>

    </div>







    <form class="repeater">
        <div data-repeater-list="outer-list">
            <div data-repeater-item style="border: 1px solid red">
                Repeater <input type="text" name="text-input" value="A"/>
                <input data-repeater-delete type="button" value="Delete"/>

                <!-- innner repeater -->
                <div class="inner-repeater">
                    <div data-repeater-list="inner-list">
                        <div data-repeater-item style="background: #f1f1f1">
                            Inner Repeater <input type="text" name="inner-text-input" value="B"/>
                            <input data-repeater-delete type="button" value="Delete"/>

                            <!-- innner repeater -->
                            <div class="deep-inner-repeater">
                                <div data-repeater-list="deep-inner-list">
                                    <div data-repeater-item style="background: #f9f9f9">
                                        Deep Repeater
                                        <input type="text" name="inner-text-input" value="B"/>
                                        <input data-repeater-delete type="button" value="Delete"/>
                                    </div>
                                </div>
                                <input data-repeater-create type="button" value="Add Deep Repeater"/>
                            </div>

                        </div>
                    </div>
                    <input data-repeater-create type="button" value="Add Inner Repeater"/>
                </div>

            </div>
        </div>
        <input data-repeater-create type="button" value="Add Repeater"/>
    </form>









    <div class="repeater1">
        <!--
            The value given to the data-repeater-list attribute will be used as the
            base of rewritten name attributes.  In this example, the first
            data-repeater-item's name attribute would become group-a[0][text-input],
            and the second data-repeater-item would become group-a[1][text-input]
                    -->
        <div data-repeater-list="category1">
            <div data-repeater-item>
                <input type="hidden" name="id" id="cat-id"/>
                <input type="text" name="cat-name" />
                <input type="text" name="cat-sec" />
                <input data-repeater-delete type="button" value="Delete"/>
            </div>
        </div>

        <input data-repeater-create type="button" value="Add"/>


    </div>


    <button type="submit" class="btn btn-success">afef</button>
</form>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.js"></script>
<script>
    $(function () {
        'use strict';

        // form repeater jquery
        $('.repeater, .repeater-default').repeater({
            show: function () {
                $(this).slideDown();
                // Feather Icons
            },
            hide: function (deleteElement) {
                if (confirm('Are you sure you want to delete this element?')) {
                    $(this).slideUp(deleteElement);
                }
            }
        });
        $('.repeater1, .repeater-default').repeater({
            show: function () {
                $(this).slideDown();
                // Feather Icons
            },
            hide: function (deleteElement) {
                if (confirm('Are you sure you want to delete this element?')) {
                    $(this).slideUp(deleteElement);
                }
            }
        });

    });

</script>
<script>


</body>
</html>
