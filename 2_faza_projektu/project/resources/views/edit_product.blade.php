<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footwear shop</title>
    <link rel="stylesheet" href="{{ asset('storage/css/create_product.css') }}">
</head>
<body>
    <!--Hlavička stránky-->
    @include('header')

    <div class="spacer">
        &nbsp;
    </div>

    <!-- VYTVORENIE PRODUKTU -->
    <div class="canvas">
      <h1>Upravenie produktu</h1>
      <section class="all_input">
        <!-- meno,popis,cena -->
        <section class="input_section">
          <form>
            <br>
            <input type="text" placeholder="ID produktu" id="id"><br>
            <br>
            <input type="text" placeholder="Nazov produktu" id="name"><br>
            <br>
            <textarea type="text" rows="3" placeholder="Popis produktu" id="description" class="description"></textarea><br>
          </form>
        </section>
        <!-- kategoria,material,znacka,farba -->
        <section class="input_section">
            <form>
              <br>
              <input type="number" step=".01" placeholder="Cena produktu" id="price"><br>
              <br>
              <select title="category" class="categories" placeholder="Kategória produktu" id="category">
                <option value="Empty" class="empty" id="empty">Kategória produktu</option>
                <option value="Basketball">Basketball</option>
                <option value="Football">Football</option>
                <option value="Voleyball">Voleyball</option>
                <option value="Tennis">Tennis</option>
                <option value="Running">Running</option>
                <option value="Hiking">Hiking</option>
              </select><br><br>
              <input type="text" placeholder="Materiál produktu" id="material"><br>
              <br>
              <input type="text" placeholder="Značka produktu" id="brand"><br>
              <br>
          </form>
        </section>
        <!-- velkosti,obrazky -->
        <section class="input_section">
            <form>
              <br>
              <select title="onsale" class="categories" placeholder="Kategória produktu" id="onsale">
                <option value="Empty" class="empty" id="empty">V akcií</option>
                <option value="True">Áno</option>
                <option value="False">Nie</option>
              </select><br>
              <br>
              <input type="text" placeholder="Farba produktu" id="color" class="color"><br>
              <br>
              <span class="files_label">Nahrať veľkosti</span>
              <br>
              <input type="file" id="sizes" class="input_files" multiple="multiple" accept="text/csv">
              <br>
              <span class="files_label">Nahrať obrázky</span>
              <br>
              <input type="file" id="images" class="input_files" multiple="multiple" accept=".jpg, .png">
          </form>
        </section>
      </section>
      <!-- potvrdenie vytvorenia -->
      <button id="confirm_button" class="confirm_button">Upraviť produkt</button>
    </div>

    <!--Nožička stránky-->
    @include('footer')

    <script>
      var elements = document.querySelectorAll('.categories');
      elements.forEach(element => {
        element.style.color = "#707070";
        element.addEventListener(('change'), (event) => {
          if (event.target.value != 'Empty') {
              event.target.style.color = "black";
          }
          else {
            event.target.style.color = "#707070";
          }
        });
      });
      document.getElementById('price').addEventListener(('change'), (event) => {
          if (parseFloat(event.target.value) <= 0) {
              event.target.value = 0;
          }
      });
    </script>
</body>
</html>