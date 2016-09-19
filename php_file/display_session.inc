<div class='div-var-dump'>
    <p>SESSION</p>
    <p>
      <?php
        foreach ($_SESSION as $key => $value) {
          echo $key;
          echo" : ";
          echo $value;
          echo "|**|";
        }
      ?>
    </p>
    <br/>
    <p>POST :</p>
    <?php
      foreach ($_POST as $key => $value) {
        echo"<p>";
        echo $key;
        echo" : ";
        echo $value;
        echo "|**|</p>";
      }
    ?>
</div>
