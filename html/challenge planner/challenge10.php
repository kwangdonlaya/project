<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="app.css">
</head>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <div class="img">
            <img src="/Public/challenge planner/pic/10.png">
        </div>

        <title> Challenge 30 Days : Check </title>

        <h1>Challenge 30 Days : Check</h1>

        <div class="wrapper">
            <div class="container">

                <label class="option_item">
                    <div class="option_inner number">
                        <div class="tickmark"></div>
                        <div class="icon2">
                            <i class="number2">
                                <input type="checkbox" name="number_list[]" value="1" <?php if (isset($_POST['number_list']) && in_array("1", $_POST['number_list'])) echo 'checked="checked"'; ?> />1</br>
                            </i>
                        </div>
                    </div>
                </label>

                <label class="option_item">
                    <div class="option_inner number">
                        <div class="tickmark"></div>
                        <div class="icon">
                            <i class="number">
                                <input type="checkbox" name="number_list[]" value="2" <?php if (isset($_POST['number_list']) && in_array("2", $_POST['number_list'])) echo 'checked="checked"'; ?> />2</br>
                            </i>
                        </div>
                    </div>
                </label>

                <label class="option_item">
                    <div class="option_inner number">
                        <div class="tickmark"></div>
                        <div class="icon">
                            <i class="number">
                                <input type="checkbox" name="number_list[]" value="3" <?php if (isset($_POST['number_list']) && in_array("3", $_POST['number_list'])) echo 'checked="checked"'; ?> />3</br>
                            </i>
                        </div>
                    </div>
                </label>

                <label class="option_item">
                    <div class="option_inner number">
                        <div class="tickmark"></div>
                        <div class="icon">
                            <i class="number">
                                <input type="checkbox" name="number_list[]" value="4" <?php if (isset($_POST['number_list']) && in_array("4", $_POST['number_list'])) echo 'checked="checked"'; ?> />4</br>
                            </i>
                        </div>
                    </div>
                </label>

                <label class="option_item">
                    <div class="option_inner number">
                        <div class="tickmark"></div>
                        <div class="icon">
                            <i class="number">
                                <input type="checkbox" name="number_list[]" value="5" <?php if (isset($_POST['number_list']) && in_array("5", $_POST['number_list'])) echo 'checked="checked"'; ?> />5</br>
                            </i>
                        </div>
                    </div>
                </label>

                <label class="option_item">
                    <div class="option_inner number">
                        <div class="tickmark"></div>
                        <div class="icon">
                            <i class="number">
                                <input type="checkbox" name="number_list[]" value="6" <?php if (isset($_POST['number_list']) && in_array("6", $_POST['number_list'])) echo 'checked="checked"'; ?> />6</br>
                            </i>
                        </div>
                    </div>
                </label>

                <label class="option_item">
                    <div class="option_inner number">
                        <div class="tickmark"></div>
                        <div class="icon">
                            <i class="number">
                                <input type="checkbox" name="number_list[]" value="7" <?php if (isset($_POST['number_list']) && in_array("7", $_POST['number_list'])) echo 'checked="checked"'; ?> />7</br>
                            </i>
                        </div>
                    </div>
                </label>

                <label class="option_item">
                    <div class="option_inner number">
                        <div class="tickmark"></div>
                        <div class="icon">
                            <i class="number">
                                <input type="checkbox" name="number_list[]" value="8" <?php if (isset($_POST['number_list']) && in_array("8", $_POST['number_list'])) echo 'checked="checked"'; ?> />8</br>
                            </i>
                        </div>
                    </div>
                </label>

                <label class="option_item">
                    <div class="option_inner number">
                        <div class="tickmark"></div>
                        <div class="icon">
                            <i class="number">
                                <input type="checkbox" name="number_list[]" value="9" <?php if (isset($_POST['number_list']) && in_array("9", $_POST['number_list'])) echo 'checked="checked"'; ?> />9</br>
                            </i>
                        </div>
                    </div>
                </label>

                <label class="option_item">
                    <div class="option_inner number">
                        <div class="tickmark"></div>
                        <div class="icon">
                            <i class="number">
                                <input type="checkbox" name="number_list[]" value="10" <?php if (isset($_POST['number_list']) && in_array("10", $_POST['number_list'])) echo 'checked="checked"'; ?> />10</br>
                            </i>
                        </div>
                    </div>
                </label>

                <label class="option_item">
                    <div class="option_inner number">
                        <div class="tickmark"></div>
                        <div class="icon">
                            <i class="number">
                                <input type="checkbox" name="number_list[]" value="11" <?php if (isset($_POST['number_list']) && in_array("11", $_POST['number_list'])) echo 'checked="checked"'; ?> />11</br>
                            </i>
                        </div>
                    </div>
                </label>

                <label class="option_item">
                    <div class="option_inner number">
                        <div class="tickmark"></div>
                        <div class="icon">
                            <i class="number">
                                <input type="checkbox" name="number_list[]" value="12" <?php if (isset($_POST['number_list']) && in_array("12", $_POST['number_list'])) echo 'checked="checked"'; ?> />12</br>
                            </i>
                        </div>
                    </div>
                </label>

                <label class="option_item">
                    <div class="option_inner number">
                        <div class="tickmark"></div>
                        <div class="icon">
                            <i class="number">
                                <input type="checkbox" name="number_list[]" value="13" <?php if (isset($_POST['number_list']) && in_array("13", $_POST['number_list'])) echo 'checked="checked"'; ?> />13</br>
                            </i>
                        </div>
                    </div>
                </label>

                <label class="option_item">
                    <div class="option_inner number">
                        <div class="tickmark"></div>
                        <div class="icon">
                            <i class="number">
                                <input type="checkbox" name="number_list[]" value="14" <?php if (isset($_POST['number_list']) && in_array("14", $_POST['number_list'])) echo 'checked="checked"'; ?> />14</br>
                            </i>
                        </div>
                    </div>
                </label>

                <label class="option_item">
                    <div class="option_inner number">
                        <div class="tickmark"></div>
                        <div class="icon">
                            <i class="number">
                                <input type="checkbox" name="number_list[]" value="15" <?php if (isset($_POST['number_list']) && in_array("15", $_POST['number_list'])) echo 'checked="checked"'; ?> />15</br>
                            </i>
                        </div>
                    </div>
                </label>

                <label class="option_item">
                    <div class="option_inner number">
                        <div class="tickmark"></div>
                        <div class="icon">
                            <i class="number">
                                <input type="checkbox" name="number_list[]" value="16" <?php if (isset($_POST['number_list']) && in_array("16", $_POST['number_list'])) echo 'checked="checked"'; ?> />16</br>
                            </i>
                        </div>
                    </div>
                </label>

                <label class="option_item">
                    <div class="option_inner number">
                        <div class="tickmark"></div>
                        <div class="icon">
                            <i class="number">
                                <input type="checkbox" name="number_list[]" value="17" <?php if (isset($_POST['number_list']) && in_array("17", $_POST['number_list'])) echo 'checked="checked"'; ?> />17</br>
                            </i>
                        </div>
                    </div>
                </label>

                <label class="option_item">
                    <div class="option_inner number">
                        <div class="tickmark"></div>
                        <div class="icon">
                            <i class="number">
                                <input type="checkbox" name="number_list[]" value="18" <?php if (isset($_POST['number_list']) && in_array("18", $_POST['number_list'])) echo 'checked="checked"'; ?> />18</br>
                            </i>
                        </div>
                    </div>
                </label>

                <label class="option_item">
                    <div class="option_inner number">
                        <div class="tickmark"></div>
                        <div class="icon">
                            <i class="number">
                                <input type="checkbox" name="number_list[]" value="19" <?php if (isset($_POST['number_list']) && in_array("19", $_POST['number_list'])) echo 'checked="checked"'; ?> />19</br>
                            </i>
                        </div>
                    </div>
                </label>

                <label class="option_item">
                    <div class="option_inner number">
                        <div class="tickmark"></div>
                        <div class="icon3">
                            <i class="number3">
                                <input type="checkbox" name="number_list[]" value="20" <?php if (isset($_POST['number_list']) && in_array("20", $_POST['number_list'])) echo 'checked="checked"'; ?> />20</br>
                            </i>
                        </div>
                    </div>
                </label>

                <label class="option_item">
                    <div class="option_inner number">
                        <div class="tickmark"></div>
                        <div class="icon3">
                            <i class="number3">
                                <input type="checkbox" name="number_list[]" value="21" <?php if (isset($_POST['number_list']) && in_array("21", $_POST['number_list'])) echo 'checked="checked"'; ?> />21</br>
                            </i>
                        </div>
                    </div>
                </label>

                <label class="option_item">
                    <div class="option_inner number">
                        <div class="tickmark"></div>
                        <div class="icon3">
                            <i class="number3">
                                <input type="checkbox" name="number_list[]" value="22" <?php if (isset($_POST['number_list']) && in_array("22", $_POST['number_list'])) echo 'checked="checked"'; ?> />22</br>
                            </i>
                        </div>
                    </div>
                </label>

                <label class="option_item">
                    <div class="option_inner number">
                        <div class="tickmark"></div>
                        <div class="icon3">
                            <i class="number3">
                                <input type="checkbox" name="number_list[]" value="23" <?php if (isset($_POST['number_list']) && in_array("23", $_POST['number_list'])) echo 'checked="checked"'; ?> />23</br>
                            </i>
                        </div>
                    </div>
                </label>

                <label class="option_item">
                    <div class="option_inner number">
                        <div class="tickmark"></div>
                        <div class="icon3">
                            <i class="number3">
                                <input type="checkbox" name="number_list[]" value="24" <?php if (isset($_POST['number_list']) && in_array("24", $_POST['number_list'])) echo 'checked="checked"'; ?> />24</br>
                            </i>
                        </div>
                    </div>
                </label>

                <label class="option_item">
                    <div class="option_inner number">
                        <div class="tickmark"></div>
                        <div class="icon3">
                            <i class="number3">
                                <input type="checkbox" name="number_list[]" value="25" <?php if (isset($_POST['number_list']) && in_array("25", $_POST['number_list'])) echo 'checked="checked"'; ?> />25</br>
                            </i>
                        </div>
                    </div>
                </label>

                <label class="option_item">
                    <div class="option_inner number">
                        <div class="tickmark"></div>
                        <div class="icon3">
                            <i class="number3">
                                <input type="checkbox" name="number_list[]" value="26" <?php if (isset($_POST['number_list']) && in_array("26", $_POST['number_list'])) echo 'checked="checked"'; ?> />26</br>
                            </i>
                        </div>
                    </div>
                </label>

                <label class="option_item">
                    <div class="option_inner number">
                        <div class="tickmark"></div>
                        <div class="icon3">
                            <i class="number3">
                                <input type="checkbox" name="number_list[]" value="27" <?php if (isset($_POST['number_list']) && in_array("27", $_POST['number_list'])) echo 'checked="checked"'; ?> />27</br>
                            </i>
                        </div>
                    </div>
                </label>

                <label class="option_item">
                    <div class="option_inner number">
                        <div class="tickmark"></div>
                        <div class="icon3">
                            <i class="number3">
                                <input type="checkbox" name="number_list[]" value="28" <?php if (isset($_POST['number_list']) && in_array("28", $_POST['number_list'])) echo 'checked="checked"'; ?> />28</br>
                            </i>
                        </div>
                    </div>
                </label>

                <label class="option_item">
                    <div class="option_inner number">
                        <div class="tickmark"></div>
                        <div class="icon3">
                            <i class="number3">
                                <input type="checkbox" name="number_list[]" value="29" <?php if (isset($_POST['number_list']) && in_array("29", $_POST['number_list'])) echo 'checked="checked"'; ?> />29</br>
                            </i>
                        </div>
                    </div>
                </label>

                <label class="option_item">
                    <div class="option_inner number">
                        <div class="tickmark"></div>
                        <div class="icon3">
                            <i class="number3">
                                <input type="checkbox" name="number_list[]" value="30" <?php if (isset($_POST['number_list']) && in_array("30", $_POST['number_list'])) echo 'checked="checked"'; ?> />30</br>
                            </i>
                        </div>
                    </div>
                </label>
            </div>


            <div class="submit">
                <input type="submit" name="btnSubmit" value="Submit" />
                </br>
            </div>
        </div>
    </form>

    <?php
    if (isset($_POST['btnSubmit'])) ?>
    <!--{
       if (isset($_POST['number_list'])) {
            foreach ($_POST['number_list'] as $value) {
                echo "<p style=color:$value>$value</p>";
            }
       }
    }
     ?> -->
    </form>

</body>

</html>