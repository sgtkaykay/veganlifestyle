<div class="fcontent">
  <div class="style">
    <div class="titleContainer">
      <h1>Vegan Foods</h1>
    </div>
    <?php
      $domOBJ = new DOMDocument();
      $domOBJ->load("http://feeds.feedburner.com/YupItsVegan");//XML page URL

      $content = $domOBJ->getElementsByTagName("item");
    ?>
    <ul>
      <?php
        foreach( $content as $data ) {
          $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
          $description = $data->getElementsByTagName("description")->item(0)->nodeValue;

          echo "<div class='contentContainer'>
                  <h2>$title</h2>
                </div>
                <div class='contentContainer'>
                  <p>$description<p>
                </div>";
         }
      ?>
    </ul>
  </div>
</div>
